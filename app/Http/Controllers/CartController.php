<?php

namespace App\Http\Controllers;

use App\Http\Resources\CartResource;
use App\Http\Responses\CustomResponse;
use App\Models\Cart;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
/**
 * @group Cart management
 * 
 * Cart actions
 */
class CartController extends Controller
{
    /**
     * Get user active cart (unchecked)
     * @authenticated
     * @param mixed $user_id
     * @return CustomResponse
     */
    public function show($user_id)
    {
        $cart = Cart::firstOrCreate(['user_id' => $user_id, 'status' => "active"]);

        //
        $success['cart'] = new CartResource($cart);
        $success['user_name'] = User::find($user_id)->name ; 
        //
        return CustomResponse::ok($success);
    }

    /**
     * Add new product to current user cart 
     * @authenticated
     * @param \Illuminate\Http\Request $request
     * @param mixed $user_id
     * @return CustomResponse
     */
    public function add(Request $request , $user_id)
    {
        //
        $cart = Cart::firstOrCreate(['user_id' => $user_id, 'status' => 'active']);

        //
        $product = Product::find($request->product_id);
        $quantity = $request->quantity;
        $price = $product->dis_cost * $quantity;

        //
        $new_cart_item = $cart->items()->firstOrNew(
            [
                'product_id' => $product->product_id
            ],
        );
        $new_cart_item->quantity = $quantity;
        $new_cart_item->price = $price;
        $new_cart_item->save();

        //
        return CustomResponse::ok([
            'msg' => "Product added to cart",
        ]);
    }


    /**
     * Remove product from cart
     * @authenticated
     * @param \Illuminate\Http\Request $request
     * @param mixed $user_id
     * @return CustomResponse
     */
    public function remove(Request $request , $user_id)
    {
        //
        $cart = Cart::firstWhere(['user_id' => $user_id, 'status' => 'active']);

        //
        $cart->items()->firstWhere('product_id', $request->product_id)->delete();

        //TODO : Make it deleted response 
        return CustomResponse::ok([
            'msg' => 'Product deleted from cart'
        ]);
    }
}

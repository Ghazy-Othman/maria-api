<?php

namespace App\Http\Controllers;

use App\Http\Responses\CustomResponse;
use App\Models\Cart;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;

/**
 * @group Order management
 *
 * APIs for managing orders
 */
class OrderController extends Controller
{

    /**
     * Get all orders for the current user 
     * @authenticated
     */
    public function index(Request $request, $user_id)
    {
        // Add more filtering if needed 
        $orders = Order::where('user_id', $user_id)
            ->when($request->status, function ($query) use ($request) {
                $query->where('status', $request->status);
            })
            ->orderBy('updated_at', 'desc')
            ->get() ; 

        //
        return CustomResponse::ok($orders);
    }

    /**
     * Create new order 
     * @authenticated
     */
    public function store(Request $request, $user_id)
    {
        //
        $cart = Cart::where(['user_id' => $user_id, 'status' => 'active'])->first();
        if (!$cart) {
            return CustomResponse::badRequest('No cart found ...!!!');
        }
        $cart_items = $cart->items;
        if (count($cart_items) == 0) {
            return CustomResponse::badRequest('No cart items found..!!!');
        }
        //
        $total_price = 0;
        foreach ($cart_items as $item) {
            $total_price += $item->price * 100;
        }
        $total_price /= 100;

        //
        $new_order = Order::create([
            'user_id' => $user_id,
            'total' => $total_price
        ]);

        //
        $cart->status = 'checked_out';
        $cart->save();

        //
        return CustomResponse::ok([
            'msg' => 'New order added successfully',
            'order' => $new_order
        ]);
    }

    /**
     * Get a specific order 
     * @authenticated
     */
    public function show($user_id, $order_id)
    {
        //
        $order = Order::find($order_id);
        $cart = Cart::where(['user_id' => $user_id, 'status' => 'checked_out'])->get()->last();
        //
        $response['order'] = $order;
        $response['order_items'] = $cart->items;

        return CustomResponse::ok($response);
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Responses\CustomResponse;
use App\Models\Order;
use App\Models\OrderContent;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 * @group Order management
 *
 * APIs for managing orders
 */

class OrderController extends Controller
{
    /**
     * Create new order 
     * @authenticated
     */
    public function makeOrder(Request $request) {
        
        $total = 0.0 ; 
        $products = (Array) $request->products ; 
        
        foreach($products as $product) { 
            
            $current_product = Product::find($product['product_id']) ;
            if($current_product == null) { 
                return CustomResponse::notFound('Product with id '. $product['product_id'] .' not found'); 
            }
            $fixed_cost =  $current_product->cost * $product['count']; 
            if($current_product->discount != null) { 
                ///TODO : update fixed cost 
                $fixed_cost *= floatval($current_product->discount / 100) ; 
            }
            $total += $fixed_cost ; 
        }
        
        // current user 
        $user = Auth::user() ; 
        
        // new order info.
        $order_info = [
            'user_id' => 1, // $user->user_id , 
            'total' => $total 
        ] ;

        //create order
        $order = Order::create($order_info) ;

        foreach($products as $product) { 
            $content = [
                'order_id' => $order->order_id , 
                'product_id' => $product['product_id'] , 
                'count' => $product['count']
            ] ;
            OrderContent::create($content); 
        }
        
        ///TODO : check if works with frontend
        // If not , redirect from frontend and return ok response here 
        return redirect("api/payment?oid=$order->order_id");
     }
}

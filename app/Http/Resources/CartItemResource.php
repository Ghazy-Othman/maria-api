<?php

namespace App\Http\Resources;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CartItemResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'product' => new ProductResource(Product::find($this->product_id)),
            'cart_id' => $this->cart_id,
            'cart_item_id' => $this->cart_item_id,
            'price' => $this->price,
            'quantity' => $this->quantity
        ];
    }
}

<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'product_id' => $this->product_id,
            'product_name' => $this->product_name,
            'cost' => $this->cost,
            'new_cost' => number_format($this->disCost , 2) , 
            'description' => $this->description,
            'discount' => $this->discount,
            'category_id' => $this->category_id,
            'product_image' => $this->product_image == null ? null : env('APP_URL') . Storage::url('images/products/' . $this->product_image)
        ];
    }
}

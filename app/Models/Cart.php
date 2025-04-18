<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Cart extends Model
{
    /** @use HasFactory<\Database\Factories\CartFactory> */
    use HasFactory;


    //
    protected $primaryKey = "cart_id";

    //
    protected $fillable = [
        "user_id",
        "status"
    ];

    //
    public function items(): HasMany
    {
        return $this->hasMany(CartItem::class , 'cart_id');
    }
}

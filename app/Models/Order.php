<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Order extends Model
{
    use HasFactory;

    //
    protected $primaryKey = 'order_id';

    //
    protected $fillable = [
        'user_id',
        'total',
    ];

    //
    public function total(): Attribute
    {
        return Attribute::make(
            get: fn($value) => $value / 100,
            set: fn($value) => $value * 100
        );
    }

    //
    public function payment(): HasOne
    {
        return $this->hasOne(Payment::class);
    }
}

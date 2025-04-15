<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $primaryKey = 'payment_id';

    public $incrementing = false ; 

    protected $fillable = [
        'payment_id',
        'order_id',
        'invoice_id',
        'status',
    ];


    //TODO : Check for response attribute needing
    
}

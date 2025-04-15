<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory;

    protected $primaryKey = 'product_id' ;

    public $timestamps = false;

    protected $fillable = [
        'product_name' , 
        'cost' ,
        'description' ,
        'discount' ,
        'category_id',
        'product_image'
    ] ; 

    
    public function disCost(): Attribute
    {
        return Attribute::make(
            get: fn() => $this->cost - (($this->cost * $this->discount) / 100 )
        ) ;
    }

    public function cost() : Attribute
    {
        return Attribute::make(
            get: fn($cost) => $cost / 100 ,
            set: fn($cost) => $cost * 100 ,
        ) ;
    }
    
    public function category() : BelongsTo { 
        return  $this->belongsTo(Category::class , 'category_id') ; 
    }

}

<?php

namespace App\Models;

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

    
    public function category() : BelongsTo { 
        return  $this->belongsTo(Category::class , 'category_id') ; 
    }

    


}

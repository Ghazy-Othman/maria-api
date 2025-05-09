<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Message extends Model
{

    //
    protected $primaryKey = 'message_id' ; 
    //
    protected $fillable = [
        'role' , 
        'chat_id' , 
        'content'
    ];


    public function chat() : BelongsTo
    {
        return $this->belongsTo(Chat::class , 'chat_id');
    }

    
}

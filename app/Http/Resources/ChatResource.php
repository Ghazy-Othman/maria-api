<?php

namespace App\Http\Resources;

use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ChatResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "chat_id"=> $this->chat_id,
            "title"=> $this->title,
            "messages"=> Message::where('chat_id' , $this->chat_id)->get() , 
        ] ; 
    }
}

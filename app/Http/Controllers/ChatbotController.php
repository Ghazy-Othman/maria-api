<?php

namespace App\Http\Controllers;

use App\Http\Resources\ChatResource;
use App\Http\Responses\CustomResponse;
use App\Models\Chat;
use App\Models\Product;
use Gemini\Data\Content;
use Gemini\Enums\ModelType;
use Gemini\Enums\Role;
use Illuminate\Http\Request;
use Gemini\Laravel\Facades\Gemini;
use Illuminate\Support\Str;

class ChatbotController extends Controller
{

    //
    public function show($user_id)
    {
        //
        $chat = Chat::firstOrCreate(['user_id' => $user_id], ['title' => "New chat"]);

        //
        $response = new ChatResource($chat);

        //
        return CustomResponse::ok($response);
    }

    public function sendMessage(Request $request, $user_id)
    {
        // 
        $chat = chat::firstOrCreate(['user_id' => $user_id], ['title' => 'New Chat']);

        //
        $chat->messages()->create([
            'role' => 'user',
            'chat_id' => $chat->chat_id,
            'content' => $request->message
        ]);

        //
        $messages = $chat->messages()
            ->orderBy('created_at')
            ->get(['role', 'content'])
            ->toArray();


        // Get previous messages from both user and model
        $geminiHistory = $this->get_initial_info();
        foreach ($messages as $message) {
            $role = ($message['role'] == 'user') ? Role::USER : Role::MODEL;
            $geminiHistory[] = Content::parse($message['content'], $role);
        }

        //
        $model_chat = Gemini::chat(ModelType::GEMINI_FLASH)->startChat($geminiHistory);

        $response = $model_chat->sendMessage(Content::parse($request->message, Role::USER));

        $model_response = $response->text();

        // Add Gemini response to messages
        $chat->messages()->create([
            'role' => 'model',
            'content' => $model_response
        ]);

        // Update chat title if first message
        if ($chat->messages()->count() === 2) {
            $chat->title = Str::limit($request->message, 40);
            $chat->save();
        }

        //
        return CustomResponse::ok(['model_response' => $model_response]);
    }


    public function deleteChat($user_id)
    {
        $chat = chat::firstWhere('user_id', $user_id);

        $chat->delete();

        return CustomResponse::deleted();
    }

    public function get_initial_info()
    {
        // Test with fake data
        $products = json_decode(file_get_contents(base_path('/data.json')));
        $products = $products->honey_types;

        $initial_data = [];
        $initial_data[] = Content::parse(
            'Read this products information, each product will be in JSON formate with 
        : name , description and cost',
            Role::USER
        );

        // $products = Product::get([
        //     'product_name',
        //     'cost',
        //     'description',
        //     'discount',
        // ])->toArray();

        foreach ($products as $product) {
            $initial_data[] = Content::parse(json_encode($product), Role::USER);
        }

        return $initial_data;
    }
}

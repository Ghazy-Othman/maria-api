<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ChatbotController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


//===============================================
//                  Users
//===============================================

Route::prefix('users')->group(function () {

    // Get all user (Admin endpoint)
    Route::get('/', [UserController::class, 'index'])->middleware('auth:sanctum', 'isAdmin')->name('users.index');

    // Auth endpoints 
    Route::post('/login', [UserController::class, 'login'])->name('users.login');
    Route::post('/signup', [UserController::class, 'signup'])->name('users.signup');
    Route::post('/request-otp-code', [UserController::class, 'requestOtpCode'])->name('users.requestOtp');

    // Password reset 
    Route::post('/reset-password', [UserController::class, 'resetPassword']);

    // User-specific routes with currentUser middleware
    Route::middleware(['auth:sanctum', 'currentUser'])->group(function () {

        // User info
        Route::get('/{user_id}', [UserController::class, 'show']);
        Route::post('/{user_id}', [UserController::class, 'update']);
        Route::delete('/{user_id}', [UserController::class, 'destroy']);

        // User cart
        Route::get('/{user_id}/cart', [CartController::class, 'show']);
        Route::post('/{user_id}/cart/add', [CartController::class, 'add']);
        Route::post('/{user_id}/cart/remove', [CartController::class, 'remove']);

        // User orders
        Route::get('/{user_id}/orders', [OrderController::class, 'index']);
        Route::get('/{user_id}/orders/{order_id}', [OrderController::class, 'show']);
        Route::post('/{user_id}/orders/', [OrderController::class, 'store']);

        // Payment
        Route::get('/{user_id}/payment/initiate/{orderId}', [PaymentController::class, 'initiate'])->name('payment.initiate');
        Route::get('/{user_id}/payment/callback', [PaymentController::class, 'callback'])->name('payment.callback');
        Route::get('/{user_id}/payment/failed', [PaymentController::class, 'failed'])->name('payment.failed');

    });
    
    // AI Chatbot
    Route::get('/{user_id}/chat' , [ChatbotController::class , 'show']) ;
    Route::post('/{user_id}/chat' , [ChatbotController::class , 'sendMessage']) ;
    Route::delete('/{user_id}/chat' , [ChatbotController::class , 'deleteChat']) ;
       
    
});


//===============================================
//            Categories & Prodcuts
//===============================================

Route::apiResource('categories', CategoryController::class)->only(['index', 'show']); // Public routes
Route::apiResource('products', ProductController::class)->only(['index', 'show']); // Public routes

Route::middleware(['auth:sanctum', 'isAdmin'])->group(function () {
    Route::apiResource('categories', CategoryController::class)->except(['index', 'show']);
    Route::apiResource('products', ProductController::class)->except(['index', 'show']);
});


Route::get('/chatbot' , [ChatbotController::class, 'chat']) ; 

//===============================================
//                 AI Chatbot
//===============================================
Route::get('/chatbot' , [ChatbotController::class, 'get_initial_info']) ; 

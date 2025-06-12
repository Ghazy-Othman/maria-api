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
    Route::post('/auth/login', [UserController::class, 'login'])->name('users.login'); 
    Route::post('/auth/signup', [UserController::class, 'signup'])->name('users.signup'); 

    // Password reset 
    Route::post('/auth/request-otp-code', [UserController::class, 'requestOtpCode'])->name('users.requestOtp');
    Route::post('/auth/reset-password', [UserController::class, 'resetPassword']);

    // User-specific routes with currentUser middleware
    Route::middleware(['auth:sanctum', 'currentUser'])->group(function () {

        // User info
        Route::get('/{user_id}', [UserController::class, 'show']);
        Route::put('/{user_id}', [UserController::class, 'update']);
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
        // Route::get('/payment/initiate/{order_id}', [PaymentController::class, 'initiate'])->name('payment.initiate')->withoutMiddleware(['auth:sanctum', 'currentUser']);
        // Route::get('/payment/callback', [PaymentController::class, 'callback'])->name('payment.callback')->withoutMiddleware(['auth:sanctum', 'currentUser']);
        //Route::get('/payment/failed', [PaymentController::class, 'failed'])->name('payment.failed')->withoutMiddleware(['auth:sanctum', 'currentUser']);
        
        // AI Chatbot
        Route::get('/{user_id}/chatbot', [ChatbotController::class, 'show']);
        Route::post('/{user_id}/chatbot', [ChatbotController::class, 'sendMessage']);
        Route::delete('/{user_id}/chatbot', [ChatbotController::class, 'deleteChat']);
    });

});


//===============================================
//            Categories & Prodcuts
//===============================================
    
Route::apiResource('categories', CategoryController::class)->only(['index', 'show']); // Public routes
Route::apiResource('products', ProductController::class)->only(['index', 'show']); // Public routes

Route::middleware(['auth:sanctum', 'isAdmin'])->group(function () {
    //
    Route::post('/categories', [CategoryController::class, 'store']);
    Route::put('/categories/{category_id}', [CategoryController::class, 'update']);
    Route::delete('/categories/{category_id}', [CategoryController::class, 'destroy']);

    //
    Route::post('/products', [ProductController::class, 'store']);
    Route::put('/products/{product_id}', [ProductController::class, 'update']);
    Route::delete('/products/{product_id}', [ProductController::class, 'destroy']);

});

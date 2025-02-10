<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MyFatoorahController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


//===============================================
//                  Users
//===============================================

Route::prefix('users')->group(function () {
    Route::post('/login', [UserController::class, 'login'])->name('users.login');
    Route::post('/signup', [UserController::class, 'signup'])->name('users.signup');
    Route::post('/request-otp-code', [UserController::class, 'requestOtpCode'])->name('users.requestOtp');
    Route::get('/', [UserController::class, 'index'])->middleware('auth:sanctum', 'isAdmin')->name('users.index');
    
    // User-specific routes with currentUser middleware
    Route::middleware(['auth:sanctum', 'currentUser'])->group(function () {
        Route::get('/{user_id}', [UserController::class, 'show'])->name('users.show');
        Route::post('/{user_id}', [UserController::class, 'update'])->name('users.update');
        Route::delete('/{user_id}', [UserController::class, 'destroy'])->name('users.delete');
    });

    // Password reset routes
    Route::post('/reset-password', [UserController::class, 'resetPassword'])->name('users.resetPassword');
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


Route::prefix('orders')->group(function() {
    Route::post('/make' , [OrderController::class , 'makeOrder'])->middleware('auth:sanctum') ;
}) ; 

Route::get('/payment' ,[MyFatoorahController::class, 'index']) ;

///TODO
// Route::middleware('auth:sanctum')->group(function () {
//     Route::apiResource('orders', OrderController::class);
    
//     Route::prefix('payments')->group(function () {
//         Route::post('/pay', [MyFatoorahController::class, 'pay'])->name('payments.pay');
//         Route::post('/callback', [MyFatoorahController::class, 'callback'])->name('payments.callback');
//     });
// });

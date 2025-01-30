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

    Route::post('/login', [UserController::class, 'login']);
    Route::post('/signup', [UserController::class, 'signup']);

    Route::post('/request-otp-code' , [UserController::class , 'requestOTPCode']) ; 
    Route::post('/reset-password' , [UserController::class , 'resetPassword']) ;
    Route::middleware('auth:sanctum')->group(function () {

        Route::get('/', [UserController::class, 'index'])->middleware('isAdmin');

        Route::middleware('currentUser')->group(function () {

            Route::get('/{user_id}', [UserController::class, 'show']);

            Route::post('/{user_id}', [UserController::class, 'update']); //TODO : Find a way to use patch instead of post

            Route::delete('/{user_id}', [UserController::class, 'destroy']);
        });
    });
});


//===============================================
//                  Categories
//===============================================

Route::prefix('categories')->group(function () {

    // Get all categories 
    Route::get('/', [CategoryController::class, 'index']);

    // Get specific category
    Route::get('/{category_id}', [CategoryController::class, 'show']);

    // Need auth
    //TODO : Handle auth failed 
    Route::middleware(['auth:sanctum', 'isAdmin'])->group(function () {

        // Create new category
        Route::post('/', [CategoryController::class, 'store']);

        // Update specific controller
        Route::post('/{category_id}', [CategoryController::class, 'update']); //TODO : Find a way to use patch instead of post

        // Delete specific controller
        Route::delete('/{category_id}', [CategoryController::class, 'destroy']);
    });
});


//===============================================
//                  Prodcuts
//===============================================

Route::prefix('products')->group(function () {

    // Get all categories 
    Route::get('/', [ProductController::class, 'index']);

    // Get specific category
    Route::get('/{product_id}', [ProductController::class, 'show']);

    // Need auth
    //TODO : Handle auth failed 
    Route::middleware(['auth:sanctum', 'isAdmin'])->group(function () {

        // Create new category
        Route::post('/', [ProductController::class, 'store']);

        // Update specific controller
        Route::post('/{product_id}', [ProductController::class, 'update']); //TODO : Find a way to use patch instead of post

        // Delete specific controller
        Route::delete('/{product_id}', [ProductController::class, 'destroy']);
    });
});


Route::prefix('orders')->group(function() {
    Route::post('/make' , [OrderController::class , 'makeOrder'])->middleware('auth:sanctum') ;
}) ; 

Route::get('/payment' ,[MyFatoorahController::class, 'index']) ;
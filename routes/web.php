<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/public_docs', function () {
    return view('scribe.index');
});

Route::get('/', function () {
    return "<h1>
API for Maria Honey Company
</h1>
<br>
<h1>
Developed By : Ghazy 👾
</h1>";
});

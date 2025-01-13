<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});


Route::resource('/users',UserController::class);

Route::resource('/product',ProductController::class);

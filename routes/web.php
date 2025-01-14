<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('index');
// });


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    // Homepage setelah login
    Route::get('/', function () {
        return view('index');
    })->name('index');

    // Route untuk User, Setting, dan Product hanya bisa diakses setelah login
    Route::resource('/users', UserController::class);
    Route::resource('/setting', SettingController::class);
    Route::resource('/product', ProductController::class);

    // Edit route khusus
    Route::get('product/{product}/edit', [ProductController::class, 'edit'])->name('product.edit');
    Route::get('user/{user}/edit', [UserController::class, 'edit'])->name('user.edit');
});

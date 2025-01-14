<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SettingController;
use App\Models\Product;
use App\Models\User;

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
        $users = User::all();
        $products = Product::all();
        return view('index',compact('users','products'));
    })->name('index');

    // Route untuk User, Setting, dan Product hanya bisa diakses setelah login
    Route::resource('/users', UserController::class);
    Route::resource('/setting', SettingController::class);
    Route::resource('/product', ProductController::class);

    Route::get('/user/create', [UserController::class, 'create'])->name('user.create');

    // Edit route khusus
    Route::get('product/{product}/edit', [ProductController::class, 'edit'])->name('product.edit');
    Route::get('user/{user}/edit', [UserController::class, 'edit'])->name('user.edit');
});

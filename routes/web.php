<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/ds', function () {
    return view('body');
});

Route::get('/',[ProductController::class,'show'])->name('welcome');

Route::get('/product/{product:item_id}',[ProductController::class,'product'])->name('product');

Route::get('/register',[UserController::class,'ShowReg'])->name('register');
Route::post('/register',[UserController::class,'register']);

Route::get('/login',[UserController::class,'ShowLog'])->name('login');
Route::post('/login',[UserController::class,'Login']);

Route::get('/logout',[UserController::class,'Logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/home',[ProductController::class,'ShowHome'])->name('ShowHome');

    Route::post('/AddToCart/{product:item_id}',[CartController::class,'AddToCart'])->name('AddToCart');
    Route::get('/ShowCart',[CartController::class,'ShowCart'])->name('ShowCart');

    Route::delete('/DeleteCart/{cart:item_id}',[CartController::class,'DeleteCart'])->name('DeleteCart');

    Route::get('/CreateProduct',[ProductController::class,'ShowCreateProduct'])->name('CreateProduct');
    Route::post('/CreateProduct',[ProductController::class,'CreateProduct']);
});




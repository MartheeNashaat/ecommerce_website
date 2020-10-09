<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productcontroller;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\CartController;

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

Route::get('/', function () {
    return view('fashion');
})->name('home'); 
Route::get('/shop', [productcontroller::class, 'index'])->name('product.index');
Route::get('/homepage/{product}', [productcontroller::class, 'show'])->name('product.show');
Route::get('/search',[SearchController::class, 'search'])->name('searchy');
Route::get('/{brand}', [productcontroller::class, 'showbrand'])->name('product.brand');
Route::get('shop/category/{category_id}', [productcontroller::class, 'getfilter'])->name('product.getfilter');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::get('/add-to-cart/{product}', [CartController::class, 'add'])->name('cart.add')->middleware('auth');
Route::get('/cart',[CartController::class, 'index'] )->name('cart.index')->middleware('auth');
//Route::get('/cart/destroy/{itemId}', 'App\Http\Controllers\CartController@destroy')->name('cart.destroy')->middleware('auth');
//Route::get('/cart/update/{itemId}', 'App\Http\Controllers\CartController@update')->name('cart.update')->middleware('auth');
//Route::get('/cart/checkout', 'App\Http\Controllers\CartController@checkout')->name('cart.checkout')->middleware('auth');
//Route::resource('/orders',  'App\Http\Controllers\OrderController')->name('orders.store');
//Route::get('/done', 'App\Http\Controllers\CartController@done')->name('cart.done');

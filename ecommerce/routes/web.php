<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productcontroller;
use App\Http\Controllers\SearchController;

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

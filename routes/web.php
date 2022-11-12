<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('products',App\Http\Controllers\ProductController::class);
Route::resource('categories',App\Http\Controllers\CategoryController::class);
Route::resource('sales',App\Http\Controllers\SaleController::class);
Route::resource('voucher',App\Http\Controllers\VoucherController::class);
Route::resource('details',App\Http\Controllers\DetailController::class);
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

Route::get('/', [App\Http\Controllers\HomeClientController::class, 'index'])->name('homeClient');
Route::get('/showClient', [App\Http\Controllers\HomeClientController::class, 'indexShow'])->name('homeClientshow.index');
//Route::post('/showClient/search', [App\Http\Controllers\HomeClientController::class, 'show'])->name('homeClientshow.post');
Route::group(['middleware' => 'auth'], function () {
    Route::resource('products',App\Http\Controllers\ProductController::class);
Route::resource('categories',App\Http\Controllers\CategoryController::class);
Route::resource('sales',App\Http\Controllers\SaleController::class);
});
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('voucher',App\Http\Controllers\VoucherController::class);
Route::resource('details',App\Http\Controllers\DetailController::class);
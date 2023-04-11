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

//Admin:
Route::get('admin', 'App\Http\Controllers\AdminController@index');
Route::post('login', 'App\Http\Controllers\AdminController@login');
Route::get('dash', 'App\Http\Controllers\AdminController@dash');
Route::get('create', 'App\Http\Controllers\AdminController@create');
Route::post('store', 'App\Http\Controllers\AdminController@store');

//customer:
Route::get('register', 'App\Http\Controllers\CustomerController@index');
Route::post('customer/store', 'App\Http\Controllers\CustomerController@store');
Route::get('home', 'App\Http\Controllers\CustomerController@home');
Route::get('login/index', 'App\Http\Controllers\CustomerController@loginindex');
Route::post('log/store', 'App\Http\Controllers\CustomerController@login_customer');
Route::get('detail/{id}', 'App\Http\Controllers\CustomerController@detail');

//cart:
// Route::get('cart', 'App\Http\Controllers\CartController@productList');
// Route::get('cart/list', 'App\Http\Controllers\CartController@cartList');
// Route::get('cart/store', 'App\Http\Controllers\CartController@addToCart');

// Route::get('/', [\App\Http\Controllers\ProductController::class, 'index'])
//     ->name('products.index');
// Route::post('/', [\App\Http\Controllers\CartController::class, 'store'])
//     ->name('cart.store');

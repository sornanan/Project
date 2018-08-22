<?php

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

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/customer','CustomerController');
Route::resource('/movement','MovementController');
Route::resource('/supplier','SupplierController');
Route::resource('/sell_order','Sell_orderController');
Route::resource('/sell_order_detail','Sell_order_detailController');
Route::resource('/product_order','Product_orderController');
Route::resource('/product_order_detail','Product_order_detailController');
Route::resource('/product','ProductController');


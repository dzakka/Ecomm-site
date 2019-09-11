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

Route::get('/home', 'EcommController@show')->name('home');
Route::get('/insert-info', 'EcommController@insert');
Route::post('/store-info', 'EcommController@store');
Route::get('/show-info','EcommController@show');
Route::get('add-to-cart/{id}','CartController@show');
Route::get('/show-cart','UserCartController@index')->name('cart');
Route::get('/buy/{id}','BuyEcommController@buy');
Route::post('/buy-now/{id}','BuyEcommController@store');

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



Route::resource('products', 'product');
Route::get('admin', 'PublicController@admin');
//I love myself
Route::get('/', 'PublicController@home');
Route::post('/', 'PublicController@store');

Route::get('/maintenance', 'PublicController@maintenance');



<?php


//All products routes
Route::resource('products', 'product');

//All category routes
Route::resource('category', 'CategoryController');

//All brand routes
Route::resource('brand', 'BrandController');

//All team routes
Route::resource('team', 'TeamController');





//Get me the admin page
Route::get('admin', 'PublicController@admin');


//I love myself
Route::get('/', 'PublicController@home');

//Contact us form to email
Route::post('/', 'PublicController@store');


//Maintenance form to email
Route::get('/maintenance', 'PublicController@maintenance');


<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('index');
// });
Route::get('/home' , 'App\Http\Controllers\homeController@index')->name('home');

Route::get('/show/{id}' , 'App\Http\Controllers\productsController@show')->name('product.show');

?>
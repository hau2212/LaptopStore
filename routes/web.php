<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('index');
// });
Route::get('/home' , 'App\Http\Controllers\homeController@index')->name('home');

Route::get('/show/{id}' , 'App\Http\Controllers\productsController@show')->name('product.show'); 
Route::get('/shop','App\Http\Controllers\productsController@index')->name("product.index");
Route::get('/admin','App\Http\Controllers\Admin\AdminHomeController@index')->name('admin');
Route::get('/admin/product','App\Http\Controllers\Admin\AdminProductController@index')->name('product.admin'); 
?>
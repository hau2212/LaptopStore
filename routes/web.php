<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('index');
// });
Route::get('/home' , 'App\Http\Controllers\homeController@index')->name('home');
Route::get('/about' , 'App\Http\Controllers\homeController@about')->name('home.about');
Route::get('/contact' , 'App\Http\Controllers\ContactController@index')->name('home.contact');
Route::post('/contact/submit' , 'App\Http\Controllers\ContactController@submitForm')->name('contact.submit');


Route::get('/show/{id}' , 'App\Http\Controllers\productsController@show')->name('product.show'); 
Route::get('/shop','App\Http\Controllers\productsController@index')->name("product.index");
Route::get('/admin','App\Http\Controllers\Admin\AdminHomeController@index')->name('admin');
Route::get('/admin/product','App\Http\Controllers\Admin\AdminProductController@index')->name('product.admin'); 

?>
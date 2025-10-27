<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('index');
// });
Route::get('/home' , 'App\Http\Controllers\homeController@index')->name('home');
Route::get('/about' , 'App\Http\Controllers\homeController@about')->name('home.about');
Route::get('/contact' , 'App\Http\Controllers\ContactController@index')->name('home.contact');
Route::post('/contact/submit' , 'App\Http\Controllers\ContactController@submitForm')->name('contact.submit');
Route::get('product/{id}' , 'App\Http\Controllers\productsController@show')->name('product.show');

// Route::get('/show/{id}' , 'App\Http\Controllers\productsController@show')->name('product.show'); 
// Route::get('/shop','App\Http\Controllers\productsController@index')->name("product.index");
// Route::get('/admin','App\Http\Controllers\Admin\AdminHomeController@index')->name('admin');
// Route::get('/admin/product','App\Http\Controllers\Admin\AdminProductController@index')->name('product.admin'); 

Route::get('/admin' , 'App\Http\Controllers\admin\AdminController@index')->name('admin.dashbroad');
Route::get('/admin/products' , 'App\Http\Controllers\admin\AdminController@createProducts')->name('admin.products');
Route::post('/admin/product/store' , 'App\Http\Controllers\admin\AdminController@store')->name('admin.product.store');
Route::delete('/admin/product/delete/{id}' , 'App\Http\Controllers\admin\AdminController@delete')->name('admin.product.delete');
Route::get('/admin/product/edit/{id}', 'App\Http\Controllers\admin\AdminController@edit')->name('admin.product.edit');
Route::put('/admin/product/update/{id}', 'App\Http\Controllers\admin\AdminController@update')->name('admin.product.update');

require __DIR__.'/auth.php';
?>
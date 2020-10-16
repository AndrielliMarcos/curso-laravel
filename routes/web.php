<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
   return view('welcome');
 });

/*
Route::delete('products/{id}', 'ProductController@destroy')->name('products.destroy');
Route::put('products/{id}', 'ProductController@update')->name('products.update');
Route::get('products/{id}/edit', 'ProductController@edit')->name('products.edit');
Route::get('products/create', 'ProductController@create')->name('products.create');
Route::get('products/{id}', 'ProductController@show')->name('products.show');
Route::pos('products', 'ProductController@store')->name('products.store');
Route::get('products', 'ProductController@index')->name('products.index');
*/

Route::resource('products', 'ProductController');

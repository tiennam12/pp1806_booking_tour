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
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/tours/{tour}/edit', 'TourController@edit')->name('tours.edit');
Route::get('/tours/create', 'TourController@create')->name('tours.create');
Route::get('/tours/{tour}', 'TourController@show')->name('tours.show');
Route::post('/tours/{tour}', 'TourController@update')->name('tours.update');
Route::delete('/tours/{user}', 'TourController@destroy')->name('tours.destroy');
Route::get('/tours', 'TourController@index')->name('tours.index');
Route::post('/tours', 'TourController@store')->name('tours.store');

Route::get('/users', 'UsersController@index')->name('users.index');
Route::get('/users/{user}', 'UsersController@show')->name('users.show');
Route::delete('/users/{user}', 'UsersController@destroy')->name('users.destroy');
Route::get('/users/{user}/edit', 'UsersController@edit')->name('users.edit');
Route::post('/users/{user}', 'UsersController@update')->name('users.update');

Route::get('/orders/create', 'OrdersController@create')->name('orders.create');
Route::post('/orders', 'OrdersController@store')->name('orders.store');
Route::get('/orders', 'OrdersController@index')->name('orders.index');

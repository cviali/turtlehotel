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
})->name('home');

Auth::routes();

Route::get('/hotel', 'HotelController@index')->name('hotel');
Route::get('/home', 'HomeController@index')->name('dashboard');
Route::get('/payment', 'PaymentController@index')->name('payment');

Route::post('/update-price', 'HomeController@updatePrice')->name('update-price');

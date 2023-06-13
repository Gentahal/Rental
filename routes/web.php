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

use App\Http\Controllers\HomeController;

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('kendaraan', 'KendaraanController');
Route::get('/', function () {
    return view('welcome');
});

Route::resource('sports', 'SportsController');
Route::resource('sedan', 'SedanController');
Route::resource('suv', 'SuvController');


Route::group(['middleware' => ['auth', 'level:admin']], function () {
    Route::resource('admin', 'AdminController');
});

Route::group(['middleware' => ['auth', 'level:admin,customer']], function () {
    Route::resource('customer', 'CustomerController');
    Route::resource('rental', 'RentalController');
});
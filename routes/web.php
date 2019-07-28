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

Route::get('/', 'HomeController@index')->name('welcome');

Route::get('/contact', 'HomeController@contact')->name('contact');
Route::post('/contact', 'HomeController@contact')->name('contact');
Route::get('/about', 'HomeController@about')->name('about');

Route::get('/admin', 'AdminController@index');

Route::group(['prefix' => 'admin'], function () {
    Route::resource('users', 'UserController');
    Route::resource('zones', 'ZoneController');
    Route::resource('houses', 'HouseController');
    Route::resource('province', 'ProvinceContoller');
});

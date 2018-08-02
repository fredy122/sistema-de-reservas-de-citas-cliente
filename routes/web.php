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
    return view('home.home');
});


Route::get('login', 'Auth\LoginController@showLoginForm');
Route::get('dashboard', 'Auth\DashboardController@index')->name('dashboard');

Route::post('cuenta', 'Auth\LoginController@login')->name('cuenta');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

Route::get('register', 'Auth\RegisterController@create');
Route::post('save', 'Auth\RegisterController@save');


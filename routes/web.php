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

Route::group(['middleware' => 'auth'], function () {
    Route::get('landing', function () {return view('landing'); })->name('landing');
    Route::get('/logout', 'UserController@logout')->name('logout');
});

Route::get('/', function () {return view('welcome'); });
Route::match(['get', 'post'], '/login', 'UserController@login')->name('login');
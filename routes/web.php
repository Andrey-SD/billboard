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
    return view('home');
});

//Auth::routes();


Route::get('/create','CreateAdvertController@showCreateForm')->middleware('auth');

Route::post('/create','CreateAdvertController@create')->middleware('auth');

Route::post('/logout','Auth\LoginController@logout')->name('logout');

Route::post('/login','AuthLoginController@login')->name('login');

//Route::post('/register','AuthLoginController@login')->name('register');
//
//Route::get('/register','AuthLoginController@login')->name('register');

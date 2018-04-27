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

Route::get('/test', function () {
    return view('welcome');
});

Route::get('/','Frontend\DefaultController@index');

Route::get('/show/${id}','Frontend\ShowAdvertController@show');

Route::get('/delete/${id}','Frontend\DeleteAdvertController@delete')
    ->middleware('auth');

Route::get('/create','Frontend\CreateAdvertController@showCreateForm')
    ->middleware('auth');

Route::post('/create','Frontend\CreateAdvertController@create')
    ->middleware('auth');

Route::get('/edit/${id}','Frontend\EditAdvertController@showEditForm')
    ->middleware('auth');

Route::post('/edit/${id}','Frontend\EditAdvertController@edit')
    ->middleware('auth');

Route::post('/logout','Auth\LoginController@logout')
    ->name('logout');

Route::post('/login','Auth\AuthLoginController@login')
    ->name('login');

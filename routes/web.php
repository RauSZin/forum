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

#-=-=-=-página index-=-=-=-=-#
Route::get('/', function () {
    return view('auth/register');
});

#-=-=-=-login/registro-=-=-=-=-#

Route::get('/home')->name('home');

Route::post('/register', 'auth\RegisterController@create')->name('register');



#Route::get('/home', 'HomeController@index')->name('home');
// Auth::routes();

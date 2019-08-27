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
    return view('welcome');
});

Route::get('/home', function(){
	return view('home');
});

#-=-=-=-registro-=-=-=-=-#

Auth::routes();
Route::post('/register', 'auth\RegisterController@create')->name('register');
Route::post('/register/validator, auth\RegisterController@validator')->name('validator');

#-=-=-=-Login-=-=-=-=-#

Route::post('/login', 'auth\LoginController@confirm')->name('confirm');
Route::get('/home', 'HomeController@index')->name('home');
//Route::post('login', [ 'as' => 'login', 'uses' => 'LoginController@do']);
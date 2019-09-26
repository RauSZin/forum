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
Route::get('/sobrenos', function(){
	return view('sobrenos');
});
Route::get('/home', function(){
	return view('home');
});

#-=-=-=-Autenticação-=-=-=-=-#

Auth::routes();
Route::get('/myAccount', 'UserController@index')->name('myAccount');

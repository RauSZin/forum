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

#-=-=-=-página INDEX-=-=-=-=-#
Route::get('/', function () {
    return view('welcome');
});
Route::get('/sobrenos', function(){
	return view('sobrenos');
});
Route::get('/home', function(){
	return view('home');
});

#-=-=-=-AUTENTICAÇÃO-=-=-=-=-#

Auth::routes();
Route::post('/login', 'Auth\LoginController@login');
Route::get('/myAccount', 'UserController@index')->name('myAccount');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

#-=-=-=-=-POST=-=-=-=-=-=-#

Route::get('/posts/list','PostsController@index')->name('list');
Route::get('/posts/create','PostsController@create');
Route::post('/posts','PostsController@store');
Route::get('/posts/postDescribe','PostsController@describe');

#-=-=-=-=-MINHA CONTA=-=-=-=-=-=-#

Route::get('/myAccount', 'UserController@index')->name('myAccount');

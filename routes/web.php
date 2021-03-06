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

Route::get('/','HomeController@getHome');

Route::get('/login', function () {
	return view('auth.login');
});
Route::get('/logout', function () {
	return 'Logout usuario';
});
Route::get('/catalog','CatalogControler@getIndex');

Route::get('/catalog/show/{id}','CatalogControler@getShow');

Route::get('/catalog/create','CatalogControler@getCreate');

Route::get('/catalog/edit/{id}','CatalogControler@getEdit');
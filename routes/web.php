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

Route::group(['middleware' => 'login'], function () {
	Route::get('/', 'UserController@home')->name('home');
});

Route::get('Admin/login/token=mgyTEwyGIGYAHNmThSMg8xXZ55SwqnPshOZ7TkdU', 'AdminController@login_page')->name('login');
Route::post('/Admin/login','AdminController@login');
Route::group(['prefix' => 'Admin',  'middleware' => 'login'], function () {
	Route::get('/home','AdminController@index');
	Route::get('/AddGames','AdminController@addGames');
	Route::get('/DeleteGames/{id}','AdminController@deleteGames');
	Route::get('/EditGames/{id}','AdminController@editGames');
	Route::post('/UpdateGames','AdminController@updateGames');
	Route::post('/CreateGames','AdminController@createGames');
});


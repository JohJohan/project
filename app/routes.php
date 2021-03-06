<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::get('/', function(){
	return View::make('index');
});

Route::get('/test', function(){
	return View::make('test');
});
Route::get('/pagina2', function(){
	return View::make('pagina2');
});


Route::get('/admin', 'AdminController@AdminCheck');
Route::any('/admin/ban', 'AdminController@AdminBan');
Route::post('/login', 'LoginController@login');
Route::get('/logout', 'LoginController@logout');

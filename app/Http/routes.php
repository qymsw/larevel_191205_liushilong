<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'MsgController@index');
Route::get('/view/{id}', 'MsgController@view');
Route::get('/add', function(){
	return view('add');
});
Route::post('/add','MsgController@add');
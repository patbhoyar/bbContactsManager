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

Route::get('contacts/show/{id}', 'ContactsController@show');
Route::POST('contacts/create', 'ContactsController@store');
Route::PUT('contacts/update/{id}', 'ContactsController@edit');
Route::resource('contacts', 'ContactsController');
Route::get('/', function()
{
	return View::make('index');
});
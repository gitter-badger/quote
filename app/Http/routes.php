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



Route::get('/', 'QuotesController@index');
Route::get('quotes', 'QuotesController@index');
Route::get('quotes/create', 'QuotesController@create');
Route::get('quotes/{id}', 'QuotesController@show');

Route::post('quotes', 'QuotesController@store');

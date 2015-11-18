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

Route::get('/', ['uses' => 'WebsiteController@index', 'as' => 'website.index']);

Route::resource('works', 'WorksController');

// Authentication routes...
Route::get('login', ['uses' => 'Auth\AuthController@getLogin', 'as' => 'website.login']);
Route::get('auth/login', ['uses' => 'Auth\AuthController@getLogin', 'as' => 'website.login']);
Route::post('login', ['uses' => 'Auth\AuthController@postLogin', 'as' => 'website.authenticate']);
Route::get('logout', ['uses' => 'Auth\AuthController@getLogout', 'as' => 'website.logout']);

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', ['uses' => 'Auth\AuthController@postRegister', 'as' => 'website.postRegister']);


Route::get('restringido', ['middleware' => 'auth', 'uses' => 'WebsiteController@showRestrict']);

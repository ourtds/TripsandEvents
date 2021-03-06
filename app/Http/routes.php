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

Route::get('/', 'HomeController@index');

Route::get('register', 'UserController@register');
Route::post('register', 'UserController@registeruser');

Route::get('login', 'UserController@login');
Route::post('login', 'UserController@loginuser');

Route::get('dashboard', 'UserController@admin');

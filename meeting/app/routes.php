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

Route::any('/*', array('before' => 'auth', 'uses' => 'LoginController@index'));



/*Restful controllers*/

Route::controller('acceso','LoginController');
Route::controller('usuario','UserController');


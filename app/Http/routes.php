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

use Illuminate\Contracts\Auth\Authenticatable;
use Auth0\SDK\Auth0;

Route::get('/', 'IndexController@index');
Route::post('/login', 'IndexController@login');
Route::get('/logout', 'LogoutController@index');


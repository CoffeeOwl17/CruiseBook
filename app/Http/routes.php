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
Route::get('/admin', 'AdminController@index');
Route::post('/admin', 'AdminController@saveCruise');
Route::get('/search/{action}', 'AdminController@search');
Route::get('/edit/{id}', 'AdminController@edit');
Route::post('/edit/{id}', 'AdminController@updateCruise');
Route::get('/view/{id}', 'AdminController@view');
Route::get('/booking', 'BookingController@search');
Route::get('/booking/{cruiseID}', 'BookingController@chooseCruise');
Route::get('/booking/{cruiseID}/{cabinID}', 'BookingController@passengerInfo');
Route::post('/booking/{cruiseID}/{cabinID}', 'BookingController@confirmPayment');

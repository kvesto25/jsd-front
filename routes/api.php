<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


/*
 * Country API
*/
Route::get('/countries', 'Api\CountryController@index');
Route::get('/country/{id}', 'Api\CountryController@one');


/*
 * TimeZone API
*/
Route::get('/timezone', 'Api\TimezoneController@index');
Route::get('/timezone/{id}', 'Api\TimezoneController@one');


/*
 *  Register API
*/
//Route::post('register')

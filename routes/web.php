<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/comment', 'CommentsController@index');



Route::get('/user/register/', function (){
    return view('user/register');
});
Route::get('/user/login/', function (){
    return view('user/login');
});
Route::get('/user/reset/', function (){
    return view('user/reset');
});

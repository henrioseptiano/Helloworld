<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('home.index');
});

/*Route::group(['middleware' => 'checkuser'],function(){
    Route::get('/home','HelloController@home');
});*/

Route::get('hello','HelloController@index');
Route::post('submitted','TextController@submitted');
Route::get('post/list','TextController@postlist');
Route::get('/login','LoginController@login');
Route::get('/register','RegisterController@index');
Route::post('/registerprocess','RegisterController@process');
Route::post('/loginprocess','LoginController@loginprocess');
Route::get('/logout','LoginController@logout');
Route::get('/fetch','FetchController@index');

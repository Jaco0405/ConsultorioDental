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

Route::get('/home','AdminController@index');
Route::get('/contacto','AdminController@contacto');
Route::get('/servicios','AdminController@servicios');
Route::get('/acerca','AdminController@acerca');

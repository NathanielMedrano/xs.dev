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

Route::get('/', 'HomeController@index');
Route::get('/about', 'HomeController@about');
Route::get('/services', 'HomeController@services');
Route::get('/capability', 'HomeController@capability');
Route::get('/cert', 'HomeController@cert');
Route::get('/contact', 'HomeController@contact');
Route::get('/portfolio', 'HomeController@portfolio');
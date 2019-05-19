<?php

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

Route::get('/','IndexController@index');

Route::get('/about', 'IndexController@about');

Route::get('/contact', 'IndexController@contact');

Route::get('/rest', 'IndexController@rest');

Route::get('/attractions', 'IndexController@attraction');

Route::get('/cab', 'IndexController@cab');

Route::get('/cab/{cabName}', 'IndexController@showCab');

Route::post('/sendcontact', 'EmailController@sendEmailContact');
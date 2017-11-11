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

//index page will return welcome
Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', 'PostsController@index');

Route::get('/posts/create', 'PostsController@create');

//post method to store data
Route::post('/posts', 'PostsController@store');

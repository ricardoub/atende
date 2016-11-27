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
    return view('welcome');
});

Auth::routes();

Route::get('/home',     ['as' => 'home',   'uses' => 'HomeController@index']);

Route::group(['prefix' => 'usuarios', 'as' => 'users.'], function() {
  Route::get('',             ['as' => 'index',  'uses' => 'UserController@index']);

  Route::get('create',       ['as' => 'create', 'uses' => 'UserController@create']);
  Route::post('store',       ['as' => 'store',  'uses' => 'UserController@store']);

  Route::get('edit/{id}',    ['as' => 'edit',   'uses' => 'UserController@edit']);
  Route::post('update/{id}', ['as' => 'update', 'uses' => 'UserController@update']);

  Route::get('delete/{id}',  ['as' => 'delete', 'uses' => 'UserController@destroy']);
});

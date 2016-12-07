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
  Route::get('',              ['as' => 'index',    'uses' => 'UserController@index']);
  Route::get('incluir',       ['as' => 'incluir',  'uses' => 'UserController@create']);
  Route::get('exibir/{id}',   ['as' => 'exibir',   'uses' => 'UserController@show']);
  Route::get('editar/{id}',   ['as' => 'editar',   'uses' => 'UserController@edit']);
  Route::get('excluir/{id}',  ['as' => 'excluir',  'uses' => 'UserController@excluir']);

  Route::post('store',        ['as' => 'store',   'uses' => 'UserController@store']);
  Route::post('update/{id}',  ['as' => 'update',  'uses' => 'UserController@update']);
  Route::post('destroy/{id}', ['as' => 'destroy', 'uses' => 'UserController@destroy']);
});

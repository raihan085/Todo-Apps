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


Route::get('/todos','todoController@index');
Route::get('/todos/{todo}','todoController@show');

Route::get('/new-todo','todoController@create');
Route::post('/store-todo','todoController@store');

Route::get('/todos/{todo}/edit','todoController@edit');
Route::post('/todos/{todo}/update','todoController@update');
Route::get('/todos/{todo}/delete','todoController@destroy');

Route::get('todos/{todo}/completed','todoController@completed');

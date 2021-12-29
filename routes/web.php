<?php

use Illuminate\Support\Facades\Route;
use App\Models\todo_list;
use App\Http\Controllers\TodoListController;



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

Route::get('/', 'App\Http\Controllers\TodoListController@index');
Route::get('create', 'App\Http\Controllers\TodoListController@create');
Route::get('saveNewList', 'App\Http\Controllers\TodoListController@store');
Route::get('delete/{id}', 'App\Http\Controllers\TodoListController@destroy');
Route::get('edit/{id}', 'App\Http\Controllers\TodoListController@edit');
Route::get('update/{id}', 'App\Http\Controllers\TodoListController@update');








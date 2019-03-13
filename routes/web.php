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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/new', [
    'uses' => 'NewPageController@new'
]);

Route::get('/todos', 'TodosController@index');

Route::get('delete/todos/{id}',[
    'uses' => 'TodosController@destroy',
    'as' => 'todo.delete'
]);

Route::post('/create/todo', 'TodosController@store');
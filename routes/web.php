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

Route::get('/todos', [
    'uses' => 'TodosController@index',
    'as' => 'todos'
]);

Route::get('/delete/todos/{id}',[
    'uses' => 'TodosController@destroy',
    'as' => 'todo.delete'
]);

Route::get('/update/todos/{id}',[
    'uses' => 'TodosController@update',
    'as' => 'todo.update'
]);

Route::get('/completed/todos/{id}',[
    'uses' => 'TodosController@complete',
    'as' => 'todo.completed'
]);

Route::post('/todos/save/{id}', [
    'uses' => 'TodosController@save',
    'as' => 'todo.save'
]);

Route::post('/create/todo', 'TodosController@store');
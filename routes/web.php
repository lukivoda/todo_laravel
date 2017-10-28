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

Route::get('/new',[

    'uses'=>'PagesController@newPage'

]);


Route::get('/todos',[
    
    'uses' => 'TodosController@index',
    'as'   => 'todos.index'
]);


Route::get("/todos/delete/{id}",[

    'uses' => 'TodosController@delete',
    'as'   => 'todos.delete'
]);

Route::get("/todos/edit/{id}",[

    'uses' => 'TodosController@edit',
    'as'   => 'todos.edit'
]);


Route::post('/todos/update/{id}',[

    'uses' => 'TodosController@update',
    'as'   => 'todos.update'

]);


Route::post('/create/todo',[

    'uses' => 'TodosController@store',
    'as'   => 'todos.create'

]);



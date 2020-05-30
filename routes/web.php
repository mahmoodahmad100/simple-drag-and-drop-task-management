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

/* Home */
Route::get('/', 'Web\WebsiteController@index');

/* Projects */
Route::resource('projects', 'Web\ProjectController', ['only' => [
    'index', 'create', 'show', 'edit'
]]);

/* Tasks */
Route::resource('tasks', 'Web\TaskController', ['only' => [
    'create', 'edit'
]]);
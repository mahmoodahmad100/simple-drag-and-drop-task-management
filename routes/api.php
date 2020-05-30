<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//v1
Route::group(['prefix' => 'v1'], function() {
    Route::apiResource('projects', 'API\V1\ProjectController');
    Route::apiResource('tasks', 'API\V1\TaskController');
    Route::put('tasks', 'API\V1\TaskController@order');
});

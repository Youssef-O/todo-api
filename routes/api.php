<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('tasks', 'TodoController@getAllTasks');
Route::get('task/{id}', 'TodoController@getTask');
Route::post('task', 'TodoController@createTask');
Route::put('task/{id}', 'TodoController@updateTask');
Route::delete('task/{id}','TodoController@deleteTask');
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

Route::get('tasks', 'App\Http\Controllers\TodoController@getAllTasks');
Route::get('task/{id}', 'App\Http\Controllers\TodoController@getTask');
Route::post('task', 'App\Http\Controllers\TodoController@createTask');
Route::put('task/{id}', 'App\Http\Controllers\TodoController@updateTask');
Route::delete('task/{id}','App\Http\Controllers\TodoController@deleteTask');
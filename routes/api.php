<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Console\Question\Question;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Question 2
// THIS API DOES NOT HAVE AUTH:API MIIDDLEWARE ANY ONE CAN MAKE REQUEST ON THIS API
Route::get('/get-todo-list',[App\Http\Controllers\Api\TodoController::class, 'todoWithoutCache'])->name('get-todo-list');
Route::get('/get-todo',[App\Http\Controllers\Api\TodoController::class, 'todoWithCache'])->name('get-todo');


// Question 3
Route::get('/get-user',[App\Http\Controllers\Api\UserController::class, 'getUser'])->name('get-user');
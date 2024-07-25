<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\CategoryController;

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

Route::get('/', [TodoController::class, 'index']);
Route::post('/todos', [TodoController::class, 'store']);
Route::PATCH('/todos/update', [TodoController::class, 'update']);
Route::delete('/todos/delete', [TodoController::class, 'destroy']);
Route::get('/categories',[CategoryController::class, 'index']);
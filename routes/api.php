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

use App\Http\Controllers\MessageController;
use App\Http\Controllers\UserController;

Route::get('/messages', [MessageController::class, 'index']);
Route::post('/messages', [MessageController::class, 'store']);
Route::delete('/messages/{id}', [MessageController::class, 'destroy']);
Route::get('/messages/edit/{id}', [MessageController::class, 'edit']);
Route::put('/messages/update/{id}', [MessageController::class, 'update']);

Route::get('/messages/create', [MessageController::class, 'create']);
Route::get('/messages/{id}', [MessageController::class, 'show']);


Route::get('/users', [UserController::class, 'index']);
Route::get('/users/{id}', [UserController::class, 'show']);
Route::post('/users', [UserController::class, 'store']);

Route::get('/users/create', [UserController::class, 'create']);

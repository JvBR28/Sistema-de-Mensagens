<?php

use Illuminate\Support\Facades\Route;

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

use App\Http\Controllers\MessageController;

Route::get('/', [MessageController::class, 'index']);
Route::get('/messages/create', [MessageController::class, 'create']);
Route::get('/messages/{id}', [MessageController::class, 'show']);
Route::post('/messages', [MessageController::class, 'store']);

Route::get('/contact', function () {
    return view('contact');
});
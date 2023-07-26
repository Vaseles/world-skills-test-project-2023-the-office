<?php

use App\Http\Controllers\MessageController;
use App\Http\Controllers\PlaceController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/users/{id}', [UserController::class, 'user']);
Route::put('/users/{id}/update-ava', [UserController::class, 'updateAvatar']);
Route::put('/users/{id}/update-place', [UserController::class, 'updatePlace']);

Route::get('/places', [PlaceController::class, 'all_places']);

Route::get('/messages/{place_id}', [MessageController::class, 'all_messages']);
Route::post('/messages/{place_id}', [MessageController::class, 'create_message']);

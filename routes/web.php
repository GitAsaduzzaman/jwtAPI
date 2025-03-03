<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/test', function () {
    return response()->json(['message' => 'Hello I am Asaduzzaman Khan']);
});


Route::post('/login', [AuthController::class, 'login']);
Route::middleware('auth:api')->get('/data', [AuthController::class, 'getData']);
Route::post('/login', [AuthController::class, 'login']);
Route::middleware('auth:api')->get('/data', [AuthController::class, 'getData']);
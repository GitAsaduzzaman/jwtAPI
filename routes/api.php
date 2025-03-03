<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
Route::get('/test', function () {
    return response()->json(['message' => 'Hello I am Asaduzzaman Khan. This is a test message']);
});
Route::post('/login', [AuthController::class, 'login']);
Route::middleware('auth:api')->get('/data', [AuthController::class, 'getData']);
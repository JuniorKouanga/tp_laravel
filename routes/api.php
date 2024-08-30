<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\PersonneController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/personnes', [PersonneController::class, 'index']);
Route::get('/agents', [AgentController::class, 'index']);
Route::get('/users', [UserController::class, 'index']);
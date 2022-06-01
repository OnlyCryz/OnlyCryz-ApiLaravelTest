<?php

use Illuminate\Support\Facades\Route;

Route::apiResource('students', App\Http\Controllers\Api\StudentController::class)
    ->middleware('auth:sanctum');

Route::post('login', [App\Http\Controllers\Api\LoginController::class, 'login']);

Route::get('testDB', [App\Http\Controllers\TestController::class, 'index']);

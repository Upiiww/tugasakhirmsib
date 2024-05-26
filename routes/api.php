<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\DeviceController;
use App\Http\Controllers\LogController;

Route::get('users', [UserController::class, 'index']);
Route::get('users/{id}', [UserController::class, 'show']);
Route::post('users', [UserController::class, 'store']);
Route::put('users/{id}', [UserController::class, 'update']);
Route::delete('users/{id}', [UserController::class, 'destroy']);

Route::get('devices', [DeviceController::class, 'index']);
Route::get('devices/{id}', [DeviceController::class, 'show']);
Route::post('devices', [DeviceController::class, 'store']);
Route::put('devices/{id}', [DeviceController::class, 'update']);
Route::delete('devices/{id}', [DeviceController::class, 'destroy']);

Route::get('logs', [LogController::class, 'index']);
Route::get('logs/{id}', [LogController::class, 'show']);
Route::post('logs', [LogController::class, 'store']);
Route::put('logs/{id}', [LogController::class, 'update']);
Route::delete('logs/{id}', [LogController::class, 'destroy']);

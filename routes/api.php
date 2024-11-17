<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ServiceController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\ApiMiddleware;

// Public routes, accessible without authentication
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/login', [AuthController::class, 'login'])->name('login');

// Routes that require authentication
// Route::middleware(ApiMiddleware::class)->group(function () {
//     Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
// });

Route::middleware(ApiMiddleware::class)->post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth:sanctum')->get('/services', [ServiceController::class, 'getServices'])->name('getServices');
Route::middleware('auth:sanctum')->post('/orders', [OrderController::class, 'createOrder'])->name('createOrder');

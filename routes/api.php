<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\ApiMiddleware;

// Public routes, accessible without authentication
Route::post('/users/login', [AuthController::class, 'login'])->name('login');
Route::post('/users/register', [AuthController::class, 'register'])->name('register');

// Routes that require authentication
Route::middleware(ApiMiddleware::class)->group(function () {
    Route::post('/users/logout', [AuthController::class, 'logout'])->name('logout');
});

<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\HistoryController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\ApiMiddleware;

// Public routes, accessible without authentication
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::middleware(ApiMiddleware::class)->post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth:sanctum')->get('/services', [ServiceController::class, 'getServices'])->name('getServices');
Route::middleware('auth:sanctum')->post('/orders', [OrderController::class, 'createOrder'])->name('createOrder');

Route::middleware('auth:sanctum')->get('/history', [HistoryController::class, 'getHistory'])->name('getHistory');
Route::middleware('auth:sanctum')->post('/history/cancel/{orderId}', [HistoryController::class, 'cancelOrder'])->name('cancelOrder');
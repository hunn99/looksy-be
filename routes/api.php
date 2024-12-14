<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HairlistController;
use App\Http\Controllers\HairstyleController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TipsController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\UserController;
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

Route::middleware('auth:sanctum')->get('/tips', [TipsController::class, 'getHairTips'])->name('getHairTips');
Route::middleware('auth:sanctum')->post('/update-profile', [UserController::class, 'updateProfile'])->name('updateProfile');

Route::middleware('auth:sanctum')->post('/hairstyle-recommendation', [HairstyleController::class, 'hairstyleRecommendation'])->name('hairstyleRecommendation');
Route::middleware('auth:sanctum')->post('/save-hairlist', [HairlistController::class, 'store'])->name('store');
Route::middleware('auth:sanctum')->get('/get-hairlist', [HairlistController::class, 'getListSaved'])->name('getListSaved');

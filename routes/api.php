<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\DashboardController;


Route::prefix('auth')->group(function () {
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/logout', [AuthController::class, 'logout']);
});

Route::prefix('site')->middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'site_dashboard'])->name('dashboard');
    Route::apiResource('reservations', ReservationController::class);
});

Route::prefix('admin')->middleware('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'admin_dashboard'])->name('admin_dashboard');
    Route::apiResource('/rooms', RoomController::class); 
});

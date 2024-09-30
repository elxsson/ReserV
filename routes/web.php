<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use Illuminate\Auth\Events\Logout;

Route::prefix('auth')->group(function () {
    Route::get('/login', [AuthController::class, 'login_create'])->name('login_create');
    Route::post('/login', [AuthController::class, 'login_store'])->name('login_store');

    Route::get('/register', [AuthController::class, 'register_create'])->name('register_create');
    Route::post('/register', [AuthController::class, 'register_store'])->name('register_store');

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

// normal user
Route::redirect('/', '/site/dashboard');

Route::prefix('site')->middleware(['auth'])->group(function () {
    Route::get('/dashboard', function() {
        return view('site.dashboard');
    });
    
});

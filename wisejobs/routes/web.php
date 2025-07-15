<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia; 

use App\Http\Controllers\Auth\LoginController;

Route::get('/', function () {
    return Inertia::render('home'); 
});

Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
});

Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth')->name('logout');

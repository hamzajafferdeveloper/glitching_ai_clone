<?php

use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;

Route::prefix('/auth')->name('auth.')->group(function () {
    Route::get('/login', function () {
        return view('auth.login');
    })->name('login');
    Route::get('/reset-password', function () {
        return view('auth.reset-password');
    })->name('reset-password');

    Route::get('/sign-up', function () {
        return view('auth.register');
    })->name('sign-up');

    Route::post('/register', [AuthController::class, 'register'])->name('register');
    Route::get('/login/google', [AuthController::class, 'googleRedirect'])->name('google.redirect');
    Route::get('/google/callback', [AuthController::class, 'googleCallback'])->name('google.callback');
});

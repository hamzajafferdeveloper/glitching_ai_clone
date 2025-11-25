<?php

use Illuminate\Support\Facades\Route;

Route::prefix('/auth')->name('auth.')->group(function () {
    Route::get('/login', function () {
        return view('auth.login');
    })->name('login');
    Route::get('/sign-up', function () {
        return view('auth.register');
    })->name('sign-up');

    Route::get('/reset-password', function () {
        return view('auth.reset-password');
    })->name('reset-password');

});

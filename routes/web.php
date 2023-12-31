<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'index')->name('login');
    Route::post('/login', 'signIn')->name('signIn');

    Route::get('/sign-up', 'signUp')->name('signUp');
    Route::post('/sign-up', 'store')->name('store');

    Route::delete('/logout', 'logout')->name('logout');

    Route::get('/forgot-password', 'forgotPassword')->name('forgotPassword');
    Route::get('/reset-password', 'resetPassword')->name('resetPassword');
});


Route::get('/', HomeController::class)->name('home');



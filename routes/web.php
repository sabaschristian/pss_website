<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.home')->name('home');

Route::view('/blog', 'pages.blog')->name('blog');

Route::view('/about', 'pages.about')->name('about');


Route::middleware('guest')->group(function () {

    Route::view('/register', 'auth.register')->name('register');
    Route::post('/register', [AuthController::class, 'register']);

    Route::view('/login', 'auth.login')->name('login');
    Route::post('/login', [AuthController::class, 'login']);

    Route::view('/forgot-password', 'auth.forgot-password')->name('password.request');
    Route::post('/forgot-password', [AuthController::class, 'forgotPassword'])->name('password.email');

    Route::view('/reset-password/{token}', 'auth.reset-password')->name('password.reset');
    Route::post('/reset-password', [AuthController::class, 'passwordUpdate'])->name('password.update');

});

Route::middleware('auth')->group(function () {

    Route::view('/appointment','pages.appointment')->name('appointment');
    Route::post('/appointment', [AppointmentController::class, 'create']);
    Route::get('/appointment/success', [AppointmentController::class, 'index'])->name('appointment_success');

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});
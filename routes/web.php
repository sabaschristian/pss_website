<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/appointment', function () {
    return view('pages.appointment');
})->name('appointment');

Route::get('/blog', function () {
    return view('pages.blog');
})->name('blog');

Route::get('/about', function () {
    return view('pages.about');
})->name('about');
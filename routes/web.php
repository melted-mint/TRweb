<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages/home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::redirect('github', 'https://github.com/melted-mint/TRweb');
<?php

use Illuminate\Support\Facades\Route;

// Serves the pre-rendered portfolio page directly (no view engine involved).
// The editable source version lives in resources/views/portfolio.php.
Route::get('/', function () {
    return response()->file(public_path('portfolio.html'), [
        'Content-Type' => 'text/html; charset=UTF-8',
    ]);
})->name('home');

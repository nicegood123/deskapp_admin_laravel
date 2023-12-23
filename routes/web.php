<?php

use Illuminate\Support\Facades\Route;


Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return redirect(route('home'));
    });

    Route::get('/home', function () {
        return redirect(route('home'));
    });
});

// Auth Routes
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

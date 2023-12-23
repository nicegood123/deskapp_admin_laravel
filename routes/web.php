<?php

use App\Http\Controllers\Dashboard\DashboardController;
use Illuminate\Support\Facades\Route;

// Redirect Routes
Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return redirect(route('dashboard.index'));
    });

    Route::get('/dashboard', function () {
        return redirect(route('dashboard.index'));
    });
});

// Auth Routes
Auth::routes();


// Dashboard Routes
require __DIR__ . '/web/dashboard/dashboard.php';

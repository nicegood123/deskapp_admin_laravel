<?php

use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Route;

// Protected Routes
Route::middleware(['auth'])->prefix('users')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('users.index');
});

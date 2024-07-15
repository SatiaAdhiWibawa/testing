<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::middleware('guest')->group(function () {
    Route::get('register', [AuthController::class, 'create'])
        ->name('register');

    Route::post('register', [AuthController::class, 'store']);

    // Route::get('login', [AuthController::class, 'index'])
    //     ->name('login');

    Route::post('login', [AuthController::class, 'login']);

    // Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
    //     ->name('password.reset');

    // Route::post('reset-password', [NewPasswordController::class, 'store'])
    //     ->name('password.store');
});

<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\EmailVerificationController;
use App\Http\Controllers\HomeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Главная страница
Route::get('/', [HomeController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('home');

Route::middleware('auth')->group(function () {
    // Профиль
    Route::get('/profile', function () {
    })->middleware(['auth', 'verified'])->name('profile');

    // Группировка верификации email
    Route::name('verification.')->group(function () {
        Route::get('/email/verify', [EmailVerificationController::class, 'notice'])
            ->name('notice');
        Route::get('/email/verify/{id}/{hash}', [EmailVerificationController::class, 'verify'])
            ->middleware('signed')
            ->name('verify');
        Route::post('email/verification-notification', [EmailVerificationController::class, 'resend'])
            ->middleware('throttle:6,1')
            ->name('send');
    });
});


// Группировка гостевых
Route::middleware('guest')->group(function () {
    Route::get('/register', function () {
        return view('auth.register');
    })->name('register');

    Route::get('/login', function () {
        return view('auth.login');
    })->name('login');

    Route::get('/forgot-password', function () {
        return view('auth.forgot-password');
    })->name('password.request');

    Route::get('/reset-password/{token}', function (string $token) {
        return view('auth.reset-password', ['token' => $token]);
    })->name('password.reset');
});

Route::prefix('api/v1')->name('api.v1.')->group(function () {
    // Публичные API
    Route::post('auth/register', [AuthController::class, 'store'])
        ->name('register');
    Route::post('auth/login', [AuthController::class, 'login'])
        ->name('login');

    // API для сброса пароля
    Route::post('auth/forgot-password', [AuthController::class, 'forgot_password'])
        ->name('forgot_password');
    Route::post('auth/reset-password', [AuthController::class, 'reset_password'])
        ->name('reset_password');

    // Защищенные API
    Route::post('auth/logout', [AuthController::class, 'logout'])
        ->name('logout');

});

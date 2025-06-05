<?php

use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->middleware('auth');

Route::get('/register', function () {
    return view('auth.register');
})->name('register')->middleware('guest');

Route::get('/login', function () {
    return view('auth.login');
})->name('login')->middleware('guest');

Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
})->name('password.request')->middleware('guest');

Route::get('/reset-password/{token}', function (string $token) {
    return view('auth.reset-password', ['token' => $token]);
})->name('password.reset')->middleware('guest');


Route::post('api/v1/auth/register', [AuthController::class, 'store'])->name('api.v1.register');
Route::post('api/v1/auth/login', [AuthController::class, 'login'])->name('api.v1.login');
Route::post('api/v1/auth/logout', [AuthController::class, 'logout'])->name('api.v1.logout');
Route::post('api/v1/auth/forgot-password', [AuthController::class, 'forgot_password'])->middleware('guest')->name('api.v1.forgot_password');
Route::post('api/v1/auth/reset-password', [AuthController::class, 'reset_password'])->middleware('guest')->name('api.v1.reset_password');

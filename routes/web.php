<?php

use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->middleware('auth');

Route::get('/register', [AuthController::class, 'register_form'])->name('register')->middleware('guest');
Route::get('/login', [AuthController::class, 'login_form'])->name('login')->middleware('guest');


Route::post('api/v1/auth/register', [AuthController::class, 'store'])->name('api.v1.register');
Route::post('api/v1/auth/login', [AuthController::class, 'login'])->name('api.v1.login');
Route::post('api/v1/auth/logout', [AuthController::class, 'logout'])->name('api.v1.logout');

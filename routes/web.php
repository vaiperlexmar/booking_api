<?php

use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->middleware('auth');

Route::get('/register', [AuthController::class, 'index'])->name('register')->middleware('guest');
Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');


Route::post('api/v1/auth/register', [AuthController::class, 'store'])->name('api.v1.register');
Route::post('api/v1/auth/logout', [AuthController::class, 'logout'])->name('api.v1.logout');

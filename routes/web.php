<?php

use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/register', [RegisterController::class, 'index'])->name('register')->middleware('guest');
Route::get('/login', [RegisterController::class, 'login'])->name('login')->middleware('guest');
Route::post('api/v1/auth/register', [RegisterController::class, 'store'])->name('api.v1.register');


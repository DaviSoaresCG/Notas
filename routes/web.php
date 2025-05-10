<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
})->name('login');

// Auth routes
Route::get('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::match(['get', 'post'], '/home', [UserController::class, 'index'])->name('home');
Route::match(['get', 'post'], '/create', [UserController::class, 'create'])->name('create');
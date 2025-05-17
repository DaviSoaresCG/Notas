<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\CheckIsLogged;
use App\Http\Middleware\CheckIsNotLogged;
use Illuminate\Support\Facades\Route;


// User is Logged
Route::middleware([CheckIsNotLogged::class])->group(function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/loginSubmit', [AuthController::class, 'loginSubmit'])->name('login_submit');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});

//User is not logged
Route::middleware([CheckIsLogged::class])->group(function () {
    Route::match(['get', 'post'], '/', [UserController::class, 'index'])->name('home');
    Route::match(['get', 'post'], '/create', [UserController::class, 'create'])->name('create');
});

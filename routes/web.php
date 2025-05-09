<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

Route::match(['get', 'post'], '/home', [UserController::class, 'index']);
Route::match(['get', 'post'], '/edit', [UserController::class, 'create']);
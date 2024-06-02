<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('client.homepage');
});

//Routes for REDIRECTION og pages
Route::get('/request-appointment', [UserController::class, 'index'])->name('request-appointment');
Route::get('/homepage', [UserController::class, 'mainpage'])->name('homepage');
Route::get('/login', [UserController::class, 'login'])->name('login');
Route::get('/register', [UserController::class, 'register'])->name('register');

<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepage');
});

Route::get('/request-appointment', [UserController::class, 'index'])->name('request-appointment');
Route::get('/homepage', [UserController::class, 'mainpage'])->name('homepage');

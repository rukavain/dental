<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('client.homepage');
});

//Routes for REDIRECTION of pages

//client routes
Route::get('/request-appointment', [UserController::class, 'index'])->name('request-appointment');
Route::get('/homepage', [UserController::class, 'mainpage'])->name('homepage');

//account login/registration routes
Route::get('/login', [UserController::class, 'login'])->name('login');
Route::get('/register', [UserController::class, 'register'])->name('register');

//admin routes
Route::get('/admin-overview', [UserController::class, 'overview'])->name('overview');
Route::get('/admin-patient-list', [UserController::class, 'patients'])->name('patient.list');

//admin route forms
Route::get('/admin-add-patient', [UserController::class, 'addPatient'])->name('add-patient-page');
Route::post('/patients', [UserController::class, 'storePatient'])->name('add.patient');
Route::put('/patients/{patient}', [UserController::class, 'updatePatient'])->name('update.patient');

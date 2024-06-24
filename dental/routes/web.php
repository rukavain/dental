<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('client.homepage');
});

//CLIENT ROUTES

Route::get('/request-appointment', [UserController::class, 'index'])->name('request-appointment');
Route::get('/homepage', [UserController::class, 'mainpage'])->name('homepage');

//account login/registration routes
Route::get('/login', [UserController::class, 'login'])->name('login');
Route::get('/register', [UserController::class, 'register'])->name('register');

// < ====================================================================================================================================================== >
// < ====================================================================================================================================================== >
// < ====================================================================================================================================================== >

//ADMIN ROUTES

//navbar/sidebar routes
Route::get('/admin-overview', [UserController::class, 'overview'])->name('overview');
Route::get('/admin-patient-list', [UserController::class, 'patients'])->name('patient.list');
Route::get('/contact-submissions', [ContactController::class, 'viewSubmissions'])->name('contact.submissions.page');
Route::get('/appointment-submissions', [AppointmentController::class, 'appointmentPage'])->name('appointment.page');

//patient information routes
Route::get('/admin-add-patient', [UserController::class, 'addPatient'])->name('add-patient-page');
Route::post('/patients', [UserController::class, 'storePatient'])->name('add.patient');
Route::get('/update-patient/{patient}', [UserController::class, 'updatePatientPage'])->name('update.patient.page');
Route::put('/patients/{patient}', [UserController::class, 'updatePatient'])->name('update.patient');
Route::get('/patient-information/{patient}', [UserController::class, 'showPatient'])->name('show.patient');

//payment routes
Route::get('/add-payment-page/{patient}', [PaymentController::class, 'create'])->name('add.payment.page');
Route::post('/add-payment/{patient}', [PaymentController::class, 'store'])->name('add.payment');
Route::get('/update-payment-page/{patient}/{payment}', [PaymentController::class, 'edit'])->name('update.payment.page');
Route::put('/update-payment/{patient}/{payment}', [PaymentController::class, 'update'])->name('update.payment');

//contact routes
Route::post('/contact-submit', [ContactController::class, 'submit'])->name('submit.contact');

//appointment routes
Route::post('/appointment-submit', [AppointmentController::class, 'submit'])->name('submit.appointment');

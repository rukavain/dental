<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function appointmentPage()
    {
        return view('admin.content.appointment-submissions');
    }
}

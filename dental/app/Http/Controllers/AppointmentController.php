<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;

class AppointmentController extends Controller
{
    public function appointmentPage()
    {
        return view('admin.content.appointment-submissions');
    }
    public function submit (Request $request, Appointment $appointment){
        request()->validate([
            'firstname' => 'required|min:3|max:254|string',
            'lastname' => 'required|min:3|max:254|string',
            'date_of_birth' => 'required|date',
            'phone_number' => 'required|string|max:20',
            'email' => 'email|required',
            'zip_code' => 'required|numeric',
            'appointment_date' => 'nullable|date',
            'preferred_time' => 'nullable|required',
            'notes' => 'nullable|string'
        ]);

        $appointmentDetails = [
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'date_of_birth' => $request->date_of_birth,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
            'zip_code' => $request->zip_code,
            'appointment_date' => $request->appointment_date,
            'preferred_time' => $request->preferred_time,
            'notes' => $request->notes,
        ];

        Appointment::create($appointmentDetails);

        return redirect()->route('request-appointment')->with('success', 'Appointment submitted.');

    }
    public function viewSubmissions(){

        $appointments = Appointment::all();

        return view('admin.content.appointment-submissions', [
            'appointments' => $appointments
        ]);
    }
}

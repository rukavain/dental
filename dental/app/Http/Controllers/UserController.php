<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;

class UserController extends Controller
{
    public function index()
    {
        return view('client.request-appointment');
    }
    public function storePatient()
    {
        request()->validate([
            'firstname' => 'required|min:3|max:254',
            'lastname' => 'required|min:3|max:254',
            'gender' => 'required',
            'date_of_birth' => 'required|date',
            'facebook_name' => 'required|string|max:255',
            'package' => 'required|string|max:255',
            'phone_number' => 'required|string|max:20',
            'date_of_next_visit' => 'required|date',
            'address' => 'required|string|max:500'
        ]);

        $patient = Patient::create([
            'firstname' => request()->get('firstname', ''),
            'lastname' => request()->get('lastname', ''),
            'gender' => request()->get('gender', ''),
            'date_of_birth' => request()->get('date_of_birth', ''),
            'facebook_name' => request()->get('facebook_name', ''),
            'package' => request()->get('package', ''),
            'phone_number' => request()->get('phone_number', ''),
            'date_of_next_visit' => request()->get('date_of_next_visit', ''),
            'address' => request()->get('address', ''),
        ]);

        $patient->save();
        return redirect()->route('patient.list');
    }
    public function mainpage()
    {
        return view('client.homepage');
    }
    public function login()
    {
        return view('account.login');
    }
    public function register()
    {
        return view('account.register');
    }
    public function dashboard()
    {
        return view('admin.dashboard');
    }
    public function overview()
    {
        return view('admin.content.overview');
    }
    public function patients(Request $request)
    {
        $patientQuery = Patient::orderBy('created_at', 'ASC');

        if ($request->has('search') && !empty($request->get('search'))) {
            $searchTerm = $request->get('search');
            $patientQuery->where('id', 'like', '%' . $searchTerm . '%');
        }

        $patients = $patientQuery->paginate(20);

        return view('admin.content.patients', [
            'patients' => $patients
        ]);
    }
    public function addPatient()
    {
        return view('admin.forms.add-patient');
    }
}

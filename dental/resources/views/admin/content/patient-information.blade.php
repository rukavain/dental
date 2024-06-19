@extends('admin.dashboard')
@section('content')
    <h1> Name: {{ $patient->firstname }} {{ $patient->lastname }} </h1>
    <h1> Gender: {{ $patient->gender }} </h1>
    <h1> Birth date: {{ $patient->date_of_birth }} </h1>
    <h1> Facebook name: {{ $patient->facebook_name }} </h1>
    <h1> Package availed: {{ $patient->package }} </h1>
    <h1> Phone number: {{ $patient->phone_number }} </h1>
    <h1> Date of next visit: {{ $patient->date_of_next_visit }} </h1>
    <h1> Address: {{ $patient->address }} </h1>
@endsection

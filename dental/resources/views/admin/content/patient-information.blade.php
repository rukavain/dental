@extends('admin.dashboard')
@section('content')
    <div class="m-4">
        @include('components.search')
    </div>

    <section class="bg-white m-4 p-8 shadow-lg rounded-md flex justify-between">
        <div>
            <h1 class="text-4xl font-bold mb-6">Patient Name: {{ $patient->firstname }} {{ $patient->lastname }} </h1>
            <div class=" text-md">
                <h1> Gender: {{ $patient->gender }} </h1>
                <h1> Birth date: {{ $patient->date_of_birth }} </h1>
                <h1> Facebook name: {{ $patient->facebook_name }} </h1>
                <h1> Package availed: {{ $patient->package }} </h1>
                <h1> Phone number: {{ $patient->phone_number }} </h1>
                <h1> Date of next visit: {{ $patient->date_of_next_visit }} </h1>
                <h1> Address: {{ $patient->address }} </h1>
            </div>
        </div>
        <div class="flex flex-col gap-4 ">
            <a href=" {{ route('update.patient.page', $patient->id) }} "
                class="bg-gray-600 rounded-md text-center p-4 text-white font-semibold hover:bg-gray-800 transition-all">Edit
                patient information</a>
            <a href=""
                class="bg-gray-600 rounded-md p-4 text-center text-white font-semibold hover:bg-gray-800 transition-all">
                View Patient Contract</a>
            <a href=""
                class="bg-gray-600 rounded-md p-4 text-white text-center font-semibold hover:bg-gray-800 transition-all">
                View Background of the patient</a>
            <a href=""
                class="bg-gray-600 rounded-md p-4 text-white text-center font-semibold hover:bg-gray-800 transition-all">
                View X-rays</a>
            <a class="bg-green-600 rounded-md p-4 text-white text-center font-semibold hover:bg-green-800 transition-all"
                href=" {{ route('patient.list') }} ">
                Go back
            </a>
        </div>
    </section>
@endsection

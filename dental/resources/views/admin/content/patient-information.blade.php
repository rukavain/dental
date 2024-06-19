@extends('admin.dashboard')
@section('content')
    <div class="m-4">
        @include('components.search')
    </div>

    <section class="bg-white m-4 p-8 shadow-lg rounded-md flex flex-col justify-center">
        <div class="flex justify-between">
            <div>
                <h1 class="text-5xl font-bold mb-6">{{ $patient->firstname }} {{ $patient->lastname }} </h1>
                <div class="flex flex-col gap-3 text-md">
                    <h1> Gender: <span class="font-semibold"> {{ $patient->gender }} </span> </h1>
                    <h1> Birth date: <span class="font-semibold"> {{ $patient->date_of_birth }} </span> </h1>
                    <h1> Facebook name: <span class="font-semibold"> {{ $patient->facebook_name }} </span> </h1>
                    <h1> Package availed: <span class="font-semibold"> {{ $patient->package }} </span> </h1>
                    <h1> Phone number: <span class="font-semibold"> {{ $patient->phone_number }} </span> </h1>
                    <h1> Date of next visit: <span class="font-semibold"> {{ $patient->date_of_next_visit }} </span> </h1>
                    <h1> Address: <span class="font-semibold"> {{ $patient->address }} </span> </h1>
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
        </div>
        <div class="p-4 m-4">
            <h1 class="my-9 font-bold text-4xl">Summary of records</h1>
            <div class="flex justify-between items-evenly">
                <div>
                    <h1 class="font-bold mb-6"> Date Visited </h1>
                    <div class="flex flex-col gap-4">
                        <h1> 2024 - 03 - 04 </h1>
                        <h1> 2024 - 03 - 04 </h1>
                        <h1> 2024 - 03 - 04 </h1>
                        <h1> 2024 - 03 - 04 </h1>
                        <h1> 2024 - 03 - 04 </h1>
                    </div>
                </div>
                <div>
                    <h1 class="font-bold mb-6"> Tooth Number </h1>
                    <div class="flex flex-col gap-4">
                        <h1>4</h1>
                        <h1>5</h1>
                        <h1>1</h1>
                        <h1>3</h1>
                        <h1>8</h1>
                    </div>
                </div>
                <div>
                    <h1 class="font-bold mb-6"> Procedure Done </h1>
                    <div class="flex flex-col gap-4">
                        <h1>Ortho</h1>
                        <h1>Ortho</h1>
                        <h1>Ortho</h1>
                        <h1>Ortho</h1>
                        <h1>Ortho</h1>
                    </div>
                </div>
                <div>
                    <h1 class="font-bold mb-6"> Charge </h1>
                    <div class="flex flex-col gap-4">
                        <h1>40,000</h1>
                        <h1>40,000</h1>
                        <h1>40,000</h1>
                        <h1>40,000</h1>
                        <h1>40,000</h1>
                    </div>
                </div>
                <div>
                    <h1 class="font-bold mb-6"> Paid </h1>
                    <div class="flex flex-col gap-4">
                        <h1>40,000</h1>
                        <h1>40,000</h1>
                        <h1>40,000</h1>
                        <h1>40,000</h1>
                        <h1>40,000</h1>
                    </div>
                </div>
                <div>
                    <h1 class="font-bold mb-6"> Balance remaining </h1>
                    <div class="flex flex-col gap-4">
                        <h1>40,000</h1>
                        <h1>40,000</h1>
                        <h1>40,000</h1>
                        <h1>40,000</h1>
                        <h1>40,000</h1>
                    </div>
                </div>
                <div>
                    <h1 class="font-bold mb-6"> Signature </h1>
                    <div class="flex flex-col gap-4">
                        <h1>Signed</h1>
                        <h1>Signed</h1>
                        <h1>Signed</h1>
                        <h1>Signed</h1>
                        <h1>Signed</h1>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@extends('admin.dashboard')
@section('content')
    <style>
        .tooltip {
            position: relative;
            display: inline-block;
            cursor: pointer;
        }

        .tooltip .tooltiptext {
            visibility: hidden;
            width: 120px;
            background-color: black;
            color: #fff;
            text-align: center;
            border-radius: 6px;
            padding: 5px;
            position: absolute;
            z-index: 1;
            bottom: 125%;
            /* Position above the icon */
            left: 50%;
            margin-left: -60px;
            opacity: 0;
            transition: opacity 0.3s;
        }

        .tooltip:hover .tooltiptext {
            visibility: visible;
            opacity: 1;
        }
    </style>
    <div class="m-4 mb-8">
        @include('components.search')
    </div>
    <section class="m-4 p-4 bg-white shadow-lg rounded-md">
        <div class="flex items-center justify-between ">
            <label class="flex items-center gap-2" for="time">
                <h1 class="font-bold text-3xl mr-4">Patient list</h1>
                <h1>Sort by: </h1>
                <select class="border border-gray-400 py-2 px-4 rounded-md" type="dropdown" id="appointment-date"
                    id="time">
                    <option value="">Date added</option>
                    <option value="">Next visit</option>
                </select>
            </label>
            <div>
                <button>
                    <a class="bg-green-600 rounded-md py-2 px-4 text-white font-semibold hover:bg-green-800 transition-all"
                        href="{{ route('add-patient-page') }}">
                        Add patient
                    </a>
                </button>
            </div>
        </div> <!-- run @/foreach for each field/row  -->
        <div class="flex justify-around mx-3 gap-4  mt-8 bg-gray-50 p-4 w-full">
            <div class="flex flex-col justify-center items-start">
                <h1 class="font-semibold text-xl mb-4">ID</h1>
                <div class="flex flex-col gap-2"> <!-- ID name from form inputs -->
                    @foreach ($patients as $patient)
                        <h1> {{ $patient->id }} </h1>
                    @endforeach
                </div>
            </div>
            <div class="flex flex-col justify-center items-start">
                <h1 class="font-semibold text-xl mb-4">Name</h1>
                <div class="flex flex-col gap-2"> <!-- ID name from form inputs -->
                    @foreach ($patients as $patient)
                        <h1> {{ $patient->firstname }} {{ $patient->lastname }} </h1>
                    @endforeach
                </div>
            </div>
            <div class="flex flex-col justify-center items-start">
                <h1 class="font-semibold text-xl mb-4">Date of next visit</h1>
                <div class="flex flex-col gap-2"> <!-- ID from form inputs -->
                    @foreach ($patients as $patient)
                        <h1> {{ $patient->date_of_next_visit }}</h1>
                    @endforeach
                </div>
            </div>
            <div class="flex flex-col justify-center items-start">
                <h1 class="font-semibold text-xl mb-4">Package</h1>
                <div class="flex flex-col gap-2"> <!-- ID from form inputs -->
                    @foreach ($patients as $patient)
                        <h1> {{ $patient->package }}</h1>
                    @endforeach
                </div>
            </div>
            <div class="flex flex-col justify-center items-start ">
                <h1 class="font-semibold text-xl mb-4 justify-self-start">Contacts</h1>
                <div class="flex flex-col items-center justify-center gap-2">
                    @foreach ($patients as $patient)
                        <div class="flex gap-4">
                            <div class="tooltip">
                                <img class="h-8" src="{{ asset('images/call-icon.png') }}" alt="Call Icon">
                                <span class="tooltiptext">{{ $patient->phone_number }}</span>
                            </div>
                            <div class="tooltip">
                                <img class="h-8" src="{{ asset('images/facebook-gray.png') }}" alt="Facebook Icon">
                                <span class="tooltiptext">{{ $patient->facebook_name }}</span>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection

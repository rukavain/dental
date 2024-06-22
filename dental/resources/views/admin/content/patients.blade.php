@extends('admin.dashboard')
@section('content')
    <style>
        /* styling for contact tooltips */
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
                <form method="GET" action="{{ route('patient.list') }}" class="flex gap-4 items-center justify-center my-4">
                    <h1>Sort by: </h1>
                    <select name="sort" class="border border-gray-400 py-2 px-4 rounded-md" id="sort">
                        <option value="date_added" {{ request()->get('sort') == 'date_added' ? 'selected' : '' }}>Date added
                        </option>
                        <option value="date_of_next_visit"
                            {{ request()->get('sort') == 'date_of_next_visit' ? 'selected' : '' }}>Next visit</option>
                        <option value="id" {{ request()->get('sort') == 'id' ? 'selected' : '' }}>ID</option>
                        <option value="name" {{ request()->get('sort') == 'name' ? 'selected' : '' }}>Name</option>
                    </select>
                </form>
            </label>
            <a href="{{ route('add-patient-page') }}"
                class="flex justify-center items-center gap-2  rounded-md py-2 px-4 min-w-max border-2 border-gray-600 hover:shadow-md hover:border-green-700 font-semibold text-gray-800 transition-all">
                Add patient
                <img class="h-8" src="{{ asset('images/add-patient.png') }}" alt="">
            </a>
        </div> <!-- run @/foreach for each field/row  -->
        <table class="w-full table-auto">
            <thead>
                <tr>
                    <th class="px-4 py-2">ID</th>
                    <th class="px-4 py-2">Name</th>
                    <th class="px-4 py-2">Date of next visit</th>
                    <th class="px-4 py-2">Package</th>
                    <th class="px-4 py-2">Contacts</th>
                    <th class="px-4 py-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($patients as $patient)
                    <tr class="">
                        <td class="border px-4 py-2">{{ $patient->id }}</td>
                        <td class="border px-4 py-2">{{ $patient->lastname }} {{ $patient->firstname }}</td>
                        <td class="border px-4 py-2">{{ $patient->date_of_next_visit }}</td>
                        <td class="border px-4 py-2">{{ $patient->package }}</td>
                        <td class="border px-4 py-2">
                            <div class="flex justify-center items-center gap-6">
                                <div class="tooltip">
                                    <img class="h-8" src="{{ asset('images/call-icon.png') }}" alt="Call Icon">
                                    <span class="tooltiptext">{{ $patient->phone_number }}</span>
                                </div>
                                <div class="tooltip">
                                    <img class="h-8" src="{{ asset('images/facebook.png') }}" alt="Facebook Icon">
                                    <span class="tooltiptext">{{ $patient->facebook_name }}</span>
                                </div>
                            </div>
                        </td>
                        <td class="border py-2">
                            <div class="flex gap-2 justify-center items-center">
                                <a class=" border border-slate-600 rounded-md py-2 px-4 text-white font-semibold hover:bg-gray-400 transition-all"
                                    href=" {{ route('update.patient.page', $patient->id) }} ">
                                    <img class=h-6 src="{{ asset('images/edit-icon.png') }}" alt="">
                                </a>
                                <a href="{{ route('show.patient', $patient->id) }}"
                                    class="border border-slate-600 rounded-md py-2 px-4 text-white font-semibold hover:bg-gray-400 transition-all">
                                    <img class=h-6 src="{{ asset('images/view-icon.png') }}" alt="">
                                </a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
    <script>
        document.getElementById('sort').addEventListener('change', function() {
            this.form.submit();
            document.getElementById('package').toUpperCase();

        });
    </script>
@endsection

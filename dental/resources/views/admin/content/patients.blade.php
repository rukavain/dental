@extends('admin.dashboard')
@section('content')
    <div class="m-4">
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
                        href="">
                        Add patient
                    </a>
                </button>
            </div>
        </div>

    </section>
@endsection

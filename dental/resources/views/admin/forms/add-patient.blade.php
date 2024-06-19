@extends('admin.dashboard')
@section('content')
    <div class="m-4 mb-8">
        @include('components.search')
    </div>
    <section class="bg-white shadow-lg rounded-md max-w-max p-6 m-6">
        <h1 class="font-bold text-5xl p-4">Add new patient</h1>
        <form method="POST" action="{{ route('add.patient') }}">
            @method('POST')
            @csrf
            <div class="flex flex-wrap items-start justify-start gap-8 max-w-4xl p-8">
                <label for="firstname">
                    <h1>First name</h1>
                    <input class="border border-gray-400 py-2 px-4 rounded-md" name="firstname" type="text" id="firstname"
                        autocomplete="off" placeholder="Juan">
                </label>
                <label for="lastname">
                    <h1>Last name</h1>
                    <input class="border border-gray-400 py-2 px-4 rounded-md" name="lastname" type="text" id="lastname"
                        autocomplete="off" placeholder="Dela Cruz">
                </label>
                <label for="gender">
                    <h1>Gender</h1>
                    <select class="border border-gray-400 py-2 px-4 rounded-md" name="gender" id="gender">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="others">Others</option>
                        <option value="prefer-not-to-say">Prefer not to say</option>
                    </select>
                </label>
                <label for="date_of_birth">
                    <h1>Date of birth</h1>
                    <input class="border border-gray-400 py-2 px-4 rounded-md" name="date_of_birth" type="date"
                        id="date_of_birth">
                </label>
                <label for="facebook_name">
                    <h1>Facebook name</h1>
                    <input class="border border-gray-400 py-2 px-4 rounded-md" name="facebook_name" type="text"
                        autocomplete="off" id="facebook_name" placeholder="Dela Cruz">
                </label>
                <label for="Package">
                    <h1>Package</h1>
                    <select class="border border-gray-400 py-2 px-4 rounded-md" name="package" id="package">
                        <option value="A">Package A</option>
                        <option value="B">Package B</option>
                        <option value="C">Package C</option>
                        <option value="D">Package D</option>
                        <option value="E">Package E</option>
                    </select>
                </label>
                <label for="phone_number">
                    <h1>Phone number</h1>
                    <input class="border border-gray-400 py-2 px-4 rounded-md" name="phone_number" type="text"
                        autocomplete="off" id="phone_number">
                </label>
                <label for="date_of_next_visit">
                    <h1>Date of next visit</h1>
                    <input class="border border-gray-400 py-2 px-4 rounded-md" name="date_of_next_visit" type="date"
                        autocomplete="off" id="date_of_next_visit">
                </label>

                <label class="w-full" for="address">
                    <h1>Address</h1>
                    <input class="border border-gray-400 py-2 px-4 rounded-md min-w-full" name="address" type="text"
                        autocomplete="off" id="address" placeholder="123 Sparkling Street, Dentopolis, Smileville, USA">
                </label>
                <div class="flex gap-4 mt-4">
                    <button
                        class="py-4 px-8 font-semibold rounded-md bg-green-600 text-white hover:bg-green-700 transition-all"
                        type="submit">
                        Add patient
                    </button>
                    <button class="py-4 px-8 font-semibold rounded-md bg-red-600 text-white hover:bg-red-700 transition-all"
                        type="reset">
                        Cancel
                    </button>
                </div>
            </div>
        </form>
    </section>
    <script>
        const today = new Date().toISOString().split('T')[0];
        document.getElementById('date_of_next_visit').setAttribute('min', today);
    </script>
@endsection

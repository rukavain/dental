@extends('admin.dashboard')
@section('content')
    <div class="m-4 mb-8">
        @include('components.search')
    </div>
    <section class="bg-white shadow-lg rounded-md p-6 m-6">
        <h1 class="font-bold text-5xl p-4">Add new patient</h1>
        <form action="">
            @method('')
            @csrf
            <div class="flex flex-wrap items-start justify-start gap-8 max-w-4xl p-8">
                <label for="firstname">
                    <h1>First name</h1>
                    <input class="border border-gray-400 py-2 px-4 rounded-md" type="text" id="firstname" placeholder="Juan">
                </label>
                <label for="lastname">
                    <h1>Last name</h1>
                    <input class="border border-gray-400 py-2 px-4 rounded-md" type="text" id="lastname"
                        placeholder="Dela Cruz">
                </label>
                <label for="gender">
                    <h1>Gender</h1>
                    <select class="border border-gray-400 py-2 px-4 rounded-md" type="dropdown" id="gender"
                        id="time">
                        <option value="">Male</option>
                        <option value="">Female</option>
                        <option value="">Others</option>
                        <option value="">Prefer not to say</option>
                    </select>
                </label>
                <label for="date-of-birth">
                    <h1>Date of birth</h1>
                    <input class="border border-gray-400 py-2 px-4 rounded-md" type="date" id="date-of-birth">
                </label>
                <label for="facebookname">
                    <h1>Facebook name</h1>
                    <input class="border border-gray-400 py-2 px-4 rounded-md" type="text" id="facebookname"
                        placeholder="Dela Cruz">
                </label>
                <label for="Package">
                    <h1>Package</h1>
                    <select class="border border-gray-400 py-2 px-4 rounded-md" type="dropdown" id="package"
                        id="package">
                        <option value="">Package A</option>
                        <option value="">Package B</option>
                        <option value="">Package C</option>
                        <option value="">Package D</option>
                        <option value="">Package E</option>
                    </select>
                </label>
                <label for="phone-number">
                    <h1>Phone number</h1>
                    <input class="border border-gray-400 py-2 px-4 rounded-md" type="text" id="phone-number">
                </label>
                <label for="date-of-next-visit">
                    <h1>Date of next visit</h1>
                    <input class="border border-gray-400 py-2 px-4 rounded-md" type="date" id="date-of-next-visit">
                </label>

                <label class="w-full" for="address">
                    <h1>Address</h1>
                    <input class="border border-gray-400 py-2 px-4 rounded-md min-w-full" type="text" id="address"
                        placeholder="123 Sparkling Street, Dentopolis, Smileville, USA">
                </label>
                <div class="flex gap-4 mt-4">
                    <a href="">
                        <button
                            class="py-4 px-8 font-semibold rounded-md bg-green-600 text-white hover:bg-green-700 transition-all"
                            type="submit">
                            Add patient
                        </button>
                    </a>
                    <a href="">
                        <button
                            class="py-4 px-8 font-semibold rounded-md bg-red-600 text-white hover:bg-red-700 transition-all"
                            type="submit">
                            Cancel
                        </button>
                    </a>
                </div>
            </div>
        </form>
    </section>
    <script>
        const today = new Date().toISOString().split('T')[0];
        document.getElementById('date-of-next-visit').setAttribute('min', today);
    </script>
@endsection

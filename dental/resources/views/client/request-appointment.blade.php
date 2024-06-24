@extends('components.layout')
@section('title')
    | Appointment
@endsection
@section('content')
    <section class="flex flex-col items-center justify-center">
        <div class="bg-black flex justify-center items-start relative">
            <div
                class="absolute inset-0 flex flex-col gap-4 justify-center items-center text-center z-10 font-bold text-white ">
                <h1 class="text-5xl max-w-5xl">Contact the Dental Clinic for Quality Dental Services</h1>
                <h1 class="text-2xl">We look forward to hearing from you!</h1>
            </div>
            <img class="opacity-35 object-fill" src="{{ asset('images/appointment-landing.jpg') }}" alt="">
        </div>
        <form action="{{route('submit.appointment')}}" method="POST"
            class="bg-white my-12 mx-4 p-12 w-2xl shadow-lg rounded-md flex flex-col justify-center items-center">
            @csrf

            <h1 class="text-center my-8 text-5xl font-bold max-w-2xl placeholder-yellow-800">Please enter your contact
                information.</h1>
                @if (session('success'))
            <div class="bg-green-500 text-white p-4 rounded-md mb-4">
                {{ session('success') }}
            </div>
        @endif
            <div class="flex w-full gap-4 items-start justify-evenly py-8">
                <div class="flex flex-col gap-4 justify-center items-start">
                    <label for="firstname">
                        <h1>First name</h1>
                        <input class="border border-gray-400 py-2 px-4 rounded-md" type="text" id="firstname"
                            placeholder="Juan">
                    </label>
                    <label for="lastname">
                        <h1>Last name</h1>
                        <input class="border border-gray-400 py-2 px-4 rounded-md" type="text" id="lastname"
                            placeholder="Dela Cruz">
                    </label>
                    <label for="date-of-birth">
                        <h1>Date of birth</h1>
                        <input class="border border-gray-400 py-2 px-4 rounded-md" type="date" id="date-of-birth">
                    </label>
                    <label for="phone-number">
                        <h1>Phone number</h1>
                        <input class="border border-gray-400 py-2 px-4 rounded-md" type="text" id="phone-number">
                    </label>
                    <label for="email">
                        <h1>E-mail</h1>
                        <input class="border border-gray-400 py-2 px-4 rounded-md" type="email" id="email">
                    </label>
                    <label for="zip-code">
                        <h1>Zip code</h1>
                        <input class="border border-gray-400 py-2 px-4 rounded-md" type="text" id="zip-code">
                    </label>
                </div>
                <div class="flex flex-col justify-evenly gap-4">
                    <label for="appointment-date">
                        <h1>Appointment date</h1>
                        <input class="border border-gray-400 py-2 px-4 rounded-md" type="date" id="appointment-date"
                            id="date">
                    </label>
                    <label for="time">
                        <h1>Preferred Time</h1>
                        <select class="border border-gray-400 py-2 px-4 rounded-md" type="dropdown" id="appointment-date"
                            id="time">
                            <option value="">No preference</option>
                            <option value="">Early morning</option>
                            <option value="">Late morning</option>
                            <option value="">Early afternoon</option>
                            <option value="">Late afternoon</option>
                        </select>
                    </label>
                    <label for="notes">
                        <h1>Notes:</h1>
                        <textarea cols="30" rows="11" class="py-2 px-3 border border-gray-400 rounded-md" placeholder="Notes"
                            name="notes" id="notes"></textarea>
                    </label>
                </div>
            </div>
            <a class="m-5" href="">
                <button type="submit"
                    class="bg-green-600 hover:bg-green-700 text-white font-semibold rounded-md py-4 px-12 text-md transition-all">
                    Submit
                </button>
            </a>
        </form>
        <script>
            const today = new Date().toISOString().split('T')[0];
            document.getElementById('date').setAttribute('min', today);
        </script>
    </section>

    @include('components.location')
    @include('components.footer')
@endsection

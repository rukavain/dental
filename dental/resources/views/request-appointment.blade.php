@extends('components.layout')
@section('content')
    <section>
        <div class="bg-black flex justify-center items-start relative">
            <div
                class="absolute inset-0 flex flex-col gap-4 justify-center items-center text-center z-10 font-bold text-white ">
                <h1 class="text-5xl max-w-5xl">Contact the Dental Clinic for Quality Dental Services</h1>
                <h1 class="text-2xl">We look forward to hearing from you!</h1>
            </div>
            <img class="opacity-35 object-fill" src="{{ asset('images/appointment-landing.jpg') }}" alt="">
        </div>
        <form action="">
            <div>
                <h1>Please enter your contact information.</h1>
                <input type="text" label="firstname" placeholder="First name">
                <input type="text" label="lastname" placeholder="Last name">
                <input type="date" label="date-of-birth">
                <input type="number">
            </div>
        </form>
    </section>
    @include('components.location')
@endsection

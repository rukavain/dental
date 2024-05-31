<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>{{ config('app.name') }} @yield('title') </title>
    <link rel="icon" href="{{ asset('/images/logo.png') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body>
    <section class="h-screen bg-slate-100 flex justify-center items-center ">
        <div class="bg-white rounded-lg shadow-lg flex max-w-5xl">
            <div class="bg-green-600 rounded-lg text-white p-8 flex flex-col">
                <h1 class="font-bold text-4xl text-white max-w-sm mb-6">Register account</h1>
                <form action="" class="flex flex-wrap justify-start max-w-4xl gap-4 mb-8">
                    @csrf
                    <label for="firstname">
                        <h1 class="font-semibold">First name</h1>
                        <input class="border text-black border-gray-400 py-2 px-4 rounded-md" type="text"
                            name="firstname" id="firstname">
                    </label>
                    <label for="lastname">
                        <h1 class="font-semibold">Last name</h1>
                        <input class="border text-black border-gray-400 py-2 px-4 rounded-md" type="text"
                            name="lastname" id="lastname">
                    </label>
                    <label for="date-of-birth">
                        <h1 class="font-semibold">Date of birth</h1>
                        <input class="border text-black border-gray-400 py-2 px-4 rounded-md" type="date"
                            name="date-of-birth" id="date-of-birth">
                    </label>
                    <label for="sex">
                        <h1>Sex</h1>
                        <select class="border text-slate-900 border-gray-400 py-2 px-4 rounded-md" type="dropdown"
                            id="appointment-date" id="time">
                            <option value="">N/A</option>
                            <option value="">Male</option>
                            <option value="">Female</option>

                        </select>
                    </label>
                    <label for="email">
                        <h1 class="font-semibold">E-mail</h1>
                        <input class="border text-black border-gray-400 py-2 px-4 rounded-md" type="email"
                            name="email" id="email">
                    </label>
                    <label for="password">
                        <h1 class="font-semibold">Password</h1>
                        <input class="border text-black border-gray-400 py-2 px-4 rounded-md" type="password"
                            name="password" id="password">
                    </label>
                </label>
                <label for="confirm-password">
                    <h1 class="font-semibold">Confirm Password</h1>
                    <input class="border text-black border-gray-400 py-2 px-4 rounded-md" type="password"
                        name="confirm-password" id="confirm-password">
                </label>
                <label for="address">
                    <h1 class="font-semibold">Address</h1>
                    <input class="border min-w-full text-black border-gray-400 py-2 px-4 rounded-md" type="text"
                        name="address" id="address">
                </label>
                    <button
                        class="bg-slate-200 my-4 self-end text-slate-900 font-bold py-2 px-8 rounded-md hover:bg-slate-900 hover:text-slate-100 transition-all">Signup</button>
                </form>
                <div class="flex gap-2 flex-col text-sm  max-w-52">
                    <a href="{{ route('login') }}">Already have an account?</a>
                    <a href="{{ route('homepage') }}">Go back to homepage</a>
                </div>
            </div>
            <div class="p-8">
                <img class="mx-8" src="{{ asset('images/logo.png') }}" alt="">
                <div class="flex flex-col justify-center text-center mt-6">
                    <h1 class="font-bold text-xl">Tooth Impressions Dental Clinic</h1>
                    <h1 class="text-sm">Your Smile, Our Passion: Quality Dental Care You Can Trust.</h1>
                </div>
            </div>
        </div>
    </section>
</body>

</html>

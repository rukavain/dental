<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>{{ config('app.name') }} | Login</title>
    <link rel="icon" href="{{ asset('/images/logo.png') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body>
    <section class="h-screen bg-slate-100 flex justify-center items-center">
        <div class="bg-white rounded-lg shadow-lg flex">
            <div class="bg-green-600 rounded-lg text-white p-8 flex flex-col justify-between">
                <div>
                    <h1 class="font-bold text-4xl text-white max-w-sm mb-6">Login to your account</h1>
                    <form action="" class="flex flex-col gap-4 mb-8">
                        @csrf
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
                        <button
                            class="bg-slate-200 max-w-min text-slate-900 font-bold py-2 px-8 rounded-md hover:bg-slate-900 hover:text-slate-100 transition-all">Login</button>
                    </form>
                </div>

                <div class="flex gap-2 flex-col text-sm max-w-44">
                    <a class="hover:font-semibold transition-all" href="{{ route('register') }}">Don't have an
                        account?</a>
                    <a class="hover:font-semibold transition-all" href="{{ route('homepage') }}">Go back to homepage</a>
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

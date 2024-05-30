<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body>
    <div class="flex p-4 justify-between align-center shadow-lg">
        <div class="flex gap-4 text-md justify-center items-center">
            <a href="{{ route('homepage') }}">
                <img class="h-14" src="{{ asset('images/logo.png') }}" alt="">
            </a>
            <div class="flex gap-4 max-md:hidden">
                <h1 class="hover:font-bold transition-all cursor-pointer">Insurance</h1>
                <h1 class="hover:font-bold transition-all cursor-pointer">Locations</h1>
                <h1 class="hover:font-bold transition-all cursor-pointer">Services</h1>
                <h1 class="hover:font-bold transition-all cursor-pointer">Orthodontics</h1>
                <h1 class="hover:font-bold transition-all cursor-pointer">Emergency</h1>
            </div>
        </div>
        <div class="flex gap-6 justify-center items-center">
            <h1 class="font-bold">Login</h1>
            <a href="{{ route('request-appointment') }}">
                <h1
                    class="py-2 px-4 rounded-md text-white font-semibold bg-green-600 hover:bg-green-700 transition-all cursor-pointer">
                    BOOK NOW</h1>
            </a>

        </div>
    </div>
</body>

</html>

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
            <div>
                <img class="h-14" src="{{ asset('images/logo.png') }}" alt="">
            </div>
            <h1 class="hover:font-bold transition-all cursor-pointer">Insurance</h1>
            <h1 class="hover:font-bold transition-all cursor-pointer">Locations</h1>
            <h1 class="hover:font-bold transition-all cursor-pointer">Services</h1>
            <h1 class="hover:font-bold transition-all cursor-pointer">Orthodontics</h1>
            <h1 class="hover:font-bold transition-all cursor-pointer">Emergency</h1>
        </div>
        <div class="flex gap-6 justify-center items-center">
            <h1 class="font-bold">Login</h1>
            <h1
                class="py-2 px-4 rounded-md text-white font-semibold bg-green-600 hover:bg-green-700 transition-all cursor-pointer">
                BOOK NOW</h1>
        </div>
    </div>
</body>

</html>

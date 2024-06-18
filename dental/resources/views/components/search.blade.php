<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>{{ config('app.name') }} @yield('title') </title>
    <link rel="icon" href="{{ asset('/images/logo.png') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>
<div class="flex justify-between gap-2">
    <form class=" flex justify-center items-center gap-2" action="">
        @method('')
        @csrf
        <img class="h-12" src="{{ asset('images/search-icon.png') }}" alt="">
        <input type="search" class=" py-2 px-4 border-gray-400 rounded-md">
        <button class="shadow-md py-2 px-6 rounded-md bg-white hover:bg-gray-800 hover:text-white transition-all">
            <a href="">
                Search
            </a>
        </button>
    </form>
    <div class="flex gap-3 justify-center items-center self-end">
        <img class="h-12" src="{{ asset('images/logo.png') }}" alt="">
        <h1 class="text-md font-semibold">Juan Dela Cruz</h1>
    </div>
</div>
</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>{{ config('app.name') }} | Dashboard </title>
    <link rel="icon" href="{{ asset('/images/logo.png') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body>
    <section class="h-screen w-full  bg-slate-100 flex justify-start">
        <div>
            @include('components.sidebar')
        </div>
        <div class="w-full">
            @yield('content')
        </div>
    </section>
    <hr>
    @include('components.footer')
</body>

</html>

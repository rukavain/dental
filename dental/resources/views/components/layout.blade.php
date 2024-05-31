<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>{{ config('app.name') }} @yield('title') </title>
    <link rel="icon" href="{{ asset('/images/logo.png') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>
<script>
    function test(message) {
        alert(`${message}`);
    }
</script>

<body class="bg-slate-100">
    @include('components.navbar')

    @yield('content')
    @include('components.footer')
</body>

</html>

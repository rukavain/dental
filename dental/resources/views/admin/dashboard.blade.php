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
    <section class="h-screen bg-slate-100">
        <div>
            @include('components.sidebar')
        </div>
        <div>
            @include('admin.content.overview')
        </div>
    </section>
    @include('components.footer')
</body>

</html>

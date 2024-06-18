<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>{{ config('app.name') }} @yield('title') </title>
    <link rel="icon" href="{{ asset('/images/logo.png') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body class="">
    <nav
        class="max-w-max min-w-max self-start h-screen bg-white z-0 flex flex-col justify-between items-center py-4 px-8">
        <div class="flex flex-col gap-4">
            <div class="flex justify-start items-center gap-2 mb-4">
                <a href="{{ route('homepage') }}">
                    <img class="h-10" src="{{ asset('images/logo.png') }}" alt="">
                </a>
                <h1 class="text-sm">Tooth Impressions Dental Clinic</h1>
            </div>
            <div class="flex flex-col items-start gap-4">
                <a class="flex justify-center items-center gap-2" href="{{ route('overview') }}">
                    <img class="h-8" src="{{ asset('images/dashboard-icon.png') }}" alt="">
                    <button class="hover:font-bold transition-all">
                        Dashboard
                    </button>
                </a>
                <a class="flex justify-center items-center gap-2" href="{{ route('patients') }}">
                    <img class="h-8" src="{{ asset('images/patient-list-icon.png') }}" alt="">
                    <button class="hover:font-bold transition-all">
                        Patient list
                    </button>
                </a>
                <a class="flex justify-center items-center gap-2" href="{{ route('add-patient') }}">
                    <img class="h-8" src="{{ asset('images/add-patient.png') }}" alt="">
                    <button class="hover:font-bold transition-all">
                        Add patient
                    </button>
                </a>
            </div>
        </div>
        <a class="flex justify-center self-start     gap-2" href="">
            <img class="h-8" src="{{ asset('images/patient-list-icon.png') }}" alt="">
            <button class="hover:font-bold transition-all font-semibold hover:text-red-600">
                Log out
            </button>
        </a>
    </nav>
</body>

</html>

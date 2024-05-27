<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body class="bg-slate-100">
    @include('components.navbar')
    <section class="flex justify-evenly mx-4 items-center my-8 ">
        <div class="bg-white w-lvw flex flex-col py-8 px-12 rounded-lg shadow-lg gap-6 h-min">
            <h1 class="text-7xl font-semibold">Look forward to the dentist</h1>
            <h1 class="text-lg">Top-rated clinicians</h1>

            <div class="w-[50%] flex flex-col justify-center items-start gap-4">
                <a class="max-w-sm text-center mt-4" href="">
                    <h1
                        class="bg-green-600 rounded-md py-2 px-4 font-bold text-white hover:bg-green-700 transition-all">
                        BOOK NOW</h1>
                </a>
                <h1 class="text-sm">
                    OR CALL: <span class="font-bold">212-2345-5918</span>
                </h1>
            </div>
        </div>
        <div class=" max-w-[50vw] flex justify-center items-center">
            <img class="h-max rounded-lg" src="{{ asset('images/hero-image.jpg') }}" alt="">
        </div>
    </section>
</body>

</html>

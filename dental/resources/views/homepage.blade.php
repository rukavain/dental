<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body class="bg-slate-100">
    @include('components.navbar')
    <section class="flex flex-wrap justify-between md:justify-center gap-12 mx-4 items-center my-12">
        <div class="bg-white flex flex-col py-8 px-12 rounded-lg shadow-lg gap-6 h-min md:max-w-lg">
            <h1 class="text-7xl font-semibold max-md:text-5xl">Look forward to the dentist</h1>
            <h1 class="text-lg">Top-rated clinicians</h1>

            <div class="w-1/2 py-2 flex flex-col justify-center items-start gap-4">
                <a class="max-w-sm text-center mt-4" href="">
                    <h1
                        class="bg-green-600 rounded-md py-4 max-md:text-sm px-8 font-bold text-white hover:bg-green-700 transition-all">
                        BOOK NOW</h1>
                </a>
                <h1 class="text-sm block">
                    OR CALL: <span class="font-bold">212-2345-5918</span>
                </h1>
            </div>
        </div>
        <div class="max-w-[50%] flex justify-center items-center max-md:hidden">
            <img class="h-max rounded-lg" src="{{ asset('images/hero-image.jpg') }}" alt="">
        </div>
    </section>
    <section class="bg-green-600 flex flex-col justify-center items-center py-8 my-4 shadow-lg">
        <div class="max-w-5xl mb-9 px-7">
            <h1 class="text-white text-7xl max-md:text-6xl text-center font-bold">
                Feel amazing about your oral health
            </h1>
        </div>
        <div class="flex flex-col justify-center items-start my-5 gap-8 px-4">
            <div class="flex gap-6 justify-center items-center">
                <h1 class="bg-white text-green-800 p-6 rounded-full font-bold text-md">
                    15+
                </h1>
                <div class="flex flex-col justify-start items-start">
                    <h1 class="text-white font-semibold text-4xl max-md:text-3xl">Decades of experiences</h1>
                    <h1 class="text-white text-md">Our clinical team is led by renowned clinicians.</h1>
                </div>
            </div>
            <div class="flex gap-6 justify-center items-center">
                <h1 class="bg-white text-green-800 p-4 rounded-full font-bold text-md">
                    <img class="h-11" src="{{ asset('images/atom.png') }}" alt="">
                </h1>
                <div class="flex flex-col justify-start items-start">
                    <h1 class="text-white font-semibold text-4xl max-md:text-3xl">Science-based care</h1>
                    <h1 class="text-white text-md">We take advantage of all the latest research.</h1>
                </div>
            </div>
            <div class="flex gap-6 justify-center items-center">
                <h1 class="bg-white text-green-800 p-4 rounded-full font-bold text-md">
                    <img class="h-11" src="{{ asset('images/tooth.png') }}" alt="">
                </h1>
                <div class="flex flex-col justify-start items-start">
                    <h1 class="text-white font-semibold text-4xl max-md:text-3xl">Only the care you need</h1>
                    <h1 class="text-white text-md">Our dentists don't make a commission on procedures.</h1>
                </div>
            </div>
        </div>
    </section>
</body>

</html>

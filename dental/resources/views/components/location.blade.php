<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>{{ config('app.name') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body class="bg-slate-100">
    <section class="bg-green-600 flex gap-4 justify-center flex-wrap items-center p-6 self-center">
        <div class=" rounded-md">
            <h1 class="text-3xl text-white font-semibold">
                We are located at:
            </h1>
            <iframe class="rounded-md mt-4 max-md:h-96 max-md:w-96"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3850.6972040053397!2d120.58769219999998!3d15.174964899999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3396ed8f0f0cce49%3A0x210e9501d168eba1!2sTooth%20Impressions%20Dental%20Clinic%20Dau!5e0!3m2!1sen!2sph!4v1716913121813!5m2!1sen!2sph"
                height="500" width="600" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="bg-white rounded-md p-8 flex flex-col gap-8">
            <h1 class="text-slate-900 text-5xl font-bold max-w-xl">3 Locations throughout Pampanga</h1>
            <h1 class="max-w-lg">Our offices are conveniently located, so you can get in and out quickly and easily.
            </h1>
            <div class="flex flex-col gap-4 ">
                <div class="flex justify-start items-center gap-4">
                    <img class="h-8" src="{{ asset('images/calendar.png') }}" alt="">
                    <h1>Monday - Sunday: 9:00 AM - 5:00 PM</h1>
                </div>
                <div class="flex justify-start items-center gap-4">
                    <img class="h-8" src="{{ asset('images/telephone.png') }}" alt="">
                    <h1>0927 802 2807</h1>
                </div>
                <div class="flex justify-start items-center gap-4">
                    <img class="h-8" src="{{ asset('images/location.png') }}" alt="">
                    <h1>Mabalacat, Philippines, 2010</h1>
                </div>
            </div>
            <a href="">
                <h1
                    class="bg-gray-800 max-w-fit hover:bg-gray-900 transition all rounded-md py-2 px-8 text-white font-semibold">
                    Our locations</h1>
            </a>
        </div>
    </section>
</body>

</html>
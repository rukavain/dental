<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body class="bg-slate-100">
    @include('components.navbar')
    <section class="flex py-8 flex-wrap justify-between md:justify-center mx-4 items-center ">
        <div class="bg-white flex flex-col py-11 px-12 mx-8 rounded-lg shadow-lg gap-6 md:max-w-lg h-full">
            <h1 class="text-7xl font-semibold max-md:text-5xl">Look forward to the dentist</h1>
            <h1 class="text-lg">Top-rated clinicians</h1>
            <div class="w-1/2 py-2 flex flex-col justify-center items-start gap-4">
                <a class="max-w-sm text-center mt-4" href="{{ route('request-appointment') }}">
                    <h1
                        class="min-w-max bg-green-600 rounded-md py-4 max-md:text-sm px-8 font-bold text-white hover:bg-green-700 transition-all">
                        BOOK NOW</h1>
                </a>
                <h1 class="text-sm min-w-max">
                    OR CALL: <span class="font-bold">212-2345-5918</span>
                </h1>
            </div>
        </div>
        <div class="w-2/5 flex justify-center items-center  max-md:hidden">
            <img class="h-max rounded-lg" src="{{ asset('images/hero-image.jpg') }}" alt="">
        </div>
    </section>
    <section class="bg-green-600 flex flex-col justify-center items-center py-8 my-4 shadow-lg">
        <div class="max-w-5xl mb-9 px-7">
            <h1 class="text-white text-7xl max-md:text-6xl text-center font-bold">
                Feel amazing about your oral health
            </h1>
        </div>
        <div class="flex flex-col justify-center items-start max-sm:items-center my-5 gap-8 px-4">
            <div class="flex gap-6 justify-center items-center mx-4">
                <h1 class="bg-white text-slate-900 p-6 rounded-full font-bold text-md">
                    15+
                </h1>
                <div class="flex flex-col justify-start items-start">
                    <h1 class="text-white font-semibold text-4xl max-md:text-3xl">Decades of experiences</h1>
                    <h1 class="text-white text-md">Our clinical team is led by renowned clinicians.</h1>
                </div>
            </div>
            <div class="flex gap-6 justify-center items-center mx-4">
                <h1 class="bg-white text-green-800 p-4 rounded-full font-bold text-md">
                    <img class="h-11 object-contain" src="{{ asset('images/atom.png') }}" alt="">
                </h1>
                <div class="flex flex-col justify-start items-start">
                    <h1 class="text-white font-semibold text-4xl max-md:text-3xl">Science-based care</h1>
                    <h1 class="text-white text-md">We take advantage of all the latest research.</h1>
                </div>
            </div>
            <div class="flex gap-6 justify-center items-center mx-4">
                <h1 class="bg-white text-green-800 p-4 rounded-full font-bold text-md">
                    <img class="h-11 object-contain" src="{{ asset('images/tooth.png') }}" alt="">
                </h1>
                <div class="flex flex-col justify-start items-start">
                    <h1 class="text-white font-semibold text-4xl max-md:text-3xl">Only the care you need</h1>
                    <h1 class="text-white text-md">Our dentists don't make a commission on procedures.</h1>
                </div>
            </div>
            <a href="" class="my-4">
                <h1
                    class="bg-white text-gray-900 font-semibold text-md py-4 px-8 rounded-md hover:bg-gray-900 hover:text-white transition-all">
                    Learn more</h1>
            </a>
        </div>
    </section>
    <section class="flex justify-evenly items-center flex-wrap gap-4 my-8">
        <div
            class="flex flex-col justify-start gap-4 max-w-xl p-12 rounded-md bg-green-600 text-white shadow-lg hover:bg-green-700 transition-all cursor-pointer mx-8">
            <h1 class="text-6xl font-semibold">
                Services
            </h1>
            <h1 class="font-semibold text-xl">
                Exceptional dental care for a healthier, brighter smile.
            </h1>
            <span class="text-md my-2">
                Skilled and compassionate dental professionals prioritize patient comfort and satisfaction, ensuring
                a
                gentle and thorough experience. Emphasis is placed on education for proper oral hygiene practices to
                maintain long-term dental health.
            </span>
        </div>
        <div
            class="flex flex-wrap justify-evenly items-center gap-12 mx-6 p-6 bg-white shadow-lg rounded-lg w-1/2 justify-self-end self-end ">
            <div
                class="flex flex-col justify-center items-center  max-w-md bg-green-600 rounded-md py-4 px-2 hover:mt-[-15px] hover:bg-green-800 cursor-pointer transition-all">
                <img class="h-44 bg-white m-4 p-5 rounded-md object-contain" src="{{ asset('images/root-canal.png') }}"
                    alt="">
                <h1 class="text-white font-semibold text-center">Root Canal</h1>

            </div>
            <div
                class="flex flex-col justify-center items-center  bg-green-600 rounded-md py-4 px-2 hover:mt-[-15px] hover:bg-green-800 cursor-pointer transition-all">
                <img class=" h-44 bg-white m-4 p-5 rounded-md object-contain"
                    src="{{ asset('images/tooth-extraction.png') }}" alt="">
                <h1 class="text-white font-semibold text-center">Tooth Extraction</h1>
            </div>
            <div
                class="flex flex-col justify-center items-center max-w-md bg-green-600 rounded-md py-4 px-2 hover:mt-[-15px] hover:bg-green-800 cursor-pointer transition-all">
                <img class=" h-44 bg-white m-4 p-5 rounded-md object-contain"
                    src="{{ asset('images/dental-restoration.png') }}" alt="">
                <h1 class="text-white font-semibold text-center">Dental Restoration</h1>
            </div>
            <div
                class="flex flex-col justify-center items-center  bg-green-600 rounded-md py-4 px-2 hover:mt-[-15px] hover:bg-green-800 cursor-pointer transition-all">
                <img class=" h-44 bg-white m-4 p-5 rounded-md object-contain"
                    src="{{ asset('images/dental-sealant.png') }}" alt="">
                <h1 class="text-white font-semibold text-center">Dental Sealant</h1>
            </div>
            <div
                class="flex flex-col justify-center items-center max-w-md bg-green-600 rounded-md py-4 px-2 hover:mt-[-15px] hover:bg-green-800 cursor-pointer transition-all">
                <img class=" h-44 bg-white m-4 p-5 rounded-md object-contain" src="{{ asset('images/braces.png') }}"
                    alt="">
                <h1 class="text-white font-semibold text-center">Braces</h1>
            </div>
            <div
                class="flex flex-col justify-center items-center border  bg-green-600 rounded-md py-4 px-2 hover:mt-[-15px] hover:bg-green-800 cursor-pointer transition-all">
                <img class=" h-44 bg-white m-4 p-5 rounded-md object-contain"
                    src="{{ asset('images/dental-cleaning.png') }}" alt="">
                <h1 class="text-white font-semibold text-center">Dental Cleaning</h1>
            </div>
        </div>
    </section>
    <section class="bg-green-600 flex gap-4 justify-center items-center p-6 ">
        <div class="p-12 min-w-min rounded-md">
            <h1 class="text-3xl text-white font-semibold">
                We are located at:
            </h1>
            <iframe class="rounded-md mt-4"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3850.6972040053397!2d120.58769219999998!3d15.174964899999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3396ed8f0f0cce49%3A0x210e9501d168eba1!2sTooth%20Impressions%20Dental%20Clinic%20Dau!5e0!3m2!1sen!2sph!4v1716913121813!5m2!1sen!2sph"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
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
    <section class="flex flex-col justify-center items-center my-8">

        <form class="flex justify-center items-center flex-col max-w-3xl bg-white p-8 rounded-md ">
            <h1 class="t-slate-900 font-bold text-6xl">Contact Us</h1>
            <h1 class="text-center my-4 ">
                Consult with our team online by filling out the form below. If you have specific inquiries regarding our
                services, please don't hesitate to get in touch. We will respond as soon as possible.</h1>
            <div class="flex flex-col justify-center items-start gap-7">
                <input class="py-2 px-4 rounded-md w-full border border-gray-600" placeholder="Name" type="text"
                    name="" id="">
                <input class="py-2 px-4 rounded-md  border border-gray-600" placeholder="Email" type="email">
                <textarea class="py-2 px-4 rounded-md w-full border border-gray-600" placeholder="Message" type="text"></textarea>
                <button class="my-5" type="submit">
                    <a class="py-4 px-8 font-semibold rounded-md bg-green-600 text-white hover:bg-green-700 transition-all"
                        href="">
                        Send
                    </a>
                </button>
            </div>

        </form>

    </section>
    @include('components.footer')
</body>

</html>

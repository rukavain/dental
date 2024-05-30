<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>{{ config('app.name') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>
<section class="flex flex-col justify-center items-center my-8">
    <form class="flex justify-center items-center flex-col max-w-3xl bg-white p-8 rounded-md ">
        <h1 class="t-slate-900 font-bold text-6xl text-center">Contact Us</h1>
        <h1 class="text-center my-4 ">
            Consult with our team online by filling out the form below. If you have specific inquiries regarding our
            services, please don't hesitate to get in touch. We will respond as soon as possible.</h1>
        <div class="flex flex-col justify-center items-start gap-7 w-full">
            <input class="py-2 px-4 rounded-md w-full border border-gray-600" placeholder="Name" type="text"
                name="" id="">
            <input class="py-2 px-4 rounded-md w-full border border-gray-600" placeholder="Email" type="email">
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

<body class="bg-slate-100">
</body>

</html>

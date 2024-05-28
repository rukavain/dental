<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <footer class="flex flex-col justify-center items-center py-8">
        <section class="flex gap-20 justify-center items-start py-4">
            <div>
                <h1>
                    STAY IN TOUCH
                </h1>
                <hr class="border-t-2 border-green-700 my-4">
                <div class="flex flex-col gap-8">
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
            </div>
            <div>
                <h1>PRACTICE</h1>
                <hr class="my-4 border-t-2 border-green-700">
                <div class="flex flex-col gap-8">
                    <h1>About</h1>
                    <h1>New Patients</h1>
                    <h1>Contact</h1>
                    <h1>Patient Referral</h1>
                    <h1>Payment</h1>
                </div>
            </div>
            <div>
                <h1>
                    SERVICES
                </h1>
                <hr class="my-4 border-t-2 border-green-700">
                <div class="flex flex-col gap-8">
                    <h1>Implants</h1>
                    <h1>Periodontics</h1>
                    <h1>Tooth Extraction</h1>
                    <h1>Tooth Filling</h1>
                    <h1>Braces</h1>
                </div>


            </div>
            <div>
                <h1>
                    REVIEW US
                </h1>
                <hr class="border-t-2 border-green-700 my-4">
                <div class="flex gap-4 flex-wrap">
                    <img class="h-12" src="{{ asset('images/gmail-logo.png') }}" alt="">
                    <img class="h-12" src="{{ asset('images/google.png') }}" alt="">
                </div>

            </div>
            <div>
                <h1>
                    SOCIAL MEDIA
                </h1>
                <hr class="border-t-2 border-green-700 my-4">
                <div class="flex gap-5 flex-wrap">
                    <img class="h-12" src="{{ asset('images/facebook.png') }}" alt="">
                    <img class="h-12" src="{{ asset('images/gmail-logo.png') }}" alt="">
                    <img class="h-12" src="{{ asset('images/instagram.png') }}" alt="">
                </div>

            </div>
        </section>
        <hr class="border-t-2 w-full py-4 border-green-700">
        <section class="flex justify-evenly items-center w-full">
            <div class="">
                <h1>&copy; Tooth Impressions Dental Clinic </h1>
                <h1>Privacy Policy | Accessibility Statement</h1>
            </div>
            <div class="flex flex-col justify-center items-center gap-4">
                <img class="h-12" src="{{ asset('images/logo.png') }}" alt="">
                <h1>Tooth Impressions Dental Clinic</h1>
            </div>
            <div class="">
                <h1>Dental Web Design & Marketing by: Vain</h1>
            </div>
        </section>
    </footer>
</body>

</html>

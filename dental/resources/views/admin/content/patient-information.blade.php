@extends('admin.dashboard')
@section('content')
    <div class="m-4">
        @include('components.search')
    </div>
    <section class="bg-white m-4 p-8 shadow-lg rounded-md flex flex-col justify-center z-0">
        <div class="flex justify-between">
            <div>
                <h1 class="text-5xl font-bold mb-6">{{ $patient->firstname }} {{ $patient->lastname }} </h1>
                <div class="flex flex-col gap-3 text-md">
                    <h1> Gender: <span class="font-semibold"> {{ $patient->gender }} </span> </h1>
                    <h1> Birth date: <span class="font-semibold"> {{ $patient->date_of_birth }} </span> </h1>
                    <h1> Facebook name: <span class="font-semibold"> {{ $patient->facebook_name }} </span> </h1>
                    <h1> Package availed: <span class="font-semibold"> {{ $patient->package }} </span> </h1>
                    <h1> Phone number: <span class="font-semibold"> {{ $patient->phone_number }} </span> </h1>
                    <h1> Date of next visit: <span class="font-semibold"> {{ $patient->date_of_next_visit }} </span> </h1>
                    <h1> Address: <span class="font-semibold"> {{ $patient->address }} </span> </h1>
                </div>
            </div>
            <div class="flex flex-col gap-4 ">
                <a href=" {{ route('update.patient.page', $patient->id) }} "
                    class="bg-gray-600 rounded-md text-center p-4 text-white font-semibold hover:bg-gray-800 transition-all">Edit
                    patient information</a>
                <a href=""
                    class="bg-gray-600 rounded-md p-4 text-center text-white font-semibold hover:bg-gray-800 transition-all">
                    View Patient Contract</a>
                <a href=""
                    class="bg-gray-600 rounded-md p-4 text-white text-center font-semibold hover:bg-gray-800 transition-all">
                    View Background of the patient</a>
                <a href=""
                    class="bg-gray-600 rounded-md p-4 text-white text-center font-semibold hover:bg-gray-800 transition-all">
                    View X-rays</a>
                <a href="{{ route('add.payment.page', $patient->id) }}"
                    class="bg-gray-600 rounded-md p-4 text-white text-center font-semibold hover:bg-gray-800 transition-all">
                    Add payment</a>
                <a class="bg-green-600 rounded-md p-4 text-white text-center font-semibold hover:bg-green-800 transition-all"
                    href=" {{ route('patient.list') }} ">
                    Go back
                </a>
            </div>
        </div>
        <div class="m-4 mb-8">
            <h1 class="font-bold text-3xl mb-4">Payment History for {{ $patient->firstname }} {{ $patient->lastname }}
            </h1>

            @if (session('success'))
                <div class="bg-green-500 text-white p-4 rounded-md mb-4">
                    {{ session('success') }}
                </div>
            @endif

            <div class="bg-white shadow-lg rounded-md p-4">
                @if ($payments->isEmpty())
                    <p>No payments recorded yet.</p>
                @else
                    <table class="w-full table-auto">
                        <thead>
                            <tr>
                                <th class="px-4 py-2">Tooth Number</th>
                                <th class="px-4 py-2">Dentist</th>
                                <th class="px-4 py-2">Procedure</th>
                                <th class="px-4 py-2">Charge</th>
                                <th class="px-4 py-2">Paid</th>
                                <th class="px-4 py-2">Balance Remaining</th>
                                <th class="px-4 py-2 max-w-sm">Remarks</th>
                                <th class="px-4 py-2">Signature</th>
                                <th class="px-4 py-2">Payment Date</th>
                                <th class="px-4 py-2">Actions</th>
                                <th class="px-4 py-2">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($payments as $payment)
                                <tr>
                                    <td class="border px-4 py-2">{{ $payment->tooth_number }}</td>
                                    <td class="border px-4 py-2">{{ $payment->dentist }}</td>
                                    <td class="border px-4 py-2">{{ $payment->procedure }}</td>
                                    <td class="border px-4 py-2">{{ $payment->charge }}</td>
                                    <td class="border px-4 py-2">{{ $payment->paid }}</td>
                                    <td class="border px-4 py-2">{{ $payment->balance_remaining }}</td>
                                    <td class="border px-4 py-2 max-w-sm">{{ $payment->remarks }}</td>
                                    <td class="border px-4 py-2">{{ $payment->signature ? 'Signed' : 'Not Signed' }}</td>
                                    <td class="border px-4 py-2">{{ $payment->payment_date }}</td>
                                    <td class="border px-4 py-2">
                                        @if ($payment->balance_remaining > 0)
                                            <a class="flex gap-2 items-center justify-center"
                                                href="{{ route('update.payment.page', [$patient->id, $payment->id]) }}">
                                                <img class="h-8" src="{{ asset('images/update-payment.png') }}"
                                                    alt="">
                                                <h1 class="text-md">Update</h1>
                                            </a>
                                        @else
                                            <button disabled
                                                class="flex gap-2 items-center justify-center opacity-35
                                                href="{{ route('update.payment.page', [$patient->id, $payment->id]) }}">
                                                <img class="h-8" src="{{ asset('images/update-payment.png') }}"
                                                    alt="">
                                                <h1 class="text-md">Update</h1>
                                            </button>
                                        @endif
                                    </td>
                                    <td class="border px-4 py-2 min-w-max">
                                        @if ($payment->balance_remaining > 0)
                                            <h1 class="text-md ">On going</h1>
                                        @else
                                            <h1 class="text-md ">Done</h1>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
        </div>
    </section>
@endsection

@extends('admin.dashboard')
@section('content')
    <div class="m-4">
        @include('components.search')
    </div>

    <section class="bg-white m-4 p-8 shadow-lg rounded-md flex flex-col justify-center z-0">
        <h1 class="text-5xl font-bold mb-6">Update Payment for {{ $patient->firstname }} {{ $patient->lastname }}</h1>

        <form action="{{ route('update.payment', ['patient' => $patient->id, 'payment' => $payment->id]) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="paid" class="block text-sm font-medium text-gray-700">Amount Paid</label>
                <input type="number" name="paid" id="paid"
                    class="mt-1 border border-gray-600 p-2 rounded-md block w-full" value="{{ old('paid') }}" required>
            </div>
            <div class="mb-4">
                <label for="remarks" class="block text-sm font-medium text-gray-700">Remarks</label>
                <textarea name="remarks" id="remarks" rows="4" class="mt-1 border border-gray-600 p-2 rounded-md block w-full">{{ old('remarks', $payment->remarks) }}</textarea>
            </div>
            <div class="mb-4">
                <label for="signature" class="block text-sm font-medium text-gray-700">Signature</label>
                <input type="hidden" name="signature" value="0"> <!-- Hidden field to handle unchecked case -->
                <input type="checkbox" name="signature" id="signature" value="1"
                    {{ old('signature', $payment->signature) ? 'checked' : '' }}>
            </div>
            <button type="submit" class="bg-blue-500 text-white p-2 rounded">Update Payment</button>
        </form>
    </section>
@endsection

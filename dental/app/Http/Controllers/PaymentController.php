<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
use App\Models\Patient;
use Illuminate\Support\Facades\Log;

class PaymentController extends Controller
{
    public function create(Patient $patient)
    {
        return view('admin.forms.add-payment', ['patient' => $patient]);
    }

    public function store(Request $request, Patient $patient)
    {
        $request->validate([
            'tooth_number' => 'nullable|string',
            'dentist' => 'nullable|string',
            'procedure' => 'nullable|string',
            'charge' => 'required|numeric|min:0',
            'paid' => 'required|numeric|min:0',
            'balance_remaining' => 'required|numeric|min:0',
            'remarks' => 'nullable|string',
            'signature' => 'nullable|boolean',
            'payment_date' => 'nullable|date',
        ]);

        $paymentData = $request->all();
        $paymentData['patient_id'] = $patient->id;

        if ($paymentData['balance_remaining'] == 0) {
            $paymentData['status'] = 'done';
        }

        $payment = Payment::create($paymentData);

        return redirect()->route('show.patient', $patient->id)->with('success', 'Payment recorded successfully.');
    }


    public function edit(Patient $patient, Payment $payment)
    {
        return view('admin.forms.update-payment', [
            'patient' => $patient,
            'payment' => $payment,
        ]);
    }

    public function update(Request $request, Patient $patient, Payment $payment)
    {
        Log::info('Updating payment', ['patient_id' => $patient->id, 'payment_id' => $payment->id]);

        $request->validate([
            'tooth_number' => 'nullable|string',
            'dentist' => 'nullable|string',
            'procedure' => 'nullable|string',
            'charge' => 'required|numeric|min:0',
            'paid' => 'required|numeric|min:0',
            'balance_remaining' => 'required|numeric|min:0',
            'remarks' => 'nullable|string',
            'signature' => 'nullable|boolean',
            'payment_date' => 'nullable|date',
        ]);

        try {
            $payment->update([
                'tooth_number' => $request->input('tooth_number'),
                'dentist' => $request->input('dentist'),
                'procedure' => $request->input('procedure'),
                'charge' => $request->input('charge'),
                'paid' => $request->input('paid'),
                'balance_remaining' => $request->input('balance_remaining'),
                'remarks' => $request->input('remarks'),
                'signature' => $request->input('signature', false),
                'payment_date' => $request->input('payment_date'),
                'status' => $payment->balance_remaining == 0 ? 'done' : 'ongoing',
            ]);

            Log::info('Payment updated successfully', ['payment' => $payment]);
        } catch (\Exception $e) {
            Log::error('Error updating payment', ['message' => $e->getMessage()]);
            return back()->with('error', 'Failed to update payment. Please try again.');
        }

        return redirect()->route('show.patient', $patient->id)->with('success', 'Payment updated successfully.');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
use App\Models\TransactionsReport;

class PaymentController extends Controller
{

    public function index()
    {
        $payments = Payment::all();
        return view('payment', compact('payments'));
    }

    public function storePayment(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'payment_method' => 'required|string', // Added validation for payment_method
            'card_number' => 'required|string',

            'cvv' => 'required|string',
            'name_on_card' => 'required|string',
            'expiry_date' => 'required|string',
        ]);

        // Create a new payment record
        Payment::create([
            'payment_method' => $request->input('payment_method'), // Added payment_method
            'card_number' => $request->input('card_number'),

            'cvv' => $request->input('cvv'),
            'name_on_card' => $request->input('name_on_card'),
            'expiry_date' => $request->input('expiry_date'),
        ]);

        // Redirect back with success message
        return redirect()->back()->with('success', 'Payment successful.');
    }


    public function cancelPayment(Payment $payment)
    {
        // Cancel the payment
        $payment->delete();

        // Redirect back with success message
        return redirect()->back()->with('success', 'Payment canceled.');
    }


}

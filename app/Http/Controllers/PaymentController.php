<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TransactionsReport;

class PaymentController extends Controller
{

    public function index()
    {
        $transactionsReports = TransactionsReport::all();
        return view('transactions.index', compact('transactionsReports'));
    }

public function showPayment($id)
    {
        $transaction = TransactionsReport::findOrFail($id);
        return view('transactions.index', compact('transaction'));
    }
    public function showCancelForm($id)
    {
        $transactionsReports = TransactionsReport::findOrFail($id);
        return view('transactions-report.cancel', compact('transactionsReports'));
    }
    public function processCancellation(Request $request, $id)
    {
        $request->validate([
            'reason' => 'required|string'
        ]);

        $transactionsReports = TransactionsReport::findOrFail($id);
        $transactionsReports->update([
            'reasonForCancellation' => $request->input('reason'),
            'status' => 'cancelled' // Update the status to 'cancelled'
        ]);

        return redirect()->route('transactions.index')->with('success', 'Transaction cancellation processed successfully.');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'productName' => 'required|string', // Added productName field
            'transactionName' => 'required|string',
            'transactionType' => 'required|string',
            'transactionAmount' => 'required|numeric',
            'transactionDate' => 'required|date',
            'transactionStatus' => 'required|string',
            'reasonForCancellation' => 'string|nullable',
        ]);

        TransactionsReport::create($validatedData);

        return redirect()->route('transactions.index')->with('success', 'Transaction report created successfully.');
    }





}

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

    public function store(Request $request)
    {
        $validatedData = $request->validate([
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


    // Action to show the details of a specific transaction
    public function showReport($id)
    {
        $transaction = TransactionsReport::findOrFail($id);
        return view('transactions-report.show', compact('transaction'));
    }


}

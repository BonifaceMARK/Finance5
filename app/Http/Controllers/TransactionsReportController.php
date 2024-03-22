<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TransactionsReport;

class TransactionsReportController extends Controller
{

public function storeReport(Request $request)
{
    // Validate the incoming request data
    $validatedData = $request->validate([
        'transactionName' => 'required|string',
        'transactionType' => 'required|string',
        'transactionAmount' => 'required|numeric',
        'transactionDate' => 'required|date',
        'transactionStatus' => 'required|string',
        'reasonForCancellation' => 'nullable|string'
    ]);

    // Create the transaction record
    TransactionsReport::create($validatedData);

    // Redirect back to the index page with a success message
    return redirect()->route('transactions-report.index')->with('success', 'Transaction created successfully.');
}


    // Action to show the details of a specific transaction
    public function showReport($id)
    {
        $transaction = TransactionsReport::findOrFail($id);
        return view('transactions-report.show', compact('transaction'));
    }


}

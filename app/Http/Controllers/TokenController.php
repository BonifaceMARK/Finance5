<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\TransactionsReport;

class TokenController extends Controller
{

    public function index()
    {
        $transactionsReports = TransactionsReport::all();
        $transactions = Transaction::all();
        return view('transactions.index', compact('transactions','transactionsReports'));
    }

    public function create()
    {
        return view('transactions.create');
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'total' => 'required|string',
            'token' => 'required|string',
            'contact_name' => 'required|string',
            'token_card_type' => 'required|string',
            'phone' => 'required|string',
            'email' => 'required|email',
            'address' => 'required|string',
            'description' => 'required|string',
        ]);

        Transaction::create($validatedData);

        return redirect()->route('transactions.index')->with('success', 'Transaction created successfully.');
    }


    public function show($id)
    {
        $transaction = Transaction::findOrFail($id);
        return view('transactions.show', compact('transaction'));
    }

    // Add other CRUD methods as needed...

}

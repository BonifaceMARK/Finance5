<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TransactionsReport;

class DashboardController extends Controller
{
    public function index()
    {
        $transactions = TransactionsReport::all();
        return view('dashboard', compact('transactions'));
    }
}

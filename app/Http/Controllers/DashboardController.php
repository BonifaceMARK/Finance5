<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TransactionsReport;
use App\Models\Transaction;
use App\Models\Task;
use App\Models\Project;

class DashboardController extends Controller
{
    public function index()
    {
        $recentTransactions = Transaction::latest()->limit(5)->get();
        $recentReports = TransactionsReport::latest()->limit(5)->get();
        $recentTasks = Task::latest()->limit(5)->get();
        $recentProjects = Project::latest()->limit(5)->get();

        $transactions = TransactionsReport::all();
        return view('dashboard', compact('transactions','recentTransactions', 'recentReports', 'recentTasks', 'recentProjects'));
    }
}

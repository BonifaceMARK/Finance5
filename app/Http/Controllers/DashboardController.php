<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\TransactionsReport;
use App\Models\ChatMessage;
use App\Models\PFRSChecklistItem;
use App\Models\Task;
use Carbon\Carbon;
use App\Models\Project;

class DashboardController extends Controller
{
    public function index()
    {
        $approvedItems = PFRSChecklistItem::where('status', 'Approved')->get();
        $rejectedItems = PFRSChecklistItem::where('status', 'Rejected')->get();
        $complyItems = PFRSChecklistItem::where('status', 'Comply')->get();
        $recentChatMessages = ChatMessage::latest()->take(5)->get();
        $recentPFRSChecklistItems = PFRSChecklistItem::latest()->take(5)->get();
        $recentTransactions = TransactionsReport::latest()->take(5)->get();

        $user = Auth::user();
        $name = $user->name;
        $department = $user->department;

        // Convert transactionDate to Carbon instance
        $recentTransactions->transform(function ($transaction) {
            $transaction->transactionDate = Carbon::parse($transaction->transactionDate);
            return $transaction;
        });

        return view('dashboard', compact('name', 'department','recentChatMessages', 'recentPFRSChecklistItems', 'recentTransactions', 'approvedItems', 'rejectedItems', 'complyItems'));
    }
}

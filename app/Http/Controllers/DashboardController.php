<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TransactionsReport;
use App\Models\ChatMessage;
use App\Models\PFRSChecklistItem;
use App\Models\Task;
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

        return view('dashboard', compact('recentChatMessages', 'recentPFRSChecklistItems', 'recentTransactions','approvedItems', 'rejectedItems', 'complyItems'));
    }
}

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

        $recentTasks = Task::latest()->limit(5)->get();
        $recentProjects = Project::latest()->limit(5)->get();


        return view('dashboard', compact( 'recentTasks', 'recentProjects'));
    }
}

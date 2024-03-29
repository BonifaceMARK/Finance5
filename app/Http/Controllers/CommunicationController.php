<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Message;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Auth;
use App\Models\Task;
use App\Models\Project;

class CommunicationController extends Controller
{

    public function index()
    {
        // Retrieve all projects with their tasks
        $projects = Project::with('tasks')->get();
        $tasks = Task::all();

        // Pass the projects data to the view
        return view('cac', compact('projects','tasks'));
    }
    public function storeProject(Request $request)
    {
        // Validate project data
        $validatedData = $request->validate([
            'project_name' => 'required|string',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
        ]);

        // Create a new project
        Project::create($validatedData);

        // Redirect back with success message
        return redirect()->back()->with('success', 'Project created successfully.');
    }

    public function storeTask(Request $request)
    {
        // Validate task data
        $validatedData = $request->validate([
            'task_name' => 'required|string',
            'task_start_date' => 'required|date',
            'task_end_date' => 'required|date',
        ]);

        // Create a new task
        Task::create($validatedData);

        // Redirect back with success message
        return redirect()->back()->with('success', 'Task created successfully.');
    }

}

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
    public function store(Request $request)
    {
        $request->validate([
            'project_name' => 'required|string|max:255',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'tasks.*' => 'required|string|max:255',
            'task_start_dates.*' => 'required|date',
            'task_end_dates.*' => 'required|date|after_or_equal:task_start_dates.*',
        ]);

        // Create project
        $project = Project::create([
            'project_name' => $request->project_name,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
        ]);

        // Create tasks for the project
        $tasks = [];
        foreach ($request->tasks as $key => $taskName) {
            $tasks[] = new Task([
                'task_name' => $taskName,
                'start_date' => $request->task_start_dates[$key],
                'end_date' => $request->task_end_dates[$key],
            ]);
        }

        $project->tasks()->saveMany($tasks);

        return redirect()->route('cac.index')->with('success', 'Project created successfully!');
    }

    public function taskdestroy($taskId)
    {
        $task = Task::findOrFail($taskId);
        $projectId = $task->project_id;

        // Delete the task
        $task->delete();

        // Check if there are no more tasks in the project, then delete the project as well
        if (Task::where('project_id', $projectId)->count() === 0) {
            Project::findOrFail($projectId)->delete();
        }

        return redirect()->back()->with('success', 'Task and associated project deleted successfully!');
    }


}

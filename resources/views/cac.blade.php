@extends('layout.title')

@section('title', 'Communication & Collaboration')
@include('layout.title')

@include('layout.header')

<body>

    <!-- ======= Sidebar ======= -->
    @include('layout.sidebar')

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
 <!-- Card with an image overlay -->
 <div class="card">
    <img src="{{asset('assets/img/collab.jpg')}}" class="card-img-top" alt="...">
    <div class="card-img-overlay">
      <h5 class="card-title">Communication & Collaboration</h5>
      <p class="card-text">Effective communication and collaboration are vital components of successful project management. They ensure that team members are aligned, tasks are coordinated, and project goals are achieved efficiently. One powerful tool for facilitating communication and collaboration within a project team is the Gantt chart.</p>
   <h2 class="card-text">Gantt Chart</h2>
      <section class="section dashboard">
        <div class="container">





            <div class="row">
                @foreach ($projects as $project)
                    <div class="col-md-6">
                        <div class="card mb-4">
                            <div class="card-header">{{ $project->project_name }}</div>
                            <div class="card-body">
                                @foreach ($project->tasks as $task)
                                    <div class="task" style="margin-left: {{ $task->start_date_position }}px; width: {{ $task->duration }}px;">
                                        <span>{{ $task->task_name }} ({{ $task->start_date }} - {{ $task->end_date }})</span>
                                        <form action="{{ route('tasks.destroy', ['taskId' => $task->id, 'projectId' => $project->id]) }}" method="POST" class="delete-form">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    </div>
  </div><!-- End Card with an image overlay -->


        <!-- Card with header and footer -->
        <div class="card">
            <div class="card-body">

                <form action="{{ route('projects.store') }}" method="POST">
                    @csrf <h5 class="card-title"><button type="submit" class="btn btn-primary">Create Project</button></h5>
                    <div class="form-group">
                        <label for="project_name">Project Name:</label>
                        <input type="text" class="form-control" id="project_name" name="project_name" required>
                    </div>
                    <div class="form-group">
                        <label for="start_date">Start Date:</label>
                        <input type="date" class="form-control" id="start_date" name="start_date" required>
                    </div>
                    <div class="form-group">
                        <label for="end_date">End Date:</label>
                        <input type="date" class="form-control" id="end_date" name="end_date" required>
                    </div>

                    <div class="card-title"> <button type="button" class="btn btn-success" id="add_task">Add Task</button>
                        </div>
                    <div id="tasks">
                        <div class="form-group">
                            <input type="text" class="form-control mb-2" name="tasks[]" placeholder="Task Name" required>
                            <input type="date" class="form-control mb-2" name="task_start_dates[]" placeholder="Start Date" required>
                            <input type="date" class="form-control mb-2" name="task_end_dates[]" placeholder="End Date" required>
                        </div>
                    </div>

                </form>
            </div>
        </div><!-- End Card with header and footer -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    @include('layout.footer')

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#add_task").click(function(){
                $("#tasks").append('<div class="form-group task-item"><input type="text" class="form-control" name="tasks[]" placeholder="Task Name" required><input type="date" class="form-control mb-2" name="task_start_dates[]" placeholder="Start Date" required><input type="date" class="form-control mb-2" name="task_end_dates[]" placeholder="End Date" required><button type="button" class="btn btn-danger btn-sm delete-task">Delete</button></div>');
            });

            // Handle task deletion
            $(document).on("click", ".delete-task", function(){
                var confirmation = confirm("Are you sure you want to delete this task?");
                if (confirmation) {
                    // Proceed with deletion
                    $(this).closest('.task-item').remove();
                }
            });
        });
    </script>


</body>

</html>

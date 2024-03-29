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

        <section class="section create-project">
            <div class="container">
                <div class="row">
                    <!-- FullCalendar -->
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Calendar View</h5>
                                <div id="calendar"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Project and Task Tabs -->
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Create Project or Task</h5>
                                <!-- Tabs -->
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="project-tab" data-bs-toggle="tab" data-bs-target="#project" type="button" role="tab" aria-controls="project" aria-selected="true">Project</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="task-tab" data-bs-toggle="tab" data-bs-target="#task" type="button" role="tab" aria-controls="task" aria-selected="false">Task</button>
                                    </li>
                                </ul>
                                <!-- Tab Content -->
                                <div class="tab-content" id="myTabContent">
                                    <!-- Project Tab Pane -->
                                    <div class="tab-pane fade show active" id="project" role="tabpanel" aria-labelledby="project-tab">
                                        <form action="{{ route('projects.store') }}" method="POST">
                                            @csrf
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
                                            <button type="submit" class="btn btn-primary">Create Project</button>
                                        </form>
                                    </div>
                                    <!-- Task Tab Pane -->
                                    <div class="tab-pane fade" id="task" role="tabpanel" aria-labelledby="task-tab">
                                        <form action="{{ route('tasks.store') }}" method="POST">
                                            @csrf
                                            <div class="form-group">
                                                <label for="task_name">Task Name:</label>
                                                <input type="text" class="form-control" id="task_name" name="task_name" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="task_start_date">Start Date:</label>
                                                <input type="date" class="form-control" id="task_start_date" name="task_start_date" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="task_end_date">End Date:</label>
                                                <input type="date" class="form-control" id="task_end_date" name="task_end_date" required>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Create Task</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    @include('layout.footer')

    <!-- FullCalendar -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.10.0/fullcalendar.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                // Configuration options
                initialView: 'dayGridMonth',
                events: [
                    // Example events data
                    {
                        title: 'Project Deadline',
                        start: '2024-04-01',
                        end: '2024-04-03',
                        color: 'blue'
                    },
                    {
                        title: 'Task Due',
                        start: '2024-04-05',
                        end: '2024-04-06',
                        color: 'red'
                    }
                ]
            });
            calendar.render();
        });
    </script>

</body>

</html>

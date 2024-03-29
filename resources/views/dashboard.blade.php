@extends('layout.title')

@section('title', 'Dashboard')
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

        <section class="section dashboard">
            <div class="row">



                <!-- Recent Activity -->
                <div class="col-md-6">
                    <div class="card recent-activity">
                        <div class="card-body">
                            <h5 class="card-title">Recent Activity</h5>

                            <div class="activity-list">




                                @foreach($recentTasks as $task)
                                <div class="activity-item">
                                    <i class="bi bi-check-circle"></i>
                                    <div class="activity-info">
                                        <p>{{ $task->created_at->diffForHumans() }}</p>
                                        <p>Task: {{ $task->task_name }}</p>
                                    </div>
                                </div>
                                @endforeach

                                @foreach($recentProjects as $project)
                                <div class="activity-item">
                                    <i class="bi bi-file-earmark-bar-graph"></i>
                                    <div class="activity-info">
                                        <p>{{ $project->created_at->diffForHumans() }}</p>
                                        <p>Project: {{ $project->project_name }}</p>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div><!-- End Recent Activity -->

            </div>
        </section>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    @include('layout.footer')

</body>

</html>

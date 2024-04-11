@extends('layout.title')

@section('title', 'Communication & Collaboration')
@include('layout.title')

@include('layout.header')

<body>

    <!-- ======= Sidebar ======= -->
    @include('layout.sidebar')

    <main id="main" class="main">

        <div class="pagetitle">
            <h1><strong>Communicate and Collaborate through Chat!</strong></h1>
            <nav>
            </nav>
        </div><!-- End Page Title -->

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-primary text-white">
                            Chat
                        </div>
                        @if(session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif

                        @if(session('error'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ session('error') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif

                        <div class="card-body d-flex flex-column justify-content-between">
                            <!-- HTML Structure -->
                            <div class="chat-container flex-grow-1 overflow-auto" style="width: 100%;">
                                <div class="chat-box" id="chatBox">
                                    <!-- Messages will appear here -->
                                    @foreach($messages->reverse() as $message)
                                    <div class="message{{ $message->user->id == Auth::user()->id ? ' outgoing' : ' incoming' }}">
                                        <div class="message-details{{ $message->user->id == Auth::user()->id ? ' text-end' : '' }}">
                                            <span class="message-sender">{{ $message->user->name }}</span>
                                            <span class="message-time">{{ $message->created_at->format('M d, Y H:i A') }}</span>
                                        </div>
                                        <div class="message-content{{ $message->user->id == Auth::user()->id ? ' outgoing' : ' incoming' }}">{{ $message->message }}</div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>

                            <form action="{{ route('chat.store') }}" method="post">
                                @csrf
                                <div class="input-group">
                                    <input type="text" class="form-control chat-input" placeholder="Type your message..." id="messageInput" name="message">
                                    <button type="submit" class="btn btn-primary" id="sendMessageBtn"><i class="fas fa-paper-plane"></i></button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>


    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    @include('layout.footer')

    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- Include Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Include Font Awesome JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js"></script>
</body>

</html>

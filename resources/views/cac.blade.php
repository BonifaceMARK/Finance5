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

        <section class="section dashboard">
            <div class="row">

                <!-- Card with an image on left -->
                <div class="card mb-3">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="assets/img/card.jpg" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <h1>Chat</h1>

                            <div class="chat-container">
                                <div class="messages">
                                    <!-- Display messages here -->
                                    @foreach($messages as $message)
                                    <div class="message {{ $message['sender_id'] === $currentUser['id'] ? 'sent' : 'received' }}">
                                        <span>{{ $message['sender_name'] }}:</span> {{ $message['content'] }}
                                    </div>
                                    @endforeach
                                </div>

                                <div class="input-container">
                                    <!-- Input field to type new message -->
                                    <input type="text" id="newMessage" placeholder="Type your message..." />
                                    <button id="sendMessage">Send</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End Card with an image on left -->

            </div>
        </section>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    @include('layout.footer')

    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#sendMessage').on('click', function() {
                var newMessage = $('#newMessage').val();
                var currentUser = @json($currentUser);

                // Make an AJAX request to send a new message
                $.ajax({
                    url: '/messages',
                    type: 'POST',
                    data: {
                        sender_id: currentUser.id,
                        recipient_id: 2, // Change this to the recipient's ID
                        content: newMessage,
                        sender_name: currentUser.name,
                        recipient_name: 'Recipient Name' // Change this to the recipient's name
                    },
                    success: function(response) {
                        // Add the new message to the messages container
                        var message = '<div class="message sent"><span>' + currentUser.name + ':</span> ' + newMessage + '</div>';
                        $('.messages').append(message);
                        // Clear the input field
                        $('#newMessage').val('');
                    },
                    error: function(xhr, status, error) {
                        console.error('Error sending message:', error);
                    }
                });
            });
        });
    </script>

</body>

</html>

@extends('layout.title')

@section('title', 'Market Place')
@include('layout.title')
@include('layout.header')

<body>

    <!-- ======= Sidebar ======= -->
    @include('layout.sidebar')

    <main id="main" class="main">


        <div class="pagetitle">
            <h1><STRong>Buy Items in the MarketPlace !</STRong></h1>
            <nav>
                <div class="container">
                    <h1>Welcome to the Marketplace</h1>
                    <div class="row">
                        @foreach($items as $index => $item)
                        <div class="col-md-4 mb-4">
                            <div class="card">
                                <img src="{{ $item['image_url'] }}" class="card-img-top" alt="{{ $item['title'] }}">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $item['title'] }}</h5>
                                    <p class="card-text">{{ $item['description'] }}</p>
                                    <p class="card-text"><strong>Price:</strong> ${{ $item['price'] }}</p>
                                    <p class="card-text"><strong>Seller:</strong> {{ $item['seller'] }}</p>
                                    <!-- Ensure each button has a unique ID for data-bs-target -->
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paymentModal{{$index}}">
                                        <i class="bi bi-credit-card"></i> Buy
                                    </button>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </nav>
        </div><!-- End Page Title -->
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
        </div>
    @endif
    @if(session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('error') }}
        </div>
    @endif

    @foreach($items as $index => $item)
    <div class="modal fade" id="paymentModal{{$index}}" tabindex="-1" aria-labelledby="transactionModalLabel{{$index}}" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="transactionModalLabel{{$index}}">Buy {{$item['title']}}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('transactions-report.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="productName{{$index}}" class="form-label">Product or Item</label>
                            <input type="text" class="form-control" id="productName{{$index}}" name="productName" value="{{$item['title']}}" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="transactionName{{$index}}" class="form-label">Transaction Name</label>
                            <input type="text" class="form-control" id="transactionName{{$index}}" name="transactionName" required>
                        </div>
                        <div class="mb-3">
                            <label for="paymentMethod{{$index}}" class="form-label">Payment Method</label>
                            <select class="form-select" id="paymentMethod{{$index}}" name="paymentMethod" required>
                                <option value="">Select Payment Method</option>
                                <option value="Credit Card">Credit Card</option>
                                <option value="Debit Card">Debit Card</option>
                                <option value="Digital Wallet">Digital Wallet</option>
                                <option value="Bank Transfer">Bank Transfer</option>
                                <!-- Add more payment methods if needed -->
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="cardType{{$index}}" class="form-label">Card Type</label>
                            <select class="form-select" id="cardType{{$index}}" name="cardType" required>
                                <option value="">Select Card Type</option>
                                <option value="MasterCard">MasterCard</option>
                                <option value="Visa">Visa</option>
                                <option value="Aub">Aub</option>
                                <option value="American">American</option>
                                <option value="Gcash">Gcash</option>
                                <option value="Paypal">Paypal</option>
                                <!-- Add more card types if needed -->
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="transactionType{{$index}}" class="form-label">Transaction Type</label>
                            <select class="form-select" id="transactionType{{$index}}" name="transactionType" required>
                                <option value="">Select Transaction Type</option>
                                <option value="Sale">Sale</option>
                                <option value="Purchase">Purchase</option>
                                <option value="Refund">Refund</option>
                                <!-- Add more transaction types if needed -->
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="transactionAmount{{$index}}" class="form-label">Amount</label>
                            <input type="number" class="form-control" id="transactionAmount{{$index}}" name="transactionAmount" required>
                        </div>
                        <div class="mb-3">
                            <label for="transactionDate{{$index}}" class="form-label">Date</label>
                            <input type="date" class="form-control" id="transactionDate{{$index}}" name="transactionDate" required>
                        </div>
                        <div class="mb-3">
                            <label for="description{{$index}}" class="form-label">Description</label>
                            <textarea class="form-control" id="description{{$index}}" name="description" rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                            <input type="hidden" class="form-control" id="transactionStatus{{$index}}" name="transactionStatus" value="Pending" readonly>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <!-- Add a Cancel button -->
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endforeach






    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    @include('layout.footer')

    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- Include Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>

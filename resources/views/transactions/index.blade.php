@extends('layout.title')

@section('title', 'Payment Gateways')
@include('layout.title')

@include('layout.header')

@include('layout.sidebar')
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Payment Gateways</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('transactions.index') }}">Home</a></li>
                <li class="breadcrumb-item active">All Transactions</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="container">
            <div class="card">
                <!-- Button trigger modal -->



                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Payment Gateways</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Choose your payment method</h6>
                        <p class="card-text">Payment gateways are essential components of modern e-commerce and online transactions, facilitating secure and seamless monetary exchanges between buyers and sellers over the internet. These gateways serve as intermediaries between the merchant's website or application and the financial institutions that handle the transaction processing.</p>
                        <div class="row">
                            <!-- Payment Options -->
                            <div class="col-md-12 mb-3">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <h5 class="card-title">Make Payment</h5>
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paymentModal">
                                            <i class="bi bi-credit-card"></i> Pay
                                        </button>
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paymentviewModal">
                                            <i class="bi bi-view-list"></i> View Payments
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!-- End Payment Options -->
<!-- Payment Methods -->
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-3 mb-3">
                <div class="card">
                    <div class="card-body text-center">
                        <i class="bi bi-credit-card-2-back fs-2"></i>
                        <h5 class="card-title">Credit Card</h5>
                        <p class="card-text">Securely pay with your credit card.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card">
                    <div class="card-body text-center">
                        <i class="bi bi-credit-card-2-front fs-2"></i>
                        <h5 class="card-title">Debit Card</h5>
                        <p class="card-text">Use your debit card for quick payments.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card">
                    <div class="card-body text-center">
                        <i class="bi bi-credit-card-fill fs-2"></i>
                        <h5 class="card-title">Digital Wallets</h5>
                        <p class="card-text">Conveniently pay with digital wallets like PayPal.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card">
                    <div class="card-body text-center">
                        <i class="bi bi-credit-card fs-2"></i>
                        <h5 class="card-title">Bank Transfer</h5>
                        <p class="card-text">Transfer funds directly from your bank account.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Payment Methods -->


                            <!-- Payment Methods -->
                            <div class="col-md-12">
                                <div class="row justify-content-center">
                                    <div class="col-lg-3 col-md-4 mb-3">
                                        <div class="card">
                                            <div class="card-body text-center">
                                                <h5 class="card-title">Master Card</h5>
                                                <img src="{{ asset('assets/img/master.png') }}" alt="MasterCard Logo" class="img-fluid">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 mb-3">
                                        <div class="card">
                                            <div class="card-body text-center">
                                                <h5 class="card-title">Visa</h5>
                                                <img src="{{ asset('assets/img/visa.png') }}" alt="Visa Logo" class="img-fluid">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 mb-3">
                                        <div class="card">
                                            <div class="card-body text-center">
                                                <h5 class="card-title">Aub</h5>
                                                <img src="{{ asset('assets/img/aub.png') }}" alt="Aub Logo" class="img-fluid">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 mb-3">
                                        <div class="card">
                                            <div class="card-body text-center">
                                                <h5 class="card-title">American Express</h5>
                                                <img src="{{ asset('assets/img/express.png') }}" alt="American Express Logo" class="img-fluid">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 mb-3">
                                        <div class="card">
                                            <div class="card-body text-center">
                                                <h5 class="card-title">Gcash</h5>
                                                <img src="{{ asset('assets/img/gcash.png') }}" alt="Gcash" class="img-fluid">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 mb-3">
                                        <div class="card">
                                            <div class="card-body text-center">
                                                <h5 class="card-title">Paypal</h5>
                                                <img src="{{ asset('assets/img/paypal.jpg') }}" alt="Paypal" class="img-fluid">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Payment Methods -->
                        </div>
                    </div>
                </div>




                <!-- Card with an image on bottom -->
         <div class="card">


          </div><!-- End Card with an image on bottom -->
            </div>


        </div>

        <div class="modal fade" id="paymentviewModal" tabindex="-1" aria-labelledby="transactionModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable modal-xl">
                <div class="modal-content">
                    <div class="modal-header bg-primary text-white">
                        <h5 class="modal-title" id="transactionModalLabel">Invoice Receipt</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            @if ($transactionsReports->isEmpty())
                                <p>No transactions reports found.</p>
                            @else
                                @foreach ($transactionsReports as $report)
                                    <div class="card mb-3">
                                        <div class="card-body">
                                            <h5 class="card-title">Transaction ID: {{ $report->id }}</h5>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <p><strong>Product Name:</strong> {{ $report->productName }}</p>
                                                    <p><strong>Transaction Name:</strong> {{ $report->transactionName }}</p>
                                                    <p><strong>Payment Method:</strong> {{ $report->paymentMethod }}</p>
                                                    <p><strong>Card Type:</strong> {{ $report->cardType }}</p>
                                                    <p><strong>Transaction Type:</strong> {{ $report->transactionType }}</p>
                                                </div>
                                                <div class="col-md-6">
                                                    <p><strong>Amount:</strong> ${{ $report->transactionAmount }}</p>
                                                    <p><strong>Date:</strong> {{ $report->transactionDate }}</p>
                                                    <p><strong>Description:</strong> {{ $report->description }}</p>
                                                    <p><strong>Status:</strong> {{ $report->transactionStatus }}</p>
                                                    <p><strong>Reason for Cancellation:</strong> {{ $report->reasonForCancellation }}</p>
                                                </div>
                                            </div>
                                            <div class="text-end mt-3">
                                                <a href="{{ route('transactions.cancel-form', $report->id) }}" class="btn btn-danger">Cancel Transaction</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>







<section class="section dashboard">
    <div class="row">
        <div class="col-lg-12">

<!-- Modal -->
<div class="modal fade" id="paymentModal" tabindex="-1" aria-labelledby="transactionModalLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="transactionModalLabel">Payment Form</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{ route('transactions-report.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="productName" class="form-label">Product or Item</label>
                    <input type="text" class="form-control" id="productName" name="productName" required>
                </div>
                <div class="mb-3">
                    <label for="transactionName" class="form-label">Transaction Name</label>
                    <input type="text" class="form-control" id="transactionName" name="transactionName" required>
                </div>
                <div class="mb-3">
                    <label for="paymentMethod" class="form-label">Payment Method</label>
                    <select class="form-select" id="paymentMethod" name="paymentMethod" required>
                        <option value="">Select Payment Method</option>
                        <option value="Credit Card">Credit Card</option>
                        <option value="Debit Card">Debit Card</option>
                        <option value="Digital Wallet">Digital Wallet</option>
                        <option value="Bank Transfer">Bank Transfer</option>
                        <!-- Add more payment methods if needed -->
                    </select>
                </div>
                <div class="mb-3">
                    <label for="cardType" class="form-label">Card Type</label>
                    <select class="form-select" id="cardType" name="cardType" required>
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
                    <label for="transactionType" class="form-label">Transaction Type</label>
                    <select class="form-select" id="transactionType" name="transactionType" required>
                        <option value="">Select Transaction Type</option>
                        <option value="Sale">Sale</option>
                        <option value="Purchase">Purchase</option>
                        <option value="Refund">Refund</option>
                        <!-- Add more transaction types if needed -->
                    </select>
                </div>
                <div class="mb-3">
                    <label for="transactionAmount" class="form-label">Amount</label>
                    <input type="number" class="form-control" id="transactionAmount" name="transactionAmount" required>
                </div>
                <div class="mb-3">
                    <label for="transactionDate" class="form-label">Date</label>
                    <input type="date" class="form-control" id="transactionDate" name="transactionDate" required>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <label for="transactionStatus" class="form-label">Status</label>
                    <input type="text" class="form-control" id="transactionStatus" name="transactionStatus" value="Pending" readonly>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <!-- Add a Cancel button -->
            </form>



        </div>
    </div>
</div>
</div>





                </div>
            </div>
    </section>
</main>
<script>
    // Function to update real-time dates
    function updateRealTimeDates() {
        // Select all elements with class "real-time-date"
        var dateElements = document.querySelectorAll('.real-time-date');

        // Loop through each element
        dateElements.forEach(function(element) {
            // Get the current date and time
            var currentDate = new Date();
            // Format the date and time according to your requirement
            var formattedDate = currentDate.toISOString().slice(0, 10); // YYYY-MM-DD

            // Update the content of the element with the formatted date
            element.innerText = formattedDate;
        });
    }

    // Call the function initially to update the dates immediately
    updateRealTimeDates();

    // Set interval to update the dates every 1 second (1000 milliseconds)
    setInterval(updateRealTimeDates, 1000);
</script>
<script>
    // Function to update real-time date for input[type=date]
    function updateRealTimeDate() {
        // Get the current date and format it to YYYY-MM-DD
        var currentDate = new Date();
        var formattedDate = currentDate.toISOString().slice(0, 10);

        // Set the value attribute of the input field to the formatted date
        document.getElementById('transactionDate').value = formattedDate;
    }

    // Call the function initially to set the date immediately
    updateRealTimeDate();

    // Set interval to update the date every 1 second (1000 milliseconds)
    setInterval(updateRealTimeDate, 1000);
</script>

@include('layout.footer')

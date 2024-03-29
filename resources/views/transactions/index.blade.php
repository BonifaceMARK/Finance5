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
          <h6 class="card-subtitle mb-2 text-muted">Choose your payments</h6>
          <p class="card-text">Payment gateways are essential components of modern e-commerce and online transactions, facilitating secure and seamless monetary exchanges between buyers and sellers over the internet. These gateways serve as intermediaries between the merchant's website or application and the financial institutions that handle the transaction processing.</p>
          <!-- Card with an image on bottom -->
          <div class="row">
            <!-- Card for making payment -->
            <div class="col card-body">
                <h5 class="card-title">Pay</h5>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paymentModal">
                    <i class="bi bi-credit-card"></i> Pay
                </button>
                <button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#paymentviewModal">
                    <i class="bi bi-view-list"></i> Payments
                </button>

            </div>

            </div>
        </div>



        <div class="row">
            <!-- Card with MasterCard -->
            <div class="col-lg-2">
                <div class="card">
                    <div class="card-body text-center">
                        <h5 class="card-title">Master Card</h5>
                        <img src="{{ asset('assets/img/master.png') }}" alt="MasterCard Logo" class="img-fluid">
                    </div>
                </div><!-- End Card with MasterCard -->
            </div>

            <!-- Card with Visa -->
            <div class="col-lg-2">
                <div class="card">
                    <div class="card-body text-center">
                        <h5 class="card-title">Visa</h5>
                        <img src="{{ asset('assets/img/visa.png') }}" alt="Visa Logo" class="img-fluid">
                    </div>
                </div><!-- End Card with Visa -->
            </div>

            <div class="col-lg-2">
                <div class="card">
                    <div class="card-body text-center">
                        <h5 class="card-title">Aub</h5>
                        <img src="{{ asset('assets/img/aub.png') }}" alt="Visa Logo" class="img-fluid">
                    </div>
                </div><!-- End Card with Visa -->
            </div>


            <!-- Card with American Express -->
            <div class="col-lg-2">
                <div class="card">
                    <div class="card-body text-center">
                        <h5 class="card-title">American Express</h5>
                        <img src="{{ asset('assets/img/express.png') }}" alt="American Express Logo" class="img-fluid">
                    </div>
                </div><!-- End Card with American Express -->
            </div>

            <!-- Card with Discover -->
            <div class="col-lg-2">
                <div class="card">
                    <div class="card-body text-center">
                        <h5 class="card-title">Gcash</h5>
                        <img src="{{ asset('assets/img/gcash.png') }}" alt="Gcash" class="img-fluid">
                    </div>
                </div><!-- End Card with Discover -->
            </div>

            <!-- Card with Paypal -->
            <div class="col-lg-2">
                <div class="card">
                    <div class="card-body text-center">
                        <h5 class="card-title">Paypal</h5>
                        <img src="{{ asset('assets/img/paypal.jpg') }}" alt="paypal" class="img-fluid">
                    </div>
                </div><!-- End Card with Paypal -->
            </div>
        </div><!-- End row -->


    </div>
</div><!-- End Card with an image on bottom -->




                <!-- Card with an image on bottom -->
         <div class="card">


          </div><!-- End Card with an image on bottom -->
            </div>


        </div>

<!-- Payment View Modal -->
<div class="modal fade" id="paymentviewModal" tabindex="-1" aria-labelledby="transactionModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="transactionModalLabel">Payments</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="card">
                        <div class="container">
                            @if ($transactionsReports->isEmpty())
                                <p>No transactions reports found.</p>
                            @else
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th style="background-color: lightblue; padding: 10px;">ID</th>
                                                <th style="background-color: lightblue; padding: 10px;">Product Name</th>
                                                <th style="background-color: lightblue; padding: 10px;">Name</th>
                                                <th style="background-color: lightblue; padding: 10px;">Type</th>
                                                <th style="background-color: lightblue; padding: 10px;">Amount</th>
                                                <th style="background-color: lightblue; padding: 10px;">Date</th>
                                                <th style="background-color: lightblue; padding: 10px;">Status</th>
                                                <th style="background-color: lightblue; padding: 10px;">Reason for Cancellation</th>
                                                <th style="background-color: lightblue; padding: 10px;">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($transactionsReports as $report)
                                                <tr>
                                                    <td>{{ $report->id }}</td>
                                                    <td>{{ $report->productName }}</td>
                                                    <td>{{ $report->transactionName }}</td>
                                                    <td>{{ $report->transactionType }}</td>
                                                    <td>{{ $report->transactionAmount }}</td>
                                                    <td>{{ $report->transactionDate }}</td>
                                                    <td>{{ $report->transactionStatus }}</td>
                                                    <td>{{ $report->reasonForCancellation }}</td>
                                                    <td>
                                                         <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#invoiceModal">
                    Open Invoice Modal
                </button>
                                                        <a href="{{ route('transactions.cancel-form', $report->id) }}" class="btn btn-danger">Cancel Transaction</a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            @endif
                        </div>
                    </div>
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
                    <label for="transactionType" class="form-label">Type</label>
                    <select class="form-select" id="transactionType" name="transactionType" required>
                        <option value="">Select Transaction Type</option>
                        <option value="MasterCard">MasterCard</option>
                        <option value="Visa">Visa</option>
                        <option value="Aub">Aub</option>
                        <option value="American">American</option>
                        <option value="Gcash">Gcash</option>
                        <option value="Paypal">Paypal</option>
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
    </section>
    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-12">


                <!-- Modal -->
                <div class="modal fade" id="invoiceModal" tabindex="-1" aria-labelledby="invoiceModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="invoiceModalLabel">Invoice</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="card" id="invoiceCard">
                                    <div class="card-header">
                                        <h2 class="text-center">Invoice</h2>
                                    </div>
                                    <div class="card-body">
                                        <!-- Your invoice content here -->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h4>From:</h4>
                                                <address>
                                                    Your Company Name<br>
                                                    Address Line 1<br>
                                                    Address Line 2<br>
                                                    City, State, Zip<br>
                                                    Phone: (123) 456-7890<br>
                                                    Email: info@example.com
                                                </address>
                                            </div>
                                            <div class="col-md-6 text-md-end">
                                                <h4>To:</h4>
                                                <address>
                                                    Customer Name<br>
                                                    Address Line 1<br>
                                                    Address Line 2<br>
                                                    City, State, Zip<br>
                                                    Phone: (123) 456-7890<br>
                                                    Email: customer@example.com
                                                </address>
                                                <p><strong>Invoice Date:</strong> {{ $transaction->transactionDate }}</p>
                                                <p><strong>Invoice Number:</strong> #{{ $transaction->id }}</p>
                                            </div>
                                        </div>
                                        <div class="table-responsive mt-4">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>Description</th>
                                                        <th>Quantity</th>
                                                        <th>Unit Price</th>
                                                        <th>Total</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>{{ $transaction->productName }}</td>
                                                        <td>1</td>
                                                        <td>{{ $transaction->transactionAmount }}</td>
                                                        <td>{{ $transaction->transactionAmount }}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="row mt-4">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Subtotal:</label>
                                                    <div class="form-control">{{ $transaction->transactionAmount }}</div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 text-md-end">
                                                <div class="mb-3">
                                                    <label class="form-label">Total:</label>
                                                    <div class="form-control">{{ $transaction->transactionAmount }}</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button id="printBtn" class="btn btn-primary"><i class="bi bi-printer-fill"></i> Print Invoice</button>
                                <a href="{{ route('transactions.index') }}" class="btn btn-secondary">Back</a>
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

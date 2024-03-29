@extends('layout.title')

@section('title', 'Payment Gateways')
@include('layout.title')

@include('layout.header')

<body>

@include('layout.sidebar')

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Payment Gateways</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('payments.index') }}">Home</a></li>
                <li class="breadcrumb-item active">All Transactions</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Payment Gateways</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Choose your payments</h6>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paymentModal">
                        <i class="bi bi-credit-card"></i> Register
                    </button>
                    <p class="card-text">Payment gateways are essential components of modern e-commerce and online transactions, facilitating secure and seamless monetary exchanges between buyers and sellers over the internet. These gateways serve as intermediaries between the merchant's website or application and the financial institutions that handle the transaction processing.</p>
                </div>
            </div>

            <div class="row mt-4">
                <!-- PayPal Card -->
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body text-center">
                            <h5 class="card-title">PayPal</h5>
                            <img src="{{ asset('assets/img/paypal.jpg') }}" alt="PayPal Logo" class="img-fluid mb-3">
                            <p class="card-text">Register your PayPal account to make payments online securely and conveniently.</p>

                        </div>
                    </div>
                </div>

                <!-- Visa Card -->
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body text-center">
                            <h5 class="card-title">Visa</h5>
                            <img src="{{ asset('assets/img/visa.png') }}" alt="Visa Logo" class="img-fluid mb-3">
                            <p class="card-text">Register your Visa card to make payments online and in-store globally.</p>

                        </div>
                    </div>
                </div>

                <!-- GCash Card -->
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body text-center">
                            <h5 class="card-title">GCash</h5>
                            <img src="{{ asset('assets/img/gcash.png') }}" alt="GCash Logo" class="img-fluid mb-3">
                            <p class="card-text">Register your GCash account to make payments and transfers with ease.</p>

                        </div>
                    </div>
                </div>

                <!-- Hello Money Card -->
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body text-center">
                            <h5 class="card-title">Hello Money</h5>
                            <img src="{{ asset('assets/img/hello_money.png') }}" alt="Hello Money Logo" class="img-fluid mb-3">
                            <p class="card-text">Register your Hello Money account to enjoy financial services and payments.</p>

                        </div>
                    </div>
                </div>

                <!-- AUB Card -->
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body text-center">
                            <h5 class="card-title">AUB</h5>
                            <img src="{{ asset('assets/img/aub.png') }}" alt="AUB Logo" class="img-fluid mb-3">
                            <p class="card-text">Register your AUB card to make secure online payments and transactions.</p>

                        </div>
                    </div>
                </div>

                <!-- PayMaya Card -->
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body text-center">
                            <h5 class="card-title">PayMaya</h5>
                            <img src="{{ asset('assets/img/paymaya.png') }}" alt="PayMaya Logo" class="img-fluid mb-3">
                            <p class="card-text">Register your PayMaya account to experience convenient cashless payments.</p>

                        </div>
                    </div>
                </div>

                <!-- Card for viewing payments -->
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body text-center">
                            <h5 class="card-title">View Card Registered</h5>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paymentviewModal">
                                <i class="bi bi-view-list"></i> Cards
                            </button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

</main>

<!-- Payment Modal -->
<div class="modal fade" id="paymentModal" tabindex="-1" aria-labelledby="paymentModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="paymentModalLabel">Add a Payment Method</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('payment.store') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <!-- Payment form fields -->
                    <div class="mb-3">
                        <label for="payment_method" class="form-label">Select Payment Method</label>
                        <select class="form-select" id="payment_method" name="payment_method" required>
                            <option value="">Select Payment Method</option>
                            <option value="Credit Card">Credit Card</option>
                            <option value="PayPal">PayPal</option>
                            <option value="Visa">Visa</option>
                            <option value="GCash">GCash</option>
                            <option value="Hello Money">Hello Money</option>
                            <option value="AUB">AUB</option>
                            <option value="PayMaya">PayMaya</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="card_number" class="form-label">Card Number</label>
                        <input type="text" class="form-control" id="card_number" name="card_number" required>
                    </div>
                    <div class="mb-3">
                        <label for="cvv" class="form-label">CVV</label>
                        <input type="text" class="form-control" id="cvv" name="cvv" required>
                    </div>
                    <div class="mb-3">
                        <label for="name_on_card" class="form-label">Name on Card</label>
                        <input type="text" class="form-control" id="name_on_card" name="name_on_card" required>
                    </div>
                </div>
                <div class="mb-3" id="expiry_date_wrapper" style="display: none;">
                    <label for="expiry_date" class="form-label">Expiry Date</label>
                    <input type="date" class="form-control" id="expiry_date" name="expiry_date" required disabled>
                </div>




                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Register</button>
                </div>
            </form>
        </div>
    </div>
</div>



  <!-- View Payments Modal -->
<div class="modal fade" id="paymentviewModal" tabindex="-1" aria-labelledby="paymentviewModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="paymentviewModalLabel">View Cards</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Place your content here -->
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Card Number</th>
                            <th>Expiry Date</th>
                            <th>CVV</th>
                            <th>Name on Card</th>
                            <th>Payment Method</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Loop through payments and display each payment -->
                        @foreach($payments as $payment)
                        <tr>
                            <td>{{ $payment->id }}</td>
                            <td>{{ $payment->card_number }}</td>
                            <td>{{ $payment->expiry_date }}</td>
                            <td>{{ $payment->cvv }}</td>
                            <td>{{ $payment->name_on_card }}</td>
                            <td>{{ $payment->payment_method }}</td>
                            <td>
                                <!-- Add a cancel button for each payment -->
                                <form action="{{ route('payments.cancel', $payment->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Cancel</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>



@include('layout.footer')

<!-- Cancel Payment Modal -->
<div class="modal fade" id="cancelPaymentModal" tabindex="-1" aria-labelledby="cancelPaymentModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cancelPaymentModalLabel">Cancel Payment</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to cancel this payment?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <form id="cancelPaymentForm" action="{{ route('payments.cancel', ['payment' => $payment->id]) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Confirm Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        // Handle click event for cancel payment button
        $('.btn-danger').click(function(event) {
            event.preventDefault();
            var form = $(this).closest('form');
            $('#cancelPaymentForm').attr('action', form.attr('action'));
            $('#cancelPaymentModal').modal('show');
        });
    });

</script>
<script>
    // Function to show the expiry date input when other fields are filled
    function showExpiryDate() {
        var cardNumber = document.getElementById("card_number").value;
        var cvv = document.getElementById("cvv").value;
        var nameOnCard = document.getElementById("name_on_card").value;

        // Check if all other fields are filled
        if (cardNumber && cvv && nameOnCard) {
            document.getElementById("expiry_date_wrapper").style.display = "block";
            document.getElementById("expiry_date").readOnly = false;

            // Calculate current date and set the minimum and maximum date for expiry date
            var currentDate = new Date();
            var minDate = new Date(currentDate);
            minDate.setFullYear(minDate.getFullYear() + 3); // Set minimum date to 3 years from now
            var maxDate = new Date(currentDate);
            maxDate.setFullYear(maxDate.getFullYear() + 6); // Set maximum date to 6 years from now

            // Format dates as YYYY-MM-DD for HTML date input
            var minDateFormatted = minDate.toISOString().split('T')[0];
            var maxDateFormatted = maxDate.toISOString().split('T')[0];

            // Set the minimum and maximum date attributes for the input field
            document.getElementById("expiry_date").setAttribute("min", minDateFormatted);
            document.getElementById("expiry_date").setAttribute("max", maxDateFormatted);
        }
    }

    // Event listeners to call the function when other fields change
    document.getElementById("card_number").addEventListener("input", showExpiryDate);
    document.getElementById("cvv").addEventListener("input", showExpiryDate);
    document.getElementById("name_on_card").addEventListener("input", showExpiryDate);
</script>


</body>

</html>

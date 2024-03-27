@extends('layout.title')

@section('title', 'Cancel')

@include('layout.header')

@include('layout.sidebar')

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Cancel Payment</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Payment Gateways</a></li>
                <li class="breadcrumb-item active">Cancel Payment</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-12">
                <form method="POST" action="{{ route('transactions.process-cancellation', $transactionsReports->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="modal-header">
                        <h5 class="modal-title" id="cancelModalLabel"><strong>Cancel Transaction</strong></h5>
                    </div>
                    <div class="modal-body">
                        <p>Are you sure you want to cancel this transaction?</p>
                        <div class="form-group">
                            <label for="reason">Reason for Cancellation:</label>
                            <textarea class="form-control" id="reason" name="reason" rows="3" required></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button id="confirmCancellationBtn" type="submit" class="btn btn-danger">Confirm Cancellation</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</main>

@include('layout.footer')

<script>
    // Add event listener to the button
    document.getElementById('confirmCancellationBtn').addEventListener('click', function() {
        // Submit the form
        document.getElementById('cancelForm').submit();

        // Redirect to 'transactions.index' route
        window.location.href = "{{ route('transactions.index') }}";
    });
</script>

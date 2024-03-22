@extends('layout.title')

@section('title', 'Transactions')
@include('layout.title')

@include('layout.header')

@include('layout.sidebar')
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Create Transaction</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('transactions.index') }}">Home</a></li>
                <li class="breadcrumb-item active">Create Transaction</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <!-- Form for creating a new transaction -->
                        <form action="{{ route('transactions.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="transactionName" class="form-label">Name</label>
                                <input type="text" class="form-control" id="transactionName" name="transactionName" required>
                            </div>
                            <div class="mb-3">
                                <label for="transactionType" class="form-label">Type</label>
                                <input type="text" class="form-control" id="transactionType" name="transactionType" required>
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
                                <input type="text" class="form-control" id="transactionStatus" name="transactionStatus" required>
                            </div>
                            <div class="mb-3">
                                <label for="reasonForCancellation" class="form-label">Reason for Cancellation</label>
                                <input type="text" class="form-control" id="reasonForCancellation" name="reasonForCancellation">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

@include('layout.footer')

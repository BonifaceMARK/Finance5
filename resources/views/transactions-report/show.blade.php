@extends('layout.title')

@section('title', 'Transactions')
@include('layout.title')

@include('layout.header')

@include('layout.sidebar')
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Transaction Details</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('transactions-report.index') }}">All Transactions</a></li>
                <li class="breadcrumb-item active">Transaction Details</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h2>Transaction Details</h2>
                        <dl class="row">
                            <dt class="col-sm-3">ID:</dt>
                            <dd class="col-sm-9">{{ $transaction->id }}</dd>

                            <dt class="col-sm-3">Name:</dt>
                            <dd class="col-sm-9">{{ $transaction->transactionName }}</dd>

                            <dt class="col-sm-3">Type:</dt>
                            <dd class="col-sm-9">{{ $transaction->transactionType }}</dd>

                            <dt class="col-sm-3">Amount:</dt>
                            <dd class="col-sm-9">{{ $transaction->transactionAmount }}</dd>

                            <dt class="col-sm-3">Date:</dt>
                            <dd class="col-sm-9">{{ $transaction->transactionDate }}</dd>

                            <dt class="col-sm-3">Status:</dt>
                            <dd class="col-sm-9">{{ $transaction->transactionStatus }}</dd>

                            <dt class="col-sm-3">Reason for Cancellation:</dt>
                            <dd class="col-sm-9">{{ $transaction->reasonForCancellation ?? 'N/A' }}</dd>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

@include('layout.footer')

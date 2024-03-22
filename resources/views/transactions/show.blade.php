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
                <li class="breadcrumb-item"><a href="{{ route('transactions.index') }}">Home</a></li>
                <li class="breadcrumb-item active">Transaction Details</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Transaction ID: {{ $transaction->id }}</h5>
                    <p class="card-text"><strong>Total:</strong> {{ $transaction->total }}</p>
                    <p class="card-text"><strong>Token:</strong> {{ $transaction->token }}</p>
                    <p class="card-text"><strong>Contact Name:</strong> {{ $transaction->contact_name }}</p>
                    <p class="card-text"><strong>Token Card Type:</strong> {{ $transaction->token_card_type }}</p>
                    <p class="card-text"><strong>Phone:</strong> {{ $transaction->phone }}</p>
                    <p class="card-text"><strong>Email:</strong> {{ $transaction->email }}</p>
                    <p class="card-text"><strong>Address:</strong> {{ $transaction->address }}</p>
                    <p class="card-text"><strong>Description:</strong> {{ $transaction->description }}</p>
                    <a href="{{ route('transactions.index') }}" class="btn btn-primary">Back to Transactions</a>
                </div>
            </div>
        </div>
    </section>
</main>



@include('layout.footer')

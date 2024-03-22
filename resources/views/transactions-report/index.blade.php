
@extends('layout.title')

@section('title', 'Transactions')
@include('layout.title')

@include('layout.header')


@include('layout.sidebar')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Transactions</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Transactions</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

<div class="container">
    <div class="card">
        <div class="card-header">
            <h1 class="card-title">All Transactions</h1>
        </div>
        <div class="card-body">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Type</th>
                        <th>Amount</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($transactions as $transaction)
                        <tr>
                            <td>{{ $transaction->id }}</td>
                            <td>{{ $transaction->transactionName }}</td>
                            <td>{{ $transaction->transactionType }}</td>
                            <td>{{ $transaction->transactionAmount }}</td>
                            <td>{{ $transaction->transactionDate }}</td>
                            <td>{{ $transaction->transactionStatus }}</td>
                            <td>
                                <a href="{{ route('transactions.show', $transaction->id) }}" class="btn btn-info">View</a>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            <a href="{{ route('transactions.create') }}" class="btn btn-success">Create Transaction</a>
        </div>
    </div>
</div>

</div>
</section>

</main><!-- End #main -->

@include('layout.footer')

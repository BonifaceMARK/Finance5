@extends('layout.title')

@section('title', 'Transactions')
@include('layout.title')

@include('layout.header')

@include('layout.sidebar')
<main id="main" class="main">
    <div class="pagetitle">
        <h1>All Transactions</h1>
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
                <div class="card-body">
                    <h1 class="card-title">All Transactions</h1>
                    <a href="{{ route('transactions.create') }}" class="btn btn-primary mb-3">Create New Transaction</a>
                    @if ($transactions->isEmpty())
                        <div class="alert alert-info" role="alert">
                            No transactions found.
                        </div>
                    @else
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Total</th>
                                        <th>Contact Name</th>
                                        <th>Email</th>
                                        <th>Token Card Type</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($transactions as $transaction)
                                        <tr>
                                            <td>{{ $transaction->id }}</td>
                                            <td>{{ $transaction->total }}</td>
                                            <td>{{ $transaction->contact_name }}</td>
                                            <td>{{ $transaction->email }}</td>
                                            <td>{{ $transaction->token_card_type }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Phone</th>
                                        <th>Token</th>
                                        <th>Address</th>
                                        <th>Description</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($transactions as $transaction)
                                        <tr>
                                            <td>{{ $transaction->phone }}</td>
                                            <td>{{ $transaction->token }}</td>
                                            <td>{{ $transaction->address }}</td>
                                            <td>{{ $transaction->description }}</td>
                                            <td>
                                                <a href="{{ route('transactions.show', $transaction->id) }}" class="btn btn-info">View</a>
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
    </section>
</main>

@include('layout.footer')

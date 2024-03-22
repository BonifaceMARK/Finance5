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
    @if(session('success'))
    <div class="alert alert-success">
        <ul>
            @foreach(session('success') as $message)
                <li>{{ $message }}</li>
            @endforeach
        </ul>
    </div>
@endif
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

</main>


@include('layout.footer')

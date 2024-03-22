
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

<!-- Button to trigger modal -->
  <!-- Card with an image on left -->
  <div class="card mb-3">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="assets/img/card.jpg" class="img-fluid rounded-start" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">Card with an image on left</h5>
          <p class="card-text">
            <div class="col">

                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#transactionModal">
                    Open Transaction Modal
                </button>
                <a href="{{ route('transactions-report.create') }}" class="btn btn-success">Create Transaction</a>
            </div>        </div>
      </div>
    </div>
  </div><!-- End Card with an image on left -->





</div>
</section>

</main><!-- End #main -->
<!-- Your HTML code -->



@include('layout.footer')

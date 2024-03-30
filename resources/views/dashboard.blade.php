@extends('layout.title')

@section('title', 'Dashboard')
@include('layout.title')

@include('layout.header')
<body>

  <!-- ======= Sidebar ======= -->
@include('layout.sidebar')

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="card mb-4">
              <div class="card-header">
                <h5 class="card-title mb-0">Recent Activity</h5>
              </div>
              <div class="card-body">
                <div class="list-group">
                  <!-- Recent Chat Messages -->
                  @foreach($recentChatMessages as $message)
                  <div class="list-group-item border-start-primary">
                    <div class="d-flex justify-content-between align-items-center">
                      <div>
                        <span class="badge bg-primary me-2">Chat Message</span>
                        <span>{{ $message->created_at->diffForHumans() }}</span>
                      </div>
                      <div>
                        <span>{{ $message->message }}</span>
                        <span class="text-muted ms-2">({{ $message->department }})</span>
                      </div>
                    </div>
                  </div>
                  @endforeach

                  <!-- Recent PFRS Checklist Items -->
                  @foreach($recentPFRSChecklistItems as $item)
                  <div class="list-group-item border-start-success">
                    <div class="d-flex justify-content-between align-items-center">
                      <div>
                        <span class="badge bg-success me-2">PFRS Checklist</span>
                        <span>{{ $item->created_at->diffForHumans() }}</span>
                      </div>
                      <div>
                        <span>{{ $item->notes }}</span>
                        <span class="text-muted ms-2">({{ $item->department }})</span>
                      </div>
                    </div>
                  </div>
                  @endforeach

                  <!-- Recent Transactions -->
                  @foreach($recentTransactions as $transaction)
                  <div class="list-group-item border-start-warning">
                    <div class="d-flex justify-content-between align-items-center">
                      <div>
                        <span class="badge bg-warning me-2">Transaction</span>
                        <span>{{ $transaction->transactionDate->diffForHumans() }}</span>
                      </div>
                      <div>
                        <div>
                          <strong>{{ $transaction->productName }}</strong>
                          <span class="text-muted">{{ $transaction->description }}</span>
                        </div>
                        <div class="mt-1">
                          <span>Amount: ${{ $transaction->transactionAmount }}</span>
                          <span class="ms-3">Payment Method: {{ $transaction->paymentMethod }}</span>
                          <span class="ms-3">Card Type: {{ $transaction->cardType }}</span>
                        </div>
                        <div class="mt-1">
                          <span class="text-muted">Department: {{ $transaction->department }}</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  @endforeach
                </div>
              </div>
            </div>
          </div>


        </div>
      </div>
      <div class="col-lg-8">
        <div class="card mb-4">
          <div class="card-body">
            <h5 class="card-title">PFRS Checklist</h5>
            <!-- Vertical Pills Tabs -->
            <div class="d-flex align-items-start">
              <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link active" id="approved-tab" data-bs-toggle="pill" href="#approved" role="tab" aria-controls="approved" aria-selected="true">Approved</a>
                <a class="nav-link" id="rejected-tab" data-bs-toggle="pill" href="#rejected" role="tab" aria-controls="rejected" aria-selected="false">Rejected</a>
                <a class="nav-link" id="comply-tab" data-bs-toggle="pill" href="#comply" role="tab" aria-controls="comply" aria-selected="false">Comply</a>
              </div>
              <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="approved" role="tabpanel" aria-labelledby="approved-tab">
                  <!-- Display approved items here -->
                  @if($approvedItems->count() > 0)
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Department</th>
                          <th>Notes</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($approvedItems as $item)
                        <tr>
                          <td>{{ $item->department }}</td>
                          <td>{{ $item->notes }}</td>
                          <td>{{ $item->status }}</td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                  @else
                  <p class="text-center">No approved items found.</p>
                  @endif
                </div>
                <div class="tab-pane fade" id="rejected" role="tabpanel" aria-labelledby="rejected-tab">
                  <!-- Display rejected items here -->
                  @if($rejectedItems->count() > 0)
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Department</th>
                          <th>Notes</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($rejectedItems as $item)
                        <tr>
                          <td>{{ $item->department }}</td>
                          <td>{{ $item->notes }}</td>
                          <td>{{ $item->status }}</td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                  @else
                  <p class="text-center">No rejected items found.</p>
                  @endif
                </div>
                <div class="tab-pane fade" id="comply" role="tabpanel" aria-labelledby="comply-tab">
                  <!-- Display comply items here -->
                  @if($complyItems->count() > 0)
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Department</th>
                          <th>Notes</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($complyItems as $item)
                        <tr>
                          <td>{{ $item->department }}</td>
                          <td>{{ $item->notes }}</td>
                          <td>{{ $item->status }}</td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                  @else
                  <p class="text-center">No items complying found.</p>
                  @endif
                </div>
              </div>
            </div>
            <!-- End Vertical Pills Tabs -->
          </div>
        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
 @include('layout.footer')

</body>

</html>

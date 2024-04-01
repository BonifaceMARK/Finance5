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
        <div class="col-lg-12">
            <div class="card mb-4" style="background-image: url('{{ asset('assets/img/check.jpg') }}'); background-size: cover; background-position: center;">
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
                                    <table class="table table-transparent text-white">
                                        <thead>
                                            <tr>
                                                <th>Department</th>
                                                <th>Notes</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($approvedItems as $item)
                                            <tr class="table-row-transparent">
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
                                    <table class="table table-transparent text-white">
                                        <thead>
                                            <tr>
                                                <th>Department</th>
                                                <th>Notes</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($rejectedItems as $item)
                                            <tr class="table-row-transparent">
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
                                    <table class="table table-transparent text-white">
                                        <thead>
                                            <tr>
                                                <th>Department</th>
                                                <th>Notes</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($complyItems as $item)
                                            <tr class="table-row-transparent">
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


        <div class="row">
            <div class="col-lg-6">
                <div class="card mb-4">
                    <div class="card-header bg-warning text-white">
                        Recent Activities
                    </div>
                    <div class="card-body">
                        <div class="list-group">
                            @foreach($recentTransactions as $transaction)
                            <div class="list-group-item border-start-warning rounded-3 mb-3">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <span class="badge bg-warning me-2">Transaction</span>
                                        <span class="fw-bold">{{ $transaction->productName }}</span>
                                        <span class="text-muted ms-2">{{ $transaction->description }}</span>
                                    </div>
                                    <div>
                                        <span class="text-muted">{{ $transaction->transactionDate->diffForHumans() }}</span>
                                    </div>
                                </div>
                                <div class="mt-2">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <span>Amount: ${{ $transaction->transactionAmount }}</span>
                                        </div>
                                        <div class="col-md-6">
                                            <span>Payment Method: {{ $transaction->paymentMethod }}</span>
                                        </div>
                                    </div>
                                    <div class="row mt-1">
                                        <div class="col-md-6">
                                            <span>Card Type: {{ $transaction->cardType }}</span>
                                        </div>

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
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card mb-4" style="background-image: url('{{ asset('assets/img/collab.jpg') }}'); background-size: cover; background-position: center;">
                    <div class="card-header" style="background-color: transparent; border: none;">
                        <h5 class="card-title mb-0"><strong>Messages</strong></h5>
                    </div>
                    <div class="card-body">
                        <div class="list-group">
                            <!-- Recent Chat Messages -->
                            @foreach($recentChatMessages as $message)
                            <div class="list-group-item border-start-primary rounded-3 mb-3">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <span class="badge bg-primary me-2">Chat Message</span>
                                        <span class="text-muted">{{ $message->created_at->diffForHumans() }}</span>
                                    </div>
                                    <div>
                                        <span class="fw-bold">{{ $message->user->name }}</span> - <span class="text-muted">{{ $message->user->department }}</span>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <div class="row mt-2">
                                        <div class="col-md-12">
                                            <strong class="text-muted">Message:</strong> {{ $message->message }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>





      </nav>
    </div><!-- End Page Title -->


    <section class="section dashboard">
      <div class="container">
        <div class="row">




          <!-- Card with an image on left -->
          <div class="card mb-3">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="{{asset('assets/img/account.jpg')}}" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                    <h3 class="card-title">Introduction to Accounting Standards in the Philippines</h3>
                    <p class="card-text">
                        In the Philippines, accounting standards play a crucial role in ensuring transparency, reliability, and comparability in financial reporting across various entities. These standards provide a framework for how financial transactions are recorded, presented, and disclosed in financial statements, facilitating informed decision-making by stakeholders.
                    </p>
                    <div class="card">
                        <div class="card-body">
                          <h5 class="card-title">Philippine Financial Reporting Standards (PFRS).</h5>

                          <!-- Vertical Pills Tabs -->
                          <div class="d-flex align-items-start">
                            <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                              <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">PFRS</button>
                              <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">SMEs</button>
                              <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">PAS</button>
                            </div>
                            <div class="tab-content" id="v-pills-tabContent">
                              <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                The primary accounting standards governing financial reporting in the Philippines are the Philippine Financial Reporting Standards (PFRS). Aligned with International Financial Reporting Standards (IFRS) issued by the International Accounting Standards Board (IASB), PFRS sets the benchmark for accounting practices in the country. Endorsed by the Financial Reporting Standards Council (FRSC), PFRS applies to all entities reporting under the Philippine Financial Reporting Framework, ensuring consistency with global accounting principles.
                              </div>
                              <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                For small and medium-sized entities (SMEs), the Philippine Financial Reporting Standards for SMEs (PFRS for SMEs) offer a simplified version of full PFRS, tailored to the specific needs of smaller businesses. This framework provides SMEs with a less complex set of accounting standards while maintaining comparability and reliability in financial reporting.
                              </div>
                              <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                Additionally, the Philippine Accounting Standards (PAS), though largely superseded by PFRS, were previously utilized in the Philippines and may still be relevant for certain entities that have not transitioned to PFRS.

        To address specific accounting issues and provide guidance on the application of PFRS, the Philippine Interpretations Committee (PIC) issues interpretations and clarifications, ensuring consistent and appropriate application of accounting standards in the Philippine context.

        Enforced by the Securities and Exchange Commission (SEC), compliance with these accounting standards is mandatory for various entities, including publicly traded companies, large corporations, SMEs, and others subject to financial reporting regulations. Adherence to these standards enhances the reliability of financial information, fosters investor confidence, and promotes the efficient functioning of capital markets in the Philippines.
                              </div>
                            </div>
                          </div>
                          <!-- End Vertical Pills Tabs -->

                        </div>
                </div>


              </div>
            </div>

          </div><!-- End Card with an image on left -->



      </div>
      <div class="pdf-viewer">
        <h4>Philippine Financial Reporting Standards / Philippine Accounting Standards</h4>
        <iframe src="{{ asset('assets/img/PAS.pdf') }}" width="100%" height="600px" frameborder="0"></iframe>
    </div>
    </section>


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
 @include('layout.footer')

</body>

</html>

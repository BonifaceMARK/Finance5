@extends('layout.title')

@section('title', 'PFRS Standards Checklist')
@include('layout.title')
@include('layout.header')

<body>

    <!-- ======= Sidebar ======= -->
    @include('layout.sidebar')

    <main id="main" class="main">

        <div class="pagetitle">
            <h1><STRong>Implement Rules & Regulations through Checklist PFRS !</STRong></h1>
            <nav>

            </nav>
        </div><!-- End Page Title -->

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Checklist</h3>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#pfrsChecklistModal">
                                Open PFRS Checklist
                            </button>
                        </div>

                        @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('error') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

                        <div class="card-body">
                            <form action="{{ route('checklist.submit') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="department">Department:</label>
                                    <select class="form-control" id="department" name="department">
                                        <option value="#">Select Department:</option>
                                        <option value="finance1">Finance1</option>
                                        <option value="finance2">Finance2</option>
                                        <option value="finance3">Finance3</option>
                                        <option value="finance4">Finance4</option>
                                        <option value="finance5">Finance5</option>
                                        <option value="finance6">Finance6</option>
                                        <option value="finance7">Finance7</option>
                                        <option value="finance8">Finance8</option>
                                        <option value="finance9">Finance9</option>
                                        <option value="finance10">Finance10</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="notes">Notes:</label>
                                    <textarea class="form-control" id="notes" name="notes" rows="3" placeholder="Enter notes"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="status">Status:</label><br>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="status" id="approved" value="approved" checked>
                                        <label class="form-check-label" for="approved">Approved</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="status" id="reject" value="reject">
                                        <label class="form-check-label" for="reject">Reject</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="status" id="comply" value="comply">
                                        <label class="form-check-label" for="comply">Comply</label>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
 <!-- Modal -->
 <div class="modal fade" id="pfrsChecklistModal" tabindex="-1" role="dialog" aria-labelledby="pfrsChecklistModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-dark text-white">
                <h5 class="modal-title" id="pfrsChecklistModalLabel">PFRS Checklist</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <ol class="list-group list-group-flush">
                    <li class="list-group-item">
                        <strong>PFRS 1 - First-time Adoption of PFRS:</strong>
                        <ul>
                            <li>Determine if the entity is adopting PFRS for the first time.</li>
                            <li>Assess whether all required disclosures are made in the financial statements.</li>
                        </ul>
                    </li>
                    <li class="list-group-item">
                        <strong>PFRS 2 - Share-based Payment:</strong>
                        <ul>
                            <li>Identify any share-based payment transactions.</li>
                            <li>Ensure proper measurement and recognition of share-based payments.</li>
                        </ul>
                    </li>
                    <li class="list-group-item">
                        <strong>PFRS 3 - Business Combinations:</strong>
                        <ul>
                            <li>Determine if any business combinations have occurred.</li>
                            <li>Recognize and measure identifiable assets acquired, liabilities assumed, and any non-controlling interest in the acquiree.</li>
                        </ul>
                    </li>
                    <!-- Add the rest of the checklist items similarly -->
                    <li class="list-group-item">
                        <strong>PFRS 4 - Insurance Contracts:</strong>
                        <ul>
                            <li>Assess if the entity has insurance contracts and apply appropriate accounting treatment.</li>
                            <li>Disclose relevant information about insurance contracts.</li>
                        </ul>
                    </li>
                    <li class="list-group-item">
                        <strong>PFRS 5 - Non-current Assets Held for Sale and Discontinued Operations:</strong>
                        <ul>
                            <li>Identify non-current assets held for sale and discontinued operations.</li>
                            <li>Ensure proper measurement and presentation of such assets and operations.</li>
                        </ul>
                    </li>
                    <li class="list-group-item">
                        <strong>PFRS 6 - Exploration for and Evaluation of Mineral Resources:</strong>
                        <ul>
                            <li>Apply appropriate accounting for exploration and evaluation expenditures related to mineral resources.</li>
                        </ul>
                    </li>
                    <li class="list-group-item">
                        <strong>PFRS 7 - Financial Instruments: Disclosures:</strong>
                        <ul>
                            <li>Ensure comprehensive disclosures regarding financial instruments.</li>
                            <li>Disclose information about the significance of financial instruments for the entity's financial position and performance.</li>
                        </ul>
                    </li>
                    <li class="list-group-item">
                        <strong>PFRS 8 - Operating Segments:</strong>
                        <ul>
                            <li>Identify operating segments based on internal reporting.</li>
                            <li>Disclose information about operating segments in the financial statements.</li>
                        </ul>
                    </li>
                    <li class="list-group-item">
                        <strong>PFRS 9 - Financial Instruments:</strong>
                        <ul>
                            <li>Assess classification and measurement of financial assets and financial liabilities.</li>
                            <li>Determine appropriate impairment provisions and hedge accounting treatment.</li>
                        </ul>
                    </li>
                    <li class="list-group-item">
                        <strong>PFRS 10 - Consolidated Financial Statements:</strong>
                        <ul>
                            <li>Determine if the entity controls other entities and prepare consolidated financial statements accordingly.</li>
                            <li>Consider special purpose entities and variable interest entities.</li>
                        </ul>
                    </li>
                    <li class="list-group-item">
                        <strong>PFRS 11 - Joint Arrangements:</strong>
                        <ul>
                            <li>Assess the nature of joint arrangements and apply appropriate accounting treatment (joint operations or joint ventures).</li>
                        </ul>
                    </li>
                    <li class="list-group-item">
                        <strong>PFRS 12 - Disclosure of Interests in Other Entities:</strong>
                        <ul>
                            <li>Provide comprehensive disclosures about interests in subsidiaries, joint arrangements, associates, and structured entities.</li>
                        </ul>
                    </li>
                    <li class="list-group-item">
                        <strong>PFRS 13 - Fair Value Measurement:</strong>
                        <ul>
                            <li>Ensure proper measurement and disclosure of fair values for financial and non-financial assets and liabilities.</li>
                        </ul>
                    </li>
                    <li class="list-group-item">
                        <strong>PFRS 15 - Revenue from Contracts with Customers:</strong>
                        <ul>
                            <li>Evaluate contracts with customers and recognize revenue appropriately over time or at a point in time.</li>
                        </ul>
                    </li>
                    <li class="list-group-item">
                        <strong>PFRS 16 - Leases:</strong>
                        <ul>
                            <li>Assess lease contracts and recognize assets and liabilities arising from leases on the balance sheet.</li>
                        </ul>
                    </li>
                    <li class="list-group-item">
                        <strong>PFRS 17 - Insurance Contracts:</strong>
                        <ul>
                            <li>Prepare for the implementation of PFRS 17 for insurance contracts, including measurement, presentation, and disclosure requirements.</li>
                        </ul>
                    </li>
                    <li class="list-group-item">
                        <strong>PFRS 18 - Revenue:</strong>
                        <ul>
                            <li>Apply revenue recognition principles for specific transactions not covered by PFRS 15.</li>
                        </ul>
                    </li>
                    <li class="list-group-item">
                        <strong>PFRS 19 - Employee Benefits:</strong>
                        <ul>
                            <li>Determine and account for employee benefits, including pensions, post-employment benefits, and share-based payment arrangements.</li>
                        </ul>
                    </li>
                    <li class="list-group-item">
                        <strong>PFRS 20 - Accounting for Government Grants and Disclosure of Government Assistance:</strong>
                        <ul>
                            <li>Account for government grants and disclose relevant information about government assistance.</li>
                        </ul>
                    </li>
                    <li class="list-group-item">
                        <strong>PFRS 21 - The Effects of Changes in Foreign Exchange Rates:</strong>
                        <ul>
                            <li>Assess the impact of changes in foreign exchange rates on financial statements.</li>
                            <li>Determine appropriate translation methods for foreign currency transactions and operations.</li>
                        </ul>
                    </li>
                </ol>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    @include('layout.footer')

    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- Include Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>

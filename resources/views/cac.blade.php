@extends('layout.title')

@section('title', 'Communication & Collaboration')
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
      <div class="row">

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
                    Introduction:

                    In the realm of finance, effective communication and collaboration are paramount for achieving organizational objectives, ensuring regulatory compliance, and fostering trust with stakeholders. Whether within financial institutions, between financial professionals and clients, or across departments within a company, clear and transparent communication, along with seamless collaboration, form the bedrock of success.</p>
                </div>
              </div>
            </div>
          </div><!-- End Card with an image on left -->

      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
 @include('layout.footer')

</body>

</html>

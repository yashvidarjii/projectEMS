@extends('frontend.layouts.main')

@section('main-container')
<body>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Sales Card -->
        <div class="col-xxl-4 col-md-6">
          <div class="card info-card sales-card">
            <div class="card-body">
              <h2 class="card-title text-center">REGISTERD EMPLOYEES</h2>
              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-people"></i>
                </div>
                <div class="ps-3">
                  <h6>145</h6>
                </div>
              </div>
            </div>
          </div>
        </div><!-- End Sales Card -->

        <!-- Revenue Card -->
        <div class="col-xxl-4 col-md-6">
          <div class="card info-card revenue-card">

            <div class="card-body">
              <h5 class="card-title text-center">LISTED DEPARTMENTS</h5>

              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-files"></i>
                </div>
                <div class="ps-3">
                  <h6>$3,264</h6>
                </div>
              </div>
            </div>

          </div>
        </div><!-- End Revenue Card -->

        <!-- Customers Card -->
        <div class="col-xxl-4 col-md-6">

          <div class="card info-card customers-card">

            <div class="card-body">
              <h5 class="card-title text-center">LISTED LEAVE TYPE</h5>

              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-star-fill"></i>
                </div>
                <div class="ps-3">
                  <h6>1244</h6>
                </div>
              </div>

            </div>
          </div>

        </div><!-- End Customers Card -->
      </div>


      <div class="row">
        <div class="leave-details col-xxl-12 col-md-6">
          <h1 class="text-center card-title font-size border-design mb-4">Leaves Details</h1>
        </div>
      </div>


      <div class="row">
        <div class="col-xxl-6 col-md-6">
          <div class="card info-card sales-card">
            <div class="card-body">
              <h2 class="card-title text-center">LEAVES APPLIED</h2>
              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-inboxes-fill"></i>
                </div>
                <div class="ps-3">
                  <h6>145</h6>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xxl-6 col-md-6">
          <div class="card info-card customers-card">

            <div class="card-body">
              <h5 class="card-title text-center">NEW LEAVE REQUESTS</h5>

              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-layers-fill"></i>
                </div>
                <div class="ps-3">
                  <h6>$3,264</h6>
                </div>
              </div>
            </div>

          </div>
        </div>

        <div class="col-xxl-6 col-md-6">
          <div class="card info-card reject-leave-card">
            <div class="card-body">
              <h5 class="card-title text-center">REJECTED LEAVE</h5>
              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-x-lg"></i>
                </div>
                <div class="ps-3">
                  <h6>1244</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xxl-6 col-md-6">
          <div class="card info-card revenue-card">
            <div class="card-body">
              <h5 class="card-title text-center">APPROVED LEAVE</h5>
              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-check-lg"></i>
                </div>
                <div class="ps-3">
                  <h6>1244</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  </main><!-- End #main -->
  @endsection
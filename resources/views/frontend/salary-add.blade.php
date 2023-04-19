@extends('frontend.layouts.main')

@section('main-container')

<body>

    <!-- ======= Header ======= -->

    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Add Salary Employee</h1>
        </div>
        <section class="section dashboard">
            <div class="row">
                <form class="row g-3">
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Email</label>
                        <input type="email" class="form-control" id="inputEmail4">
                    </div>
                    <div class="col-md-6">
                        <label for="inputname" class="form-label">Full Name</label>
                        <input type="Text" class="form-control" id="inputname">
                    </div>
                    <div class="col-sm-6">
                        <label for="inputdepa" class="form-label">Department</label>
                        <select class="form-select" id="inputdepa">
                            <option selected>Choose...</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="col-sm-6">
                        <label for="inputsalary">Salary</label>
                        <input type="number" class="form-control" id="inputsalary">
                    </div>
                    <div class="col-sm-6">
                        <label for="accountnum">Account No</label>
                        <div class="input-group date">
                            <input type="number" class="form-control" id="accountnum">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <label for="code">IFCS Code</label>
                        <div class="input-group date">
                            <input type="text" class="form-control" id="code">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <label for="pf">PF</label>
                        <input type="number" class="form-control" id="pf">
                    </div>
                    <div class="col-sm-6">
                        <label for="tax">TAX</label>
                        <input type="number" class="form-control" id="tax">
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </section>

    </main>
@endsection
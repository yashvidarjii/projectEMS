@extends('frontend.layouts.main')

@section('main-container')
<body>

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Leave Type</h1>
        </div>
        <div class="row">
            <div class="col-md-4"> &nbsp; </div>
            <div class="col-md-4 text-center">
                <label for="inputdepartment" class="form-label">Update Leave Type</label>
                <input type="text" class="form-control" id="inputdepartment">
                <div class="text-center mt-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </main>
 @endsection
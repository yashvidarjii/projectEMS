@extends('frontend.layouts.main')

@section('main-container')

    <body>

        <main id="main" class="main">

            <div class="pagetitle">
                <h1>Add Employee Details</h1>
            </div><!-- End Page Title -->
            <section class="section dashboard">
                <div class="row">
                    {{-- <form class="row g-3"> --}}
                    {!! Form::open([
                        'class' => 'row g-3',
                    ]) !!}
                    <div class="col-md-4">
                        {!! Form::label('firstname', 'First Name',
                         [
                            'class'=>"form-label"
                        ]) !!}
                        {{-- <label for="firstname">First Name</label> --}}
                        {{-- <input type="text" class="form-control" aria-label="First name" id="firstname"> --}}
                        {!! Form::text('name', '', [
                            'id' => 'firstname',
                            'class' => 'form-control',
                            'aria-label' => 'First name',
                        ]) !!}
                    </div>
                    <div class="col-md-4">
                        {{-- <label for="lastname">Last Name</label>
                        <input type="text" class="form-control" aria-label="Last name" id="lastname"> --}}
                        {!! Form::label('lastname', 'Last Name',
                         [
                            'class'=>"form-label"
                        ]) !!}
                        {!! Form::text('name', '', [
                            'class'=> "form-control",
                             'aria-label'=>"Last name",
                              'id'=>"lastname"
                        ]) !!}
                    </div>
                    <div class="col-md-4">
                        {!! Form::label('surname', 'Surname',
                         [
                            'class'=>"form-label"
                        ]) !!}
                        {!! Form::text('name', '',
                        [
                            'class'=> "form-control",
                             'aria-label'=>"Surname",
                              'id'=>"surname"
                        ]) !!}
                        {{-- <label for="surname">Surname</label>
                        <input type="text" class="form-control" aria-label="Surname" id="surname"> --}}
                    </div>
                    <div class="col-md-6">
                        {!! Form::label('email', 'Email',
                        [
                            'class'=>"form-label"
                        ]) !!}
                        {!! Form::email('email', '',
                         [
                            'class'=>"form-control",
                             'id'=>"email"
                        ]) !!}
                        {{-- <label for="inputEmail4" class="form-label">Email</label>
                        <input type="email" class="form-control" id="inputEmail4"> --}}
                    </div>
                    <div class="col-sm-6">
                        {!! Form::label('department', 'Department',
                        [
                            'class'=>"form-label"
                        ]) !!}

                        {!! Form::select('name',
                        [
                            '1' => "One",
                            '2' => "Two",
                            '3' => "Three",
                            '4' => "Choosee"
                    ], 4 ,
                    [
                        'id'=>"name",
                        'required'=>"",
                        'class'=>"form-control",
                    ]
                    ) !!}
                        {{-- <label for="inputdepa" class="form-label">Department</label>
                        <select class="form-select" id="inputdepa">
                            <option selected>Choose...</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select> --}}
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Phone No</label>
                        <input type="number" class="form-control" id="inputPassword4">
                    </div>
                    <div class="col-md-6">
                        <label for="inputCountary" class="form-label">Countary</label>
                        <input type="text" class="form-control" id="inputCountary">
                    </div>
                    <div class="col-md-6">
                        <label for="inputState" class="form-label">State</label>
                        <select id="inputState" class="form-select">
                            <option selected>Choose...</option>
                            <option>...</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="inputCity" class="form-label">City</label>
                        <input type="text" class="form-control" id="inputCity">
                    </div>
                    <div class="col-md-6">
                        <label for="inputAddress" class="form-label">Address</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                    </div>
                    <div class="col-md-6">
                        <label for="inputGroupFile02" class="form-label">Photos</label>
                        <!-- <input type="file" name="myImage" accept="image/png, image/jpeg" /> -->
                        <input type="file" class="form-control" id="inputGroupFile02" accept="image/png, image/jpeg" />
                    </div>
                    <div class="col-md-6">
                        <label for="date">DOB</label>

                        <div class="date">
                            <input type="date" class="form-control" id="date" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="doj">Date of Joining</label>
                        <div class="input-group date">
                            <input type="date" class="form-control" id="doj" />
                        </div>
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
                    <div class="col-12">
                        <label for="inputAddress2" class="form-label">About Us</label>
                        <textarea class="form-control" id="floatingTextarea2" style="height: 100px"></textarea>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Sign in</button>
                    </div>
                    {{-- </form> --}}
                    {!! Form::close() !!}
                </div>
            </section>

        </main>
    @endsection

@extends('frontend.layouts.main')

@section('main-container')
<body>
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Manage Leave Request</h1>
        </div>
        <div>
            <nav class="navbar navbar-light bg-light">
                <div class="container-fluid">
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </nav>
        </div>
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Sr No</th>
                        <th scope="col">Emp ID</th>
                        <th scope="col">Leave Type</th>
                        <th scope="col">From</th>
                        <th scope="col">To</th>
                        <th scope="col">Posting Date</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>yashvi</td>
                        <td>20-4-2023</td>
                        <td>30-4-2023</td>
                        <td>20-3-2023</td>
                        <td>Approve</td>
                        <td>
                            <button type="button" class="btn btn-primary">Approve</button>
                            <button type="button" class="btn btn-danger">Reject</button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>xyz</td>
                        <td>20-4-2023</td>
                        <td>30-4-2023</td>
                        <td>20-3-2023</td>
                        <td>Approve</td>
                        <td>
                            <button type="button" class="btn btn-primary">Approve</button>
                            <button type="button" class="btn btn-danger">Reject</button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>abc</td>
                        <td>20-4-2023</td>
                        <td>30-4-2023</td>
                        <td>20-3-2023</td>
                        <td>Approve</td>
                        <td>
                            <button type="button" class="btn btn-primary">Approve</button>
                            <button type="button" class="btn btn-danger">Reject</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
@endsection
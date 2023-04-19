@extends('frontend.layouts.main')

@section('main-container')
<body>

    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Manage Employee</h1>
        </div>
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Sr No</th>
                        <th scope="col">Emp ID</th>
                        <th scope="col">Emp Name</th>
                        <th scope="col">EMail</th>
                        <th scope="col">Mobile</th>
                        <th scope="col">Countary</th>
                        <th scope="col">Department</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>yashvi</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>Active</td>
                        <td>
                            <button type="button" class="btn btn-primary"> <a href="view.html"> View</a></button>
                            <button type="button" class="btn btn-success"><a href="edit.html">Edit</a></button>
                            <button type="button" class="btn btn-danger">Inactive</button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>xyz</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>Active</td>
                        <td>
                            <button type="button" class="btn btn-primary"> <a href="view.html"> View</a></button>
                            <button type="button" class="btn btn-success"><a href="edit.html">Edit</a></button>
                            <button type="button" class="btn btn-danger">Inactive</button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>abc</td>
                        <td>@twitter</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>Otto</td>
                        <td>Active</td>
                        <td>
                            <button type="button" class="btn btn-primary"> <a href="view.html"> View</a></button>
                            <button type="button" class="btn btn-success"><a href="edit.html">Edit</a></button>
                            <button type="button" class="btn btn-danger">Inactive</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>

  @endsection
@extends('frontend.layouts.main')

@section('main-container')

<body>

    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Mangment Department List</h1>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Department Id</th>
                    <th scope="col">Department Name</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>
                        <a class="edit" title="Edit" data-toggle="tooltip"><i class="bi bi-pencil-fill"></i></a>
                        <a class="delete ms-2" title="Delete" data-toggle="tooltip"><i
                                class="bi bi-trash3-fill"></i></a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>
                        <a class="edit" title="Edit" data-toggle="tooltip"><i class="bi bi-pencil-fill"></i></a>
                        <a class="delete ms-2" title="Delete" data-toggle="tooltip"><i
                                class="bi bi-trash3-fill"></i></a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Larry the Bird</td>
                    <td>Thornton</td>
                    <td>
                        <a class="edit" title="Edit" data-toggle="tooltip"><i class="bi bi-pencil-fill"></i></a>
                        <a class="delete ms-2" title="Delete" data-toggle="tooltip"><i
                                class="bi bi-trash3-fill"></i></a>
                    </td>
                </tr>
            </tbody>
        </table>
    </main>
   @endsection
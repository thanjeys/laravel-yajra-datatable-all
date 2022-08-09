<!DOCTYPE html>
<html>
<head>
    <title>Laravel 8 Datatables Tutorial</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"/>
</head>
<body>

<div class="container mt-5">
    <h2 class="mb-4">Laravel Basic Table Example</h2>
    <table class="table table-bordered yajra-datatable">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Username</th>
                <th>Phone</th>
                <th>DOB</th>
                <th>Action</th>
            </tr>
            @forelse ($students as $student)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $student->name}}</td>
                <td>{{ $student->email}}</td>
                <td>{{ $student->username}}</td>
                <td>{{ $student->phone}}</td>
                <td>{{ $student->dob}}</td>
                <td><a href="javascript:void(0)" class="edit btn btn-success btn-sm">Edit</a>
                    <a href="javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a>
                </td>
            </tr>
            @empty
                Sorry, No students found.
            @endforelse

        </thead>
        <tbody>
        </tbody>
    </table>
</div>

</body>

</html>

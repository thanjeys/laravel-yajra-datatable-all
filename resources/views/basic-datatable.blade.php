<!DOCTYPE html>
<html>
<head>
    <title>Laravel 8 Datatables Tutorial</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"/>
    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">




</head>
<body>

<div class="container mt-5">
    <h2 class="mb-4">Laravel Basic Datatables Example</h2>
    <table class="table table-bordered" id="yajra-datatable">
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
        </thead>
        <tbody>
            @forelse ($students as $student)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $student->name}}</td>
                <td>{{ $student->email}}</td>
                <td>{{ $student->username}}</td>
                <td>{{ $student->phone}}</td>
                <td>{{ $student->dob}}</td>
                <td>Edit | Delete </td>
            </tr>
            @empty
                Sorry, No students found.
            @endforelse
        </tbody>
    </table>
</div>

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript">


  $(document).ready(function () {
    $('#yajra-datatable').DataTable();
});
</script>
</html>

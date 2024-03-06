

@extends('layout.myapp')
@section('pagetitle')
    <h4 class="page-title pull-left">Course Guide</h4>
@endsection
@section('content')

    <style>
        .custom-table {
            width: 500px; /* ปรับความกว้างตามต้องการ */
        }
    </style>

    <table class="container p-2 table table-bordered border-primary table-light custom-table">
        <tr class="text-center">
            <th>Course ID</th>
            <th>Course Name</th>
        </tr>
        <tr>
            <td class="text-center">SC313762</td>
            <td class="text-center">Research Methodology</td>
        </tr>
    </table>
    <div class="d-grid gap-2 col-2 mx-auto">
        <button class="btn btn-primary" type="button" onclick="window.location.href='{{ url('homestd1') }}'">Home</button>
    </div>




@endsection

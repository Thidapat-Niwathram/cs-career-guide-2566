@extends('layout.menuadmin')
@section('pagetitle')
    <h4 class="page-title pull-left">View Soft Skill</h4>
@endsection
@section('content')
    <style>
        .table-borderless tr,
        .table-borderless th,
        .table-borderless td {
            border: none !important;
        }
        th[scope="row"] {
            width: 180px; /* กำหนดความยาวของคอลัมน์ "Career Type" */
        }

    </style>

    <div class="container">
        <table class="table table-borderless">
            <tbody>
            <tr>
                <th scope="row">Skill Name (TH)</th>
                <td>ทักษะการคิดเชิงวิพากษ์</td>
            </tr>
            <tr>
                <th scope="row">Course Name (ENG)</th>
                <td>Critical Thinking</td>
            </tr>
            </tbody>
        </table>
    </div>
    <table class="container p-2 table table-bordered border-primary table-light">
        <tr class="text-center">
            <th>Course</th>
            <th>Weight</th>
        </tr>
        <tr>
            <td class="text-center">OOP</td>
            <td class="text-center">2</td>
        </tr>
    </table>
    <div class="d-flex justify-content-between">
        <button class="btn btn-primary" type="button" onclick="window.location.href='{{ url('mnsoftskill') }}'">Back</button>
    </div>

@endsection

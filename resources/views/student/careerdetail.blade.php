

@extends('layout.myapp')
@section('pagetitle')
    <h4 class="page-title pull-left">Career</h4>
@endsection
@section('content')

    <div class="container-fluid p-3" style="width: 300px;">
        <select class="form-select" style="text-align: center;">
            <option disabled selected>-- เลือกตำแหน่งงาน --</option>
            <option>Data Analyst</option>
            <option>Tester</option>
        </select>
    </div>

    <table class="container p-2 table table-bordered border-primary table-light">
        <tr class="text-center">
            <th>ทักษะที่ต่ำกว่าเกณฑ์</th>
            <th>รายวิชาที่แนะนำ</th>
        </tr>
        <tr>
            <td class="text-center">Python</td>
            <td class="text-center">SC352101</td>
        </tr>
        <tr>
            <td class="text-center">Java</td>
            <td class="text-center">SC352101</td>
        </tr>


@endsection

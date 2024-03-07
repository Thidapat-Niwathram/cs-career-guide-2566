
@extends('layout.myapp')
@section('pagetitle')
    <h4 class="page-title pull-left">Skills</h4>
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
            <th>ทักษะ</th>
            <th>ระดับทักษะ</th>
        </tr>
        <tr>
            <td class="text-center">Python</td>
            <td class="text-center">2</td>

        </tr>
    </table>
    <div class="d-flex justify-content-between">
        <button class="btn btn-primary" type="button" onclick="window.location.href='{{ url('homestd1') }}'">Back</button>
        <div></div>
        <button class="btn btn-primary" type="button" onclick="window.location.href='{{ url('grade') }}'">Course guide</button>
    </div>


@endsection

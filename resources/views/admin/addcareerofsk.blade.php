@extends('layout.menuadmin')
@section('pagetitle')
    <h4 class="page-title pull-left">Add Career Of Soft Skill</h4>
@endsection
@section('content')
    <style>
        .form-select {
            width: 70px;
        }
        .form-select{
            text-align: center;
            margin: auto;
            display: block;
        }

    </style>
    <table id="courseTable" class="container p-2 table table-bordered border-primary table-light">
        <tr class="text-center">
            <th>Career</th>
            <th>Weight</th>
        </tr>
        <tr class="text-center">
            <td><a>Tester</a></td>
            <td>
                <div class="col-sm-10">
                    <select class="form-select">
                        <option>0</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                    </select>
                </div>
            </td>
        </tr>

    </table>
    <div class="d-flex justify-content-between">
        <button class="btn btn-primary" type="button" onclick="window.location.href='{{ url('addcourseoftsk') }}'">Back</button>
        <div></div>
        <button class="btn btn-primary" type="button" onclick="window.location.href='{{ url('mncourse') }}'">Add</button>
    </div>
@endsection

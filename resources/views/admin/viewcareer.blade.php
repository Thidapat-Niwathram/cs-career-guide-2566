@extends('layout.menuadmin')
@section('pagetitle')
    <h4 class="page-title pull-left">View Career</h4>
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
            <th scope="row">Career Type</th>
            <td>Developer</td>
        </tr>
        <tr>
            <th scope="row">Career Name (TH)</th>
            <td>นักทดสอบซอฟต์แวร์</td>
        </tr>
        <tr>
            <th scope="row">Career Name (ENG)</th>
            <td>Tester</td>
        </tr>
        </tbody>
    </table>
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
    <button class="btn btn-primary" type="button" onclick="window.location.href='{{ url('mncareer') }}'">Back</button>
   </div>


@endsection

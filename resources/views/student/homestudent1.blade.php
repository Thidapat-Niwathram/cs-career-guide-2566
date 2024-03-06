
@extends('layout.myapp')
@section('pagetitle')
    <h4 class="page-title pull-left">Home1</h4>
@endsection
@section('content')
    <h2 class="container-fluid" style="padding-left:2rem">CS Career Guide</h2>
    <a class="container-fluid" style="padding-top: 2rem; padding-left:2rem">Welcome to the career guidance information management system. Computer Science major</a>
    <hr>
    <div class="d-grid gap-3 col-4 mx-auto">
        <a href="{{ url('qtstd') }}" class="btn btn-primary btn-lg" role="button">Find Your Career</a>
        <a href="{{ url('slcareer') }}" class="btn btn-primary btn-lg" role="button">Choose Your Career</a>
    </div>




@endsection

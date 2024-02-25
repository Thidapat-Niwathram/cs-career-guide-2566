
@extends('layout.myapp')
@section('pagetitle')
    <h4 class="page-title pull-left">Home</h4>
@endsection
@section('content')
    <style>

        .card{
            padding: 2rem;
            width: 18rem;
            /* margin-left: 5rem; */
            margin: 50px;
        }
        .row{
            padding-top: -2rem;
        }

    </style>
    <h2 class="container-fluid" style="padding-left:2rem">CS Career Guide</h2>
    <a class="container-fluid" style="padding-top: 2rem; padding-left:2rem">Welcome to the career guidance information management system. Computer Science major</a>
    <hr>
    <div style="display: flex; justify-content: flex-end;">
        <h3 class="container-fluid" style="padding-left:2rem">Career Detail</h3>
        <button type="button" class="btn btn-primary">Find Your Career</button>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="card">
                <img src="image/cplogo2.png" class="card-img-top" alt="..." >
                <div class="card-body">
                    <a href="url">Full Stack Developer</a>
                </div>
            </div>
            <div class="card">
                <img src="image/cplogo2.png" class="card-img-top" alt="..." >
                <div class="card-body">
                    <a href="url">Software Engineer</a>
                </div>
            </div>
            <div class="card">
                <img src="image/cplogo2.png" class="card-img-top" alt="..." >
                <div class="card-body">
                    <a href="url" style="text-align: center;">Data Analyst</a>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="card">
                <img src="image/cplogo2.png" class="card-img-top" alt="..." >
                <div class="card-body">
                    <a href="url">Full Stack Developer</a>
                </div>
            </div>
            <div class="card">
                <img src="image/cplogo2.png" class="card-img-top" alt="..." >
                <div class="card-body">
                    <a href="url">Full Stack Developer</a>
                </div>
            </div>
            <div class="card">
                <img src="image/cplogo2.png" class="card-img-top" alt="..." >
                <div class="card-body">
                    <a href="url">Full Stack Developer</a>
                </div>
            </div>
        </div>
    </div>
@endsection

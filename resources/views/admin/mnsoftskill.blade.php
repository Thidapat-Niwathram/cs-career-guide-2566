@extends('layout.menuadmin')
@section('pagetitle')
    <h4 class="page-title pull-left">Manage Soft Skill</h4>
@endsection
@section('content')
    <style>
        .btn, .form-control {
            width: fit-content;
            border-radius: 10rem;
        }

        .table {
            margin-top: 2rem;
        }

        .input-group {
            left: 18rem;
        }
    </style>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="d-grid gap-2">
                    <button onclick="window.location.href='{{ url('addsoftskill') }}'" class="btn btn-primary" type="button">New Soft Skill
                    </button>
                </div>
            </div>
            <div class="col-md-6">
                <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search ">
                    <div class="input-group">
                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search"
                               aria-label="Search" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <table class="container p-2 table table-bordered border-primary table-light">
        <tr class="text-center">
            <th>Soft Skill(ENG)</th>
            <th>Soft Skill(TH)</th>
            <th>Action</th>
        </tr>
        <tr>
            <td class="text-center">Critical Thinking</td>
            <td class="text-center">ทักษะการคิดเชิงวิเคราะห์</td>
            <td class="text-center">
                <a href="{{ route('viewsoftsk') }}"
                   class="font-medium text-blue-600 dark:text-blue-500 hover:underline p-2">View</a>
                <a href="{{ route('editsoftskill') }}"
                   class="font-medium text-blue-600 dark:text-blue-500 hover:underline p-2">Edit</a>
                <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline p-2">Delete</a>
            </td>
        </tr>
        <tr>
            <td class="text-center">Time Management</td>
            <td class="text-center">ทักษะการบริหารเวลา</td>
            <td class="text-center">
                <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline p-2">View</a>
                <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline p-2">Edit</a>
                <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline p-2">Delete</a>
            </td>
        </tr>


        @endsection
        @section('script')
            <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
@endsection

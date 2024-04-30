@extends('layout.menuadmin')
@section('pagetitle')
    <h4 class="page-title pull-left">Edit Career</h4>
@endsection
@section('content')
    <style>

        form {
            max-width: 400px; /* กำหนดความกว้างสูงสุดของฟอร์มเป็น 500px */
            margin: 0 auto; /* จัดศูนย์กลางตามแนวนอน */
        }
        .form-control,.form-select {
            /*margin-left: 5rem;*/
        }
        .btn{
            margin-right: 0px;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            margin-bottom: 0.5rem;
        }
    </style>
    <div class="container d-flex align-items-center justify-content-center">
        <form class="container-fluid" action="/">
            <div class="row mb-3">
                <label for="coursetype" class="col-sm-2 col-form-label">Course ID</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="coursetype" name="coursetype">
                </div>
            </div>
            <div class="row mb-3">
                <label for="coursenameth" class="col-sm-2 col-form-label">Course Name (TH)</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="coursenameth" name="coursenameth">
                </div>
            </div>
            <div class="row mb-3">
                <label for="coursenameen" class="col-sm-2 form-label">Course Name (ENG)</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="coursenameth"  name="coursenameth">
                </div>
            </div>
            <div class="d-flex justify-content-between">
            </div>
        </form>
    </div>
    <div class="d-flex justify-content-between">
        <button class="btn btn-primary" type="button" onclick="window.location.href='{{ url('mncourse') }}'">Back</button>
        <div></div>
        <button class="btn btn-primary" type="button" onclick="window.location.href='{{ url('editcoursesoftsk') }}'">Next</button>
    </div>
@endsection

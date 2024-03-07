@extends('layout.menuadmin')
@section('pagetitle')
    <h4 class="page-title pull-left">Add Career</h4>
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
        label {

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
                <label for="careertype" class="col-sm-2 col-form-label">Career Type</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="careertype" name="careertype">
                </div>
            </div>
            <div class="row mb-3">
                <label for="careernameth" class="col-sm-2 col-form-label">Career Name (TH)</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="careernameth" name="careernameth">
                </div>
            </div>
            <div class="row mb-3">
                <label for="careernameen" class="col-sm-2 form-label">Career Name (ENG)</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="careernameen"  name="careernameen">
                </div>
            </div>

        </form>
    </div>


    <div class="d-flex justify-content-between">
        <button class="btn btn-primary" type="button" onclick="window.location.href='{{ url('mncareer') }}'">Back</button>
        <div></div>
        <button class="btn btn-primary" type="button" onclick="window.location.href='{{ url('careeraddsoftsk') }}'">Next</button>

    </div>
@endsection

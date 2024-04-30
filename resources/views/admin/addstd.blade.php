@extends('layout.menuadmin')
@section('pagetitle')
    <h4 class="page-title pull-left">Add Student</h4>
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
                <label for="stdid" class="col-sm-2 col-form-label">Student ID</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="stdid" name="stdid">
                </div>
            </div>
            <div class="row mb-3">
                <label for="stdnameth" class="col-sm-2 col-form-label">Student Name (TH)</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="stdnameth" name="stdnameth">
                </div>
            </div>
            <div class="row mb-3">
                <label for="stdlnameth" class="col-sm-2 col-form-label">Student Last Name (TH)</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="stdlnameth" name="stdlnameth">
                </div>
            </div>
            <div class="row mb-3">
                <label for="stdnameen" class="col-sm-2 form-label">Student Name (ENG)</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="stdnameen"  name="stdnameen">
                </div>
            </div>
            <div class="row mb-3">
                <label for="stdlnameen" class="col-sm-2 form-label">Student Last Name (ENG)</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="stdlnameen"  name="stdlnameen">
                </div>
            </div>
            <div class="row mb-3">
                <label for="stdemail" class="col-sm-2 form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="stdemail"  name="stdemail">
                </div>
            </div>
            <div class="row mb-3">
                <label for="stdemail" class="col-sm-2 form-label">Telephone</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="stdemail"  name="stdemail">
                </div>
            </div>
        </form>
    </div>


    <div class="d-flex justify-content-between">
        <button class="btn btn-primary" type="button" onclick="window.location.href='{{ url('mnaccount') }}'">Back</button>
        <div></div>
        <button class="btn btn-primary" type="button" onclick="window.location.href='{{ url('mnaccount') }}'">Add</button>

    </div>
@endsection

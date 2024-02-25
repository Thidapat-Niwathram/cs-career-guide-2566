@extends('layout.myapp')
@section('pagetitle')
    <h4 class="page-title pull-left">Information</h4>
@endsection
@section('content')
<style>

    form {
        max-width: 400px; /* กำหนดความกว้างสูงสุดของฟอร์มเป็น 500px */
        margin: 0 auto; /* จัดศูนย์กลางตามแนวนอน */
    }

    .form-control,.form-select {
        margin-left: 5rem;
    }
    .btn{
        margin-right: 0px;
    }
</style>

    <div class="container">
        <form class="container-fluid" action="/">
            <div class="row mb-3">
                <label for="id" class="col-sm-2 col-form-label">รหัสนักศึกษา</label>
                <div class="col-sm-10">
                    <input type="id" class="form-control" id="id" placeholder="Enter ID" name="id">
                </div>
            </div>
            <div class="row mb-3">
                <label for="nameth" class="col-sm-2 col-form-label">ชื่อ (ภาษาไทย)</label>
                <div class="col-sm-10">
                <input type="nameth" class="form-control" id="nameth" placeholder="Enter Thai Name" name="nameth">
                </div>
            </div>
            <div class="row mb-3">
                <label for="surnameth" class="col-sm-2 form-label">ชื่อ (ภาษาอังกฤษ)</label>
                <div class="col-sm-10">
                <input type="surnameth" class="form-control" id="surnameth" placeholder="Enter Thai Surname" name="surnameth">
                </div>
            </div>
            <div class="row mb-3">
                <label for="nameeng" class="col-sm-2 form-label">ชื่อ (ภาษาอังกฤษ)</label>
                <div class="col-sm-10">
                <input type="nameeng" class="form-control" id="nameeng" placeholder="Enter ENG Name" name="nameeng">
                </div>
            </div>
            <div class="row mb-3">
                <label for="surnameeng" class="col-sm-2 form-label">ชื่อ (ภาษาไทย)</label>
                <div class="col-sm-10">
                <input type="surnameeng" class="form-control" id="surnameeng" placeholder="Enter ENG Surname" name="surnameeng">
                </div>
            </div>
            <div class="row mb-3">
                <label for="email" class="col-sm-2 form-label">อีเมล</label>
                <div class="col-sm-10">
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                </div>
            </div>
            <div class="row mb-3">
                <label for="tel" class="col-sm-2 form-label">เบอร์โทรศัพท์</label>
                <div class="col-sm-10">
                <input type="tel" class="form-control" id="tel" placeholder="Enter tel" name="tel">
                </div>
            </div>
            <div class="row mb-3">
                <label for="year" class="col-sm-2 form-label">ชั้นปี</label>
                <div class="col-sm-10">
                    <select class="form-select">
                        <option disabled selected>-- year --</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                    </select>
                </div>
            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button type="save" id="saveButton" class="btn btn-primary me-md-2">Save</button>
            </div>

        </form>
    </div>



@endsection

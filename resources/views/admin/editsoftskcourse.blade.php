@extends('layout.menuadmin')
@section('pagetitle')
    <h4 class="page-title pull-left">Edit Course Of Soft Skill</h4>
@endsection
@section('content')
    <style>
        .form-control{
            width: 70%;
        }
    </style>
    <div  class="container-fluid p-3" style="width: 300px;">
        <button class="btn btn-primary me-md-2 addButton" type="button" style="width: 100px; margin-left: 5rem;" onclick="addRow()">Add</button>
    </div>

    <table id="courseTable" class="container p-2 table table-bordered border-primary table-light">
        <tr class="text-center">
            <th>Course ID</th>
            <th>Weight</th>
            <th></th>
        </tr>
        <tr  class="align-items-center">
            <td><input type="text" name="subject" class="form-control" placeholder="Input course id"></td>
            <td>
                <div class="col-sm-10">
                    <select class="form-select" >
                        <option>0</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                    </select>
                </div>
            </td>
            <td>
                <div class="d-grid gap-2 d-md-flex">
                    <button class="btn btn-primary me-md-2 deleteButton" type="button" style="background-color: #dc3545">Delete</button>
                </div>
            </td>
        </tr>

    </table>
    <div class="d-flex justify-content-between">
        <button class="btn btn-primary" type="button" onclick="window.location.href='{{ url('editsoftskill') }}'">Back</button>
        <div></div>
        <button class="btn btn-primary" type="button" onclick="window.location.href='{{ url('editsoftskcareer') }}'">Next</button>
    </div>


@endsection
@section('script')
    <script>
        function addRow() {
            var table = document.getElementById("courseTable");
            var row = table.insertRow(-1); // เพิ่มแถวใหม่ที่ตำแหน่งสุดท้าย

            var cell1 = row.insertCell(0);
            var cell2 = row.insertCell(1);
            var cell3 = row.insertCell(2);

            cell1.innerHTML = '<input type="text" name="subject" class="form-control" placeholder="Input course id">';
            cell2.innerHTML = '<div class="col-sm-10"><select class="form-select"><option disabled selected>--  --</option><option>A</option><option>B+</option><option>B</option><option>C+</option><option>C</option><option>D+</option><option>D</option><option>F</option></select></div>';
            cell3.innerHTML = '<div class="d-grid gap-2 d-md-flex"><button class="btn btn-primary me-md-2 deleteButton" type="button" style="background-color: #dc3545" onclick="deleteRow(this)">Delete</button></div>';
        }

        function deleteRow(button) {
            var row = button.parentNode.parentNode.parentNode; // รับแถวที่มีปุ่ม Delete อยู่
            row.parentNode.removeChild(row); // ลบแถว
        }
    </script>

@endsection

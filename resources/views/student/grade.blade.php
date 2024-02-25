@extends('layout.myapp')
@section('pagetitle')
    <h4 class="page-title pull-left">Information</h4>
@endsection
@section('content')
    <style>
        /* กำหนดระยะห่างระหว่างเซลล์ในตาราง */
        #tbl td {
            padding: 10px; /* ปรับระยะห่างด้านในของเซลล์ */
            padding-left: 3rem;
        }
        .form-select{
            width: 70px;
        }
        .form-control{
            width: 300px;
        }
        /* ให้เซลล์ในตาราง (td) อยู่กลาง */
        #tbl td {
            text-align: center;
        }


    </style>

    <div class="d-grid gap-3 col-4 mx-auto">
        <form id="myForm" action="/">
            <table id="tbl">
                <tbody>
                <tr>
                    <td>ชื่อวิชา</td>
                    <td>เกรด</td>
                </tr>
                <tr>
                    <td><input type="text" name="subject" class="form-control"></td>
                    <td>
                        <div class="col-sm-10">
                            <select class="form-select" >
                                <option disabled selected>--  --</option>
                                <option>A</option>
                                <option>B+</option>
                                <option>B</option>
                                <option>C+</option>
                                <option>C</option>
                                <option>D+</option>
                                <option>D</option>
                                <option>F</option>
                            </select>
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button class="btn btn-primary me-md-2"  id="addButton" type="button">Add</button>
            </div>
        </form>
    </div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const addButton = document.getElementById('addButton');
        const tableBody = document.querySelector('#tbl tbody');

        addButton.addEventListener('click', function() {
            const newRow = document.createElement('tr');
            newRow.innerHTML = `
            <td><input type="text" name="subject" class="form-control"></td>
            <td>
                <div class="col-sm-10">
                    <select class="form-select">
                        <option disabled selected>--  --</option>
                        <option>A</option>
                        <option>B+</option>
                        <option>B</option>
                        <option>C+</option>
                        <option>C</option>
                        <option>D+</option>
                        <option>D</option>
                        <option>F</option>
                    </select>
                </div>
            </td>
        `;
            tableBody.appendChild(newRow);
        });
    });

</script>



@endsection

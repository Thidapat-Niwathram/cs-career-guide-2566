@extends('layout.myapp')
@section('pagetitle')
    <h4 class="page-title pull-left">Question</h4>
@endsection
@section('content')
    <link href="stylesheet" href="../css/home.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        td, th {
            border: 1px solid #ccc;
            padding: 10px;

        }
        table {
            border-collapse: collapse;
            margin-bottom: 50px; /* Add margin to the bottom */
        }
        th:empty {
            border: 0;
        }
        .question {
            width: 500px; /* Set the width of td */
            font-size: 18px;
            text-align: left; /* Center align the text horizontally */
            vertical-align: middle; /* Center align the text vertically */
        }

        input[type="radio"] {
            width: 20px; /* Set the width */
            height: 20px; /* Set the height */
        }
        .text-center{
            width: 150px;
        }
    </style>

    <h2 class="container-fluid" style=" padding-left:3rem">คำถามด้านบุคลิกภาพ</h2>
    <p class="container" style="text-indent: 3rem; font-size: 20px; margin-top: 20px;">แบบทดสอบมี 35 ข้อ ให้อ่านข้อความในด้านซ้ายมือและให้เลือกคำตอบ ( 1 – 3 ) โดยทำเครื่องหมาย ให้ตรงกับบุคลิกลักษณะนิสัยในการทำงานของท่านมากที่สุด เพียงคำตอบเดียว</p>
    <table class="container">
        <tr class="text-center">
            <th>  </th>
            <th>1</th>
            <th>2</th>
            <th>3</th>
        </tr>
        <tr>
            <td class="question">1. ฉันไม่ใช้ความรู้สึกในการตัดสินใจ</td>
            <td class="text-center"><input type="radio" name="row-1" data-col="1"></td>
            <td class="text-center"><input type="radio" name="row-1" data-col="2"></td>
            <td class="text-center"><input type="radio" name="row-1" data-col="3"></td>
        </tr>
        <tr>
            <td class="question">2. ฉันเป็นคนมีเหตุผล</td>
            <td class="text-center"><input type="radio" name="row-2" data-col="1"></td>
            <td class="text-center"><input type="radio" name="row-2" data-col="2"></td>
            <td class="text-center"><input type="radio" name="row-2" data-col="3"></td>
        </tr>
        <tr>
            <td class="question">3. ฉันเป็นคนละเอียดรอบคอบ</td>
            <td class="text-center"><input type="radio" name="row-3" data-col="1"></td>
            <td class="text-center"><input type="radio" name="row-3" data-col="2"></td>
            <td class="text-center"><input type="radio" name="row-3" data-col="3"></td>
        </tr>
        <tr>
            <td class="question">4. ฉันชอบใช้วิจารณญาณในการตัดสินหรือการประเมินค่าสิ่งต่าง ๆ</td>
            <td class="text-center"><input type="radio" name="row-3" data-col="1"></td>
            <td class="text-center"><input type="radio" name="row-3" data-col="2"></td>
            <td class="text-center"><input type="radio" name="row-3" data-col="3"></td>
        </tr>
        <tr>
            <td class="question">5. ฉันชอบสังเกตสิ่งต่าง ๆ ที่อยู่รอบตัว</td>
            <td class="text-center"><input type="radio" name="row-3" data-col="1"></td>
            <td class="text-center"><input type="radio" name="row-3" data-col="2"></td>
            <td class="text-center"><input type="radio" name="row-3" data-col="3"></td>
        </tr>
        <tr>
            <td class="question">6. ฉันเป็นคนมีมนุษยสัมพันธ์</td>
            <td class="text-center"><input type="radio" name="row-3" data-col="1"></td>
            <td class="text-center"><input type="radio" name="row-3" data-col="2"></td>
            <td class="text-center"><input type="radio" name="row-3" data-col="3"></td>
        </tr>
        <tr>
            <td class="question">7. ฉันชอบรับฟัง และ พูดคุยกับผู้อื่น</td>
            <td class="text-center"><input type="radio" name="row-3" data-col="1"></td>
            <td class="text-center"><input type="radio" name="row-3" data-col="2"></td>
            <td class="text-center"><input type="radio" name="row-3" data-col="3"></td>
        </tr>
        <tr>
            <td class="question">8. ฉันมีความสามารถในการติดต่อ ประสานงานกับผู้อื่น</td>
            <td class="text-center"><input type="radio" name="row-3" data-col="1"></td>
            <td class="text-center"><input type="radio" name="row-3" data-col="2"></td>
            <td class="text-center"><input type="radio" name="row-3" data-col="3"></td>
        </tr>
        <tr>
            <td class="question">9. ฉันเป็นคนชอบเข้าสังคม</td>
            <td class="text-center"><input type="radio" name="row-3" data-col="1"></td>
            <td class="text-center"><input type="radio" name="row-3" data-col="2"></td>
            <td class="text-center"><input type="radio" name="row-3" data-col="3"></td>
        </tr>
        <tr>
            <td class="question">10. ฉันมีความสามารถในการเล่าเรื่องผ่านการพูด และ การเขียน</td>
            <td class="text-center"><input type="radio" name="row-3" data-col="1"></td>
            <td class="text-center"><input type="radio" name="row-3" data-col="2"></td>
            <td class="text-center"><input type="radio" name="row-3" data-col="3"></td>
        </tr>
    </table>
@endsection


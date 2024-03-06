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

    {{--    <h2 class="container-fluid" style=" padding-left:3rem">คำถามด้านบุคลิกภาพ</h2>--}}
    {{--    <p class="container" style="text-indent: 3rem; font-size: 20px; margin-top: 20px;">แบบทดสอบมี 35 ข้อ ให้อ่านข้อความในด้านซ้ายมือและให้เลือกคำตอบ ( 1 – 3 ) โดยทำเครื่องหมาย ให้ตรงกับบุคลิกลักษณะนิสัยในการทำงานของท่านมากที่สุด เพียงคำตอบเดียว</p>--}}
    {{--    <div class="progress" id="progressBar">--}}
    {{--        <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>--}}
    {{--    </div>--}}
    <table class="container">
        <tr class="text-center">
            <th>  </th>
            <th>1</th>
            <th>2</th>
            <th>3</th>
        </tr>
        <tr>
            <td class="question">31. ฉันไม่ใช้ความรู้สึกในการตัดสินใจ</td>
            <td class="text-center"><input type="radio" name="row-31" data-col="1"></td>
            <td class="text-center"><input type="radio" name="row-31" data-col="2"></td>
            <td class="text-center"><input type="radio" name="row-31" data-col="3"></td>
        </tr>
        <tr>
            <td class="question">32. ฉันเป็นคนมีเหตุผล</td>
            <td class="text-center"><input type="radio" name="row-32" data-col="1"></td>
            <td class="text-center"><input type="radio" name="row-32" data-col="2"></td>
            <td class="text-center"><input type="radio" name="row-32" data-col="3"></td>
        </tr>
        <tr>
            <td class="question">33. ฉันเป็นคนละเอียดรอบคอบ</td>
            <td class="text-center"><input type="radio" name="row-33" data-col="1"></td>
            <td class="text-center"><input type="radio" name="row-33" data-col="2"></td>
            <td class="text-center"><input type="radio" name="row-33" data-col="3"></td>
        </tr>
        <tr>
            <td class="question">34. ฉันชอบใช้วิจารณญาณในการตัดสินหรือการประเมินค่าสิ่งต่าง ๆ</td>
            <td class="text-center"><input type="radio" name="row-34" data-col="1"></td>
            <td class="text-center"><input type="radio" name="row-34" data-col="2"></td>
            <td class="text-center"><input type="radio" name="row-34" data-col="3"></td>
        </tr>
        <tr>
            <td class="question">35. ฉันชอบสังเกตสิ่งต่าง ๆ ที่อยู่รอบตัว</td>
            <td class="text-center"><input type="radio" name="row-35" data-col="1"></td>
            <td class="text-center"><input type="radio" name="row-35" data-col="2"></td>
            <td class="text-center"><input type="radio" name="row-35" data-col="3"></td>
        </tr>

    </table>
    <div class="d-flex justify-content-between">
        <button class="btn btn-primary" type="button" onclick="window.location.href='{{ url('qt3') }}'">Back</button>
        <div></div>
        <button class="btn btn-primary" type="button" onclick="window.location.href='{{ url('courseguide') }}'">Submit</button>
    </div>
@endsection

{{--@section('script')--}}
{{--    <script>--}}
{{--        // เรียกใช้ฟังก์ชั่นเมื่อมีการคลิก input radio--}}
{{--        document.querySelectorAll('input[type="radio"]').forEach(function(radio) {--}}
{{--            radio.addEventListener('change', updateProgress);--}}
{{--        });--}}

{{--        function updateProgress() {--}}
{{--            var totalQuestions = 35; // จำนวนคำถามทั้งหมด--}}
{{--            var answeredQuestions = document.querySelectorAll('input[type="radio"]:checked').length; // จำนวนคำถามที่ตอบแล้ว--}}
{{--            var progressPercent = (answeredQuestions / totalQuestions) * 100; // เปอร์เซ็นต์ความก้าวหน้า--}}

{{--            var progressBar = document.querySelector('.progress-bar');--}}
{{--            progressBar.style.width = progressPercent + '%'; // ปรับความกว้างของ progress bar--}}
{{--            progressBar.setAttribute('aria-valuenow', progressPercent); // อัปเดตค่า aria-valuenow--}}
{{--        }--}}
{{--    </script>--}}

{{--@endsection--}}

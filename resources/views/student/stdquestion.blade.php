{{--@extends('layout.myapp')--}}
{{--@section('pagetitle')--}}
{{--    <h4 class="page-title pull-left">Question</h4>--}}
{{--@endsection--}}
{{--@section('content')--}}
{{--    <link href="stylesheet" href="../css/home.css">--}}
{{--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">--}}
{{--    <style>--}}
{{--        td, th {--}}
{{--            border: 1px solid #ccc;--}}
{{--            padding: 10px;--}}

{{--        }--}}
{{--        table {--}}
{{--            border-collapse: collapse;--}}
{{--            margin-bottom: 50px; /* Add margin to the bottom */--}}
{{--        }--}}
{{--        th:empty {--}}
{{--            border: 0;--}}
{{--        }--}}
{{--        .question {--}}
{{--            width: 500px; /* Set the width of td */--}}
{{--            font-size: 18px;--}}
{{--            text-align: left; /* Center align the text horizontally */--}}
{{--            vertical-align: middle; /* Center align the text vertically */--}}
{{--        }--}}

{{--        input[type="radio"] {--}}
{{--            width: 20px; /* Set the width */--}}
{{--            height: 20px; /* Set the height */--}}
{{--        }--}}
{{--        .text-center{--}}
{{--            width: 150px;--}}
{{--        }--}}
{{--    </style>--}}

{{--    <h2 class="container-fluid" style=" padding-left:3rem">คำถามด้านบุคลิกภาพ</h2>--}}
{{--    <p class="container" style="text-indent: 3rem; font-size: 20px; margin-top: 20px;">แบบทดสอบมี 35 ข้อ ให้อ่านข้อความในด้านซ้ายมือและให้เลือกคำตอบ ( 1 – 3 ) โดยทำเครื่องหมาย ให้ตรงกับบุคลิกลักษณะนิสัยในการทำงานของท่านมากที่สุด เพียงคำตอบเดียว</p>--}}

{{--    <form method="POST" action="{{ route('stdquestion.submit') }}">--}}
{{--        @csrf--}}
{{--        <table class="container">--}}
{{--            <tr class="text-center">--}}
{{--                <th></th>--}}
{{--                @for ($i = 1; $i <= 3; $i++)--}}
{{--                    <th>{{ $i }}</th>--}}
{{--                @endfor--}}
{{--            </tr>--}}
{{--            @foreach ($questions as $key => $question)--}}
{{--                <tr>--}}
{{--                    <td class="question">{{ $question }}</td>--}}
{{--                    @for ($i = 1; $i <= 3; $i++)--}}
{{--                        <td class="text-center">--}}
{{--                            <input type="radio" name="row-{{ $key }}" data-col="{{ $i }}">--}}
{{--                        </td>--}}
{{--                    @endfor--}}
{{--                </tr>--}}
{{--            @endforeach--}}
{{--        </table>--}}
{{--        <button type="submit">Submit</button>--}}
{{--    </form>--}}

{{--@endsection--}}


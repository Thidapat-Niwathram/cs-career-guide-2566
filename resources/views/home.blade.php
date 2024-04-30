<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="stylesheet" href="../css/home.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .text-cover {
            text-decoration: underline;
            position: absolute;
            top: 30%; /* Vertically center the text */
            left: 50%; /* Horizontally center the text */
            transform: translate(-50%, -50%);
        }

        .background-image-container {
            background-image: url('image/cover.jpg');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 5rem;
            height: 300px;
        }

        .card {
            padding: 2rem;
            width: 18rem;
            /* margin-left: 5rem; */
            margin: 50px;
        }

        .row {
            padding-top: -2rem;
        }

        .btn {
            margin-top: 2rem;
            margin-right: 3rem;
            padding-top: -3rem;
        }

        h1 {
            margin-top: 2rem;
        }

        #login {
            margin-bottom: 2rem;
            width: 150px;
        }
    </style>

</head>
<body>
<!-- nav -->
<nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="image/cplogo2.png" alt="" width="250" height="70">
        </a>
        <form class="d-flex ms-auto" action="{{ route('login') }}">
            <button class="btn btn-primary" type="submit" id="login">Login</button>
        </form>
    </div>
</nav>

<div class="container-fluid p-100 background-image-container text-white text-center">
    <h1>College of Computing Khon Kaen University</h1>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <h2 style="padding-top: 2rem; padding-left:2rem">Population Career</h2>
        </div>
        <div class="col  col-4 align-self-center text-end">
            <a href="{{ url('qt') }}" class="btn btn-primary btn-lg" role="button">Find Your Career</a>
        </div>
    </div>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="card">
            <img src="image/data.png" class="card-img-top" alt="...">
            <div class="card-body">
                <a href="url">Data Analyst</a>
            </div>
        </div>
        <div class="card">
            <img src="image/frontend.png" class="card-img-top" alt="...">
            <div class="card-body">
                <a href="url">Frontend Developer</a>
            </div>
        </div>
        <div class="card">
            <img src="image/tester.png" class="card-img-top" alt="...">
            <div class="card-body">
                <a href="url" style="text-align: center;">Software Tester</a>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="card">
            <img src="image/mobile.png" class="card-img-top" alt="...">
            <div class="card-body">
                <a href="url">Mobile Developer</a>
            </div>
        </div>
        <div class="card">
            <img src="image/network.png" class="card-img-top" alt="...">
            <div class="card-body">
                <a href="url">Network Engineering</a>
            </div>
        </div>
        <div class="card">
            <img src="image/uxui.png" class="card-img-top" alt="...">
            <div class="card-body">
                <a href="url">UX-UI Designer</a>
            </div>
        </div>
    </div>
</div>
</body>
</html>

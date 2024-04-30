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
        h2{
            margin-top: 1rem;
        }

        .card {
            padding: 2rem;
            width: 18rem;
            /* margin-left: 5rem; */
            margin: 50px auto;
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

<div class="container">
    <h2 class="text-center">Software Tester</h2>

    <img src="image/tester.png" class="card" alt="..." >

</div>
</body>
</html>

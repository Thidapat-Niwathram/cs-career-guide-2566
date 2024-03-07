<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }
        .btn{
            border-radius: 10px; /* เปลี่ยนจาก 10% เป็น 10px */
            margin: 4%;
            width: 100px;
        }
        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .form-floating {
            border-radius: 10px; /* เปลี่ยนจาก 10% เป็น 10px */
            margin: 4%;
        }

        .form-signin {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* เพิ่มเอฟเฟกต์เมื่อเม้าส์ hover ที่ปุ่ม Sign in */
        .btn-primary:hover {
            background-color: #004085; /* เปลี่ยนสีเมื่อ hover */
            border-color: #004085; /* เปลี่ยนสีขอบเมื่อ hover */
        }

        /* ปรับสีของปุ่ม Sign in */
        .btn-primary {
            background-color: #007bff; /* สีพื้นหลัง */
            border-color: #007bff; /* สีขอบ */
        }

        /* ปรับสีของ label */
        label {
            color: #007bff; /* สีข้อความ */
        }

        /* ปรับขนาดของรูปภาพโลโก้ */
        img {
            width: 250px; /* กำหนดความกว้าง */
            height: auto; /* ให้ความสูงปรับตามอัตราส่วน */
            margin-bottom: 1rem; /* เพิ่มช่องว่างด้านล่างของรูป */
        }
    </style>



    <!-- Custom styles for this template -->
    <!-- <link href="signin.css" rel="stylesheet"> -->
  </head>
  <body class="text-center d-flex">
<div class="container p-5 my-2 border">
    <main class="form-signin" >
      <form action="">
        <img  src="image/cplogo.png" alt="" width="250" height="120">
        <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

        <div class="form-floating">
          <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
          <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating">
          <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
          <label for="floatingPassword">Password</label>
        </div>

        <div class="checkbox mb-3">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="w-90 btn btn-primary" type="submit" >Sign in</button>
        <!-- <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p> -->
      </form>
    </main>
  </div>
  </body>
</html>

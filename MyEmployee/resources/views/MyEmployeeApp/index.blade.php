<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyEmployee | Login</title>
    <link rel="icon" href="{{ asset('images/MyEmployee-Logo.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Albert+Sans:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <style>
        body {
            background-color: #253D90;
        }

        .card-center {
            display: flex;
            justify-content: center;
            align-items: center;
        }


    </style>
</head>

<body>
    <h1 style="font-family:albert sans; font-size: 75px; position: absolute; left: 25cm; top: 8.5cm;"><span style="color: #FFC20E;"><b>My</b></span><span style="color: white;"><b>Employee</b></span></h1>
    <img src="{{ asset('images/MyEmployee-Logo.png') }}" alt="logo" style="position: absolute; width: 120px; height: auto; top: 8.2cm; left: 21.5cm;">
    <div class="container">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="card card-center" style="width: 40%; height: 100%; position: absolute; left: 0cm;">
                <div class="mb-3" style="width: 75%;">
                    <h1 style="font-family: albert sans; color: #253D90;"><b>Login!</b></h1>
                    <h5 style="font-family: albert sans; color: #969696; padding-bottom: 1cm;">Masuk ke Akun Anda!</h5>
                    <label for="email" class="form-label" style="font-family: albert sans; color:#253D90; font-size: 14px;"><b>Alamat E-mail</b></label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Masukkan E-mail Anda" aria-describedby="emailHelp">
                </div>
                <div class="mb-3" style="width: 75%;">
                    <label for="password" class="form-label" style="font-family: albert sans; color:#253D90; font-size: 14px;"><b>Password</b></label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Masukkan Password" aria-describedby="emailHelp">
                </div>
                <div style="width: 75%;">
                    <a href="{{ route('register') }}" style="color: #253D90; position: relative; left: 10cm; font-size: 14px;"><b>Belum punya akun?</b></a>
                    <button type="submit" style="font-family: albert sans; color: white; background-color: #253D90; border-radius: 5px; width: 510px; height: 40px; position: relative;">Sign in</button>
                </div>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>
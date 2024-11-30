<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="icon" href="{{ asset('images/MyEmployee-Logo.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Albert+Sans:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <style>
        body {
            background-color: #e1ebf5;
            font-family: 'Albert Sans', 'sans-serif';
        }

        .custom-navbar {
            background-color: #253D90;
            width: 100%;
            height: 90px;
            position: absolute;
            left: 0;
        }

        a.nav-link {
            color: white;
            transition: ease-in-out 0.3s;
        }

        a.nav-link:hover {
            transform: translateY(-5px);
            color: #FFC20E;
        }

        a.navbar-brand {
            transition: transform 0.3s ease-in-out;
        }

        a.navbar-brand:hover {
            transition: ease-in-out 0.3s;
            transform: scale(1.1);
        }

        .navbar-inside {
            font-size: large;
        }

        .home-nav {
            font-size: 35px;
            margin-left: 3cm;
        }

        ul.navbar-nav {
            position: relative;
            display: flex;
            align-items: center;
            justify-items: center;
            flex-direction: row;
            gap: 35px;
            margin-left: 2cm;
        }

        .nav-higlighter {
            position: absolute;
            bottom: -0.63cm;
            width: 0px;
            height: 8px;
            background-color: #FFC20E;
            border-radius: 10px;
            z-index: 1;
        }

        .logout-button {
            background-color: #FFC20E;
            color: black;
            width: 100px;
            height: 45px;
            border-radius: 10px;
            box-shadow: 3px 3px 8px black;
            position: relative;
            left: 15cm;
            transition: transform 0.3s ease-in-out;
        }

        .logout-button:hover {
            transform: scale(1.1);
        }

        .custom-logo {
            max-width: 75px;
            padding-right: 0.5cm;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom-navbar">
            <div class="container-fluid navbar-inside">
                <a class="navbar-brand home-nav" href="#" style="color: white;"><span style="color: #FFC20E;"><img
                    class="custom-logo" src="{{ asset('images/MyEmployee-Logo.png') }}"
                    alt="Logo"><b>My</b></span><b>Employee</b>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav" id="navItem">
                        <div class="nav-higlighter"></div>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('profil') }}">Profil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Notifikasi</a>
                        </li>
                    </ul>
                    <form action="{{ route('logout')}}" method="post">
                        @csrf
                        <button type="submit" class="logout-button">Log Out!</button>
                    </form>
                </div>
            </div>
        </nav>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
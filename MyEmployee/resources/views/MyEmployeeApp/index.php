<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyEmployee | Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Albert+Sans:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <style>
        body {
            background-color: #253D90;
            color: white;
            font-family: "Albert Sans", sans-serif;
        }

        .box-decor {
            position: absolute;
            width: 100px;
            height: 10px;
            background-color: #FFC20E;
            border-radius: 20px;
        }

        .left {
            background-color: white;
            color: #253D90;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 3rem;
        }

        .right {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .right h1 {
            font-size: 4rem;
            text-align: center;
            font-weight: bolder;
        }

        .custom-logo {
            max-width: 200px;
        }
    </style>
</head>

<body>
    <div class="container-fluid vh-100">
        <div class="row h-100">

            <div class="col-12 col-md-5 left">
                <h2 class="mb-4"><b>Login</b></h2>
                <p class="mb-4">Masuk ke akun Anda untuk melanjutkan</p>
                <form>
                    <div class="mb-3">
                        <label for="email" class="form-label"><b>E-mail</b></label>
                        <input type="email" id="email" class="form-control" placeholder="Masukkan E-mail Anda">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label"><b>Password</b></label>
                        <input type="password" id="password" class="form-control">
                    </div>
                    <div class="mb-3 text-end">
                        <a href="#" class="text-decoration-none" style="color: #253D90;"><b>Lupa password?</b></a>
                    </div>
                    <button type="submit" class="btn btn-primary w-100" style="background-color: #253D90">Login</button>
                    <div class="mb-3 text-center" style="padding-top: 0.5cm;">
                        <p>Belum terdaftar? <span><a href="" style="color: #253D90;"><b>Daftar Disini</b></a></span></p>
                    </div>
                </form>
            </div>

            <div class="col-12 col-md-6 right">
                <div class="box-decor" style="top:16cm; left:2cm;"></div>
                <div class="box-decor" style="top:16cm; left:5cm; background-color: white;"></div>
                <div class="box-decor" style="top:16cm; left:8cm; background-color: white;"></div>
                <h1>
                    <img src="assets/MyEmployee-Logo.png" alt="MyEmployee Logo" class="custom-logo mb-4">
                    <span style="color: #FFC20E;">My</span>Employee
                </h1>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous">
    </script>
</body>

</html>
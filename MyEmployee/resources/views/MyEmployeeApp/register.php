<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyEmployee | Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Albert+Sans:wght@100..900&family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #253D90;
            font-family: 'Albert Sans', sans-serif;
        }

        .left-section {
            background-color: #253D90;
            color: white;
            padding: 3rem;
        }

        .left-section h1 {
            font-size: 3rem;
            color: white;
        }

        .left-section h2 {
            font-size: 2rem;
        }

        .box-decor {
            width: 100px;
            height: 10px;
            background-color: white;
            border-radius: 20px;
        }

        .redirect-button {
            background-color: #FFC20E;
            color: black;
            border: none;
            padding: 0.75rem 1.5rem;
            border-radius: 10px;
            box-shadow: 3px 4px 10px black;
            font-weight: bold;
        }

        .card {
            padding: 2rem;
            margin-top: 15.2rem;
            margin-bottom: 15.2rem;
        }

        .register-button {
            background-color: #253D90;
            color: white;
            border: none;
            padding: 0.75rem 2rem;
            border-radius: 10px;
            font-size: 1.2rem;
            width: 25%;
            height: auto;
        }

        label {
            font-weight: bold;
            font-size: 0.9rem;
            color: #253D90;
        }

        input[type="checkbox"] {
            transform: scale(1.2);
            margin-right: 0.5rem;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-5 left-section d-flex flex-column justify-content-center align-items-start">
                <img src="assets/MyEmployee-Logo.png" alt="Logo" style="width: 120px;">
                <h1><span style="color: #FFC20E;">My</span>Employee</h1>
                <h2>Portal Sistem Informasi Pegawai</h2>
                <div class="box-decor my-3"></div>
                <button class="redirect-button">Sudah Punya Akun?</button>
            </div>
            <div class="col-lg-7 bg-white">
                <div class="card">
                    <h1 class="text-primary"><b>Selamat Datang di <span style="color: #FFC20E;">My</span>Employee</b></h1>
                    <p class="text-muted fs-5">Daftar Sekarang!</p>
                    <form>
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label for="nama">Nama</label>
                                <input type="text" id="nama" class="form-control" placeholder="Masukkan nama">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="email">Alamat E-mail</label>
                                <input type="email" id="email" class="form-control" placeholder="Masukkan e-mail">
                            </div>
                            <div class="col-md-6">
                                <label for="phone">Nomor Telepon</label>
                                <input type="text" id="phone" class="form-control" placeholder="Masukkan nomor telepon">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="password">Password</label>
                                <input type="password" id="password" class="form-control" placeholder="Masukkan password">
                            </div>
                            <div class="col-md-6">
                                <label for="confirmPassword">Konfirmasi Password</label>
                                <input type="password" id="confirmPassword" class="form-control" placeholder="Ulangi password">
                            </div>
                        </div>
                        <div class="form-check mb-4">
                            <input type="checkbox" id="agree" class="form-check-input">
                            <label for="agree" class="form-check-label text-muted">
                                Saya setuju dengan semua <a href="#" class="text-decoration-none">syarat dan kebijakan privasi</a>.
                            </label>
                        </div>
                        <button type="submit" class="register-button">Buat Akun!</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
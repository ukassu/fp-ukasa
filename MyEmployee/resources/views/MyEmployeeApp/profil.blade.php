@extends ('MyEmployeeApp.layout')
@section('title', 'Profil')
@section('navbar')
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            .form-inside {
                display: grid;
                grid-template-columns: repeat(2,1fr);
                gap: 15px;
                justify-content: center;
                align-items: center;
            }

            .button-position {
                position: relative;
                left: 5cm;
                padding-top: 0.5cm;
                padding-bottom: 0.5cm;
            }

            .update-button {
                width: 250px;
                background-color: #253D90;
                color: white;
                border-radius: 10px;
                border: solid #253D90;
                height: 40px;
                transition: transform ease-in-out 0.3s;
                box-shadow: 2px 4px 6px black;
            }

            .update-button:hover {
                background-color: #FFC20E;
                border: solid #FFC20E;
                font-weight: bold;
                color: black;
                transform: scale(1.05);
            }
        </style>
    </head>
    <body>
        <div class="container-fluid">
            <div style="position: absolute; top: 5cm; left: 20cm; width: 45%;" class="card">
                <div class="card-body">
                    <form>
                        @csrf
                        <div class="mb-3">
                          <label for="nama" class="form-label">Nama Lengkap</label>
                          <input type="text" class="form-control" name="nama" id="nama">
                        </div>
                        <div class="mb-3 form-inside">
                            <label for="gender" class="form-label"> Jenis Kelamin</label>
                            <label for="posisi" class="form-label">Posisi</label>
                            <input type="text" class="form-control" name="gender" id="gender">
                            <input type="text" class="form-control" name="posisi" id="posisi">
                        </div>
                        <div class="mb-3 form-inside">
                            <label for="ttl" class="form-label">Tanggal Lahir</label>
                            <label for="kota" class="form-label">Asal Kota</label>
                            <input type="date" class="form-control" name="ttl" id="ttl">
                            <input type="text" class="form-control" name="kota" id="kota">
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat Domisili</label>
                            <input type="text" class="form-control" name="alamat" id="alamat">
                        </div>
                        <div class="button-position">
                            <button type="submit" class="update-button">Update</button>
                        </div>
                      </form>
                </div>
            </div>
        </div>
    </body>
    </html>
@endsection
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
                    <form method="POST" action="{{ route('profil.update') }}">
                        @csrf
                        <div class="mb-3 form-inside">
                            <label for="email" class="form-label"> Email</label>
                            <label for="no_telp" class="form-label">No. Telepon</label>
                            <input type="text" value="{{ old('email', $users->email) }}" class="form-control" name="email" id="email">
                            <input type="text" value="{{ old('no_telp', $pegawai->no_telp) }}" class="form-control" name="no_telp" id="no_telp">
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
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

            .section-button {
                width: 250px;
                background-color: #253D90;
                color: white;
                border-radius: 10px;
                border: solid #253D90;
                height: 40px;
                transition: transform ease-in-out 0.3s;
                box-shadow: 2px 4px 6px black;
            }

            .section-button:hover {
                background-color: #FFC20E;
                border: solid #FFC20E;
                font-weight: bold;
                color: black;
                transform: scale(1.05);
            }

            .nav-button {
                margin-left: 3rem;
                margin-top: 1rem;
                margin-bottom: 1rem;
            }

            .navigation-section {
                position: absolute;
                top: 17rem;
                width: 25%;
                left: 5cm;
                border-radius: 1rem;
                box-shadow: 2px 2px 8px gray;
            }
            
        </style>
    </head>
    <body>
        <div class="container-fluid">
            <div class="card navigation-section">
                <div class="card-body">
                    <button class="section-button nav-button">Info Pribadi</button>
                    <button class="section-button nav-button">Kontak</button>
                </div>
            </div>
            <div style="position: absolute; top: 3cm; left: 20cm; width: 45%; box-shadow: 2px 2px 8px gray;" class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('profil.update') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="nik" class="form-label">NIK</label>
                            <input type="text" value="{{ old('nik', $pegawai->nik) }}" class="form-control" name="nik" id="nik" disabled>
                          </div>
                        <div class="mb-3">
                          <label for="name" class="form-label">Nama Lengkap</label>
                          <input type="text" value="{{ old('name', $pegawai->name) }}" class="form-control" name="name" id="name">
                        </div>
                        <!-- <div class="mb-3 form-inside">
                            <label for="email" class="form-label"> Email</label>
                            <label for="no_telp" class="form-label">No. Telepon</label>
                            <input type="text" value="{{ old('email', $users->email) }}" class="form-control" name="email" id="email">
                            <input type="text" value="{{ old('no_telp', $pegawai->no_telp) }}" class="form-control" name="no_telp" id="no_telp">
                        </div> -->
                        <div class="mb-3 form-inside">
                            <label for="jenis_kelamin" class="form-label"> Jenis Kelamin</label>
                            <label for="posisi" class="form-label">Posisi</label>
                            <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                                <option value="" {{ old('jenis_kelamin', $pegawai->jenis_kelamin) == '' ? 'selected' : '' }}></option>
                                <option value="Laki-laki" {{ old('jenis_kelamin', $pegawai->jenis_kelamin) == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                                <option value="Perempuan" {{ old('jenis_kelamin', $pegawai->jenis_kelamin) == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                            </select>
                            <input type="text" value="{{ old('posisi', $pegawai->posisi) }}" class="form-control" name="posisi" id="posisi">
                        </div>
                        <div class="mb-3 form-inside">
                            <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                            <label for="asal_kota" class="form-label">Asal Kota</label>
                            <input type="date" value="{{ old('tanggal_lahir', $pegawai->tanggal_lahir) }}" class="form-control" name="tanggal_lahir" id="tanggal_lahir">
                            <input type="text" value="{{ old('asal_kota', $pegawai->asal_kota) }}" class="form-control" name="asal_kota" id="asal_kota">
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat Domisili</label>
                            <input type="text" value="{{ old('alamat', $pegawai->alamat) }}" class="form-control" name="alamat" id="alamat">
                        </div>
                        <div class="button-position">
                            <button type="submit" class="section-button">Update</button>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </body>
    </html>
@endsection
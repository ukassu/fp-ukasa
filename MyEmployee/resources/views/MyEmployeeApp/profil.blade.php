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
                margin-left: 4rem;
                margin-top: 1rem;
                margin-bottom: 1rem;
            }

            .navigation-section {
                position: absolute;
                margin: 22rem 10rem 10rem 12rem;
                width: 25%; 
                border-radius: 1rem;
                box-shadow: 2px 2px 8px gray;
            }
            
        </style>
    </head>
    <body>
        <div class="container-fluid">
            <div class="card navigation-section">
                <div class="card-body">
                    <button id="btn-info" class="section-button nav-button">Info Pribadi</button>
                    <button id="btn-kontak" class="section-button nav-button">Kontak</button>
                </div>
            </div>
            <div id="tab-info">
                <x-info :pegawai="$pegawai" :action="route('profil.update')" />
            </div>
            <div id="tab-kontak" style="display: none;">
                <x-kontak :pegawai="$pegawai" :users="$users" :action="route('profil.update')" />
            </div>
        </div>
    </body>
    </html>
@endsection
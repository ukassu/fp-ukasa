@extends ('MyEmployeeApp.layout')
@section('title', 'Dashboard')
@section('navbar')
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>

            #clock {
                /* position: absolute; */
                margin-top:1rem;
                /* margin-left: 54rem; */
                width: 100%;
                height: auto;
                text-align: center;
                border-radius: 20px;
                font-size: 64px;
                color: #253D90;
                text-align: center;
                /* transition: transform ease-in-out 0.3s; */
            }

            /* #clock:hover {
                background-color: #FFC20E;
                color: black;
                transform: scale(1.02);
            } */

            #date {
                /* position: absolute;
                margin-top:36rem;
                margin-left: 54rem; */
                width: 100%;
                height: auto;
                background-image: url('{{ asset("images/pattern3.jpg") }}');
                box-shadow: 2px 2px 10px black;
                border-radius: 20px 20px 0 0;
                font-size: 48px;
                color: white;   
                text-align: center;
                /* transition: transform ease-in-out 0.3s; */
                
            }

            .calendar {
                position: absolute;
                margin-top: 32rem;
                margin-left: 54rem;
                width: 36%;
                background-color: white;
                border-radius: 20px;
                height: 13rem;
                box-shadow: 2px 2px 8px gray;
                transition: transform ease-in-out 0.3s;
            }

            .calendar:hover {
                transform: scale(1.02);
                box-shadow: 4px 6px 10px black;
            }

            div.carousel{
                position: absolute;
                width: 75%;
                margin-top: 4cm;
                margin-left: 5.5cm;
                border-radius: 10px;
                box-shadow: 2px 2px 8px gray;
                transition: transform ease-in-out 0.3s;
            }

            div.carousel:hover{
                transform: scale(1.02);
                box-shadow: 4px 6px 10px black;
            }

            div.carousel-inner{
                border-radius: 10px;
                background-color: gray;
            }

            .carousel-img {
                width: 100%;
                height: 100%;
                object-fit: fill;
            }

            .carous-buttonback-l {
                margin-left: 4rem;
                margin-top: 8rem;
                width: 3rem;
                height: 3rem;
                border-radius: 32px;
                background-color: gray
            }
            
            .carous-buttonback-r {
                margin-right: 4rem;
                margin-top: 8rem;
                width: 3rem;
                height: 3rem;
                border-radius: 32px;
                background-color: gray
            }

            .profile-card {
                position: absolute;
                perspective: 1000px;
                margin-top: 32rem;
                margin-left: 13rem;
                height: 13rem;
                border-radius: 20px;
                width: 36%;
                background-color: white;
                padding: 10px 10px 20px 10px;
                box-shadow: 2px 2px 8px gray;
                transition: transform ease-in-out 0.3s;
            }

            .profile-card-icon {
                margin-top: 0.5rem;
                margin-left: 4rem;
                width: 17%;
                height: 40%;
                border-radius: 46px;
                text-align: center;
                font-size: 96px;
                color: #253D90;
                box-shadow: 0px 0px 10px gray;
            }

            .profile-card-header {
                margin-bottom: 0.8rem;
                background-color: #253D90;
                border-radius: 15px 15px 0px 0px;
                text-align: center;
                width: 100%;
                height: auto;
                box-shadow: 2px 2px 8px gray;
                font-size: 30px;
                color: whitesmoke;
            }

            .profile-card-content {
                display: flex;
                flex-direction: row;
                gap: 2rem;
                box-sizing: border-box;
                flex: 1 1 50%;
            }

            .profile-card-text {
                display: flex;
                flex-direction: column;
                flex: 1 1 30%;
                margin-left: 3rem;
                text-align: left;
                background-color: #253D90;
                border-radius: 0px 0px 20px 0px;
                color: white;
                height: 8rem;
                width: 21rem;
                font-size: 18px;
                padding: 5px 10px 5px 15px;
                box-shadow: 0px 0px 8px gray;
            }

            .profile-card:hover {
                transform: scale(1.02);
                box-shadow: 4px 6px 10px black;
            }

            .dashboard-content-container {
                border-radius: 2rem;
                width: 75%;
                position: absolute;
                margin-top: 48rem;
                margin-left: 13rem;
                padding-top: 3rem;
                padding-left: 1rem;
                padding-right: 1rem;
                padding-bottom: 3rem;
                box-shadow: 2px 2px 8px gray;
            }
            
            .dasboard-content {
                display: flex;
                flex-wrap: wrap;
                flex-direction: row;
                gap: 1.5rem;
            }

            .dashboard-content-button {
                display: flex;
                align-items: center;
                justify-content: flex-start;
                background-color: #253D90;
                font-size: 24px;
                flex: 3 1 calc(33% - 2.5rem);
                box-sizing: border-box;
                border: solid #253D90;
                border-radius: 10px;
                box-shadow: 2px 2px 8px gray;
                color: white;
                padding: 15px;
                cursor: pointer;
                transition: transform ease-in-out 0.3s;
            }

            .dashboard-content-button:hover {
                transform: scale(1.02);
                border: solid #FFC20E;
                background-color: #FFC20E;
                color: black;
                box-shadow: 4px 6px 10px black;
            }

            .button-content {
                display: flex;
                align-items: center;
                gap: 20px;
            }

            .content-icon {
                font-size: 40px;
            }

            .button-text {
                display: flex;
                flex-direction: column;
                text-align: left;
            }

            .content-title {
                font-size: 18px;
                font-weight: bold;
                margin: 0;
            }

            .content-subtitle {
                font-size: 14px;
                margin: 0;
            }

            form {
                display: contents;
            }

            h1 {
                font-weight: bold;
            }

            span {
                font-family: "albert sans", "serif";
            }
            
        </style>
    </head>
    <body>
        <div id="announcementCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#announcementCarousel" data-bs-slide-to="0" class="active indicator" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#announcementCarousel" data-bs-slide-to="1" class="indicator"></button>
                    <button type="button" data-bs-target="#announcementCarousel" data-bs-slide-to="2" class="indicator"></button>
                </div>
                <div class="carousel-item active" style="height: 20rem;" data-bs-interval="4000">
                    <img src="{{ asset('images/announcehq.png') }}" class="carousel-img" alt="announce1">
                </div>
                <div class="carousel-item" style="height: 20rem;" data-bs-interval="4000">
                    <img src="{{ asset('images/announce2.png') }}" class="carousel-img" alt="announce2">
                </div>
                <div class="carousel-item" style="height: 20rem;" data-bs-interval="4000">
                    <img src="{{ asset('images/announce1.png') }}" class="carousel-img" alt="announce2">
                </div>
            </div>
                <button class="carousel-control-prev carous-buttonback-l" type="button" data-bs-target="#announcementCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next carous-buttonback-r" type="button" data-bs-target="#announcementCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button> 
        </div>
        <div class="profile-card">
            <form method="GET" action="{{ route('dashboard') }}">
                <p class="profile-card-header"><b> <span style="color: #FFC20E;">Welcome!,</span> {{ $pegawai->name }}</b></p>
            </form>
            <div class="profile-card-content">
                <i class="profile-card-icon fa-regular fa-circle-user"></i>
                <div class="profile-card-text">
                    <form action="get" action="{{ route('dashboard') }}">
                        <p><b><span style="color: #FFC20E;">Posisi :</span> {{ $pegawai->posisi }}</b></p>
                        <p><b><span style="color: #FFC20E;">Email :</span> {{ $pegawai->email_pribadi }}</b></p>
                        <p><b><span style="color: #FFC20E;">No.telp :</span> {{ $pegawai->no_telp }}</b></p>
                    </form>
                </div>
            </div>
        </div>
        <div class="calendar">
            <div id="date"></div>
            <div id="clock"></div>
        </div>
        <div class="card dashboard-content-container">
            <div class="card-body">
                <div class="dasboard-content">
                    <button class="dashboard-content-button" data-bs-toggle="modal" data-bs-target="#popUpBlocked">
                        <div class="button-content">
                            <i class="fa-solid fa-folder content-icon"></i>
                        <div class="button-text">
                            <div class="content-title">Dokumen</div>
                            <div class="content-subtitle">Atur dokumen disini!</div>
                        </div>
                    </button>
                    <form action="{{ route('task') }}" method="GET">
                        @csrf
                        <button class="dashboard-content-button" type="submit">
                            <div class="button-content">
                                <i class="fa-solid fa-list-check content-icon"></i>
                                <div class="button-text">
                                    <div class="content-title">Task</div>
                                    <div class="content-subtitle">Lihat tugas anda!</div>
                                </div>
                            </div>
                        </button>
                    </form>
                    <button type="button" class="dashboard-content-button" data-bs-toggle="modal" data-bs-target="#absenmodal">
                        <div class="button-content">
                            <i class="fa-solid fa-clock content-icon"></i>
                        <div class="button-text">
                            <div class="content-title">Jam Kerja</div>
                            <div class="content-subtitle">Jangan lupa absen!</div>
                        </div>
                    </button>
                    <button class="dashboard-content-button" data-bs-toggle="modal" data-bs-target="#popUpBlocked">
                        <div class="button-content">
                            <i class="fa-solid fa-briefcase content-icon"></i>
                        <div class="button-text">
                            <div class="content-title">Portofolio</div>
                            <div class="content-subtitle">Perbarui Portofolio.</div>
                        </div>
                        <button class="dashboard-content-button" data-bs-toggle="modal" data-bs-target="#popUpBlocked"> 
                            <div class="button-content">
                                <i class="fa-solid fa-user-tie content-icon"></i>
                            <div class="button-text">
                                <div class="content-title">MyCompany Profile</div>
                                <div class="content-subtitle">Profil anda di perusahaan.</div>
                            </div>
                        </button>
                        <button class="dashboard-content-button" data-bs-toggle="modal" data-bs-target="#popUpBlocked">
                            <div class="button-content">
                                <i class="fa-solid fa-file content-icon"></i>
                            <div class="button-text">
                                <div class="content-title">Report</div>
                                <div class="content-subtitle">Serahkan laporan disini.</div>
                            </div>
                        </button>
                    </button>
                    {{-- modal --}}
                    <div class="modal fade" id="absenmodal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                          <div class="modal-content">
                            <div class="modal-header" style="background-color: #253D90; color: white; box-shadow: 2px 2px 8px gray;">
                              <h1 class="modal-title fs-5" id="modalLabel">Absensi</h1>
                              <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('absen') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-success" style="width: 200px; margin: 0.5cm 1cm 0.5cm 0.3cm;">Mulai Bekerja</button>
                                </form>
                                <form action="{{ route('pulang') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-danger" style="width: 200px; margin-top: 0.5cm 0.3cm 0.5cm 0cm;">Selesai Bekerja</button>
                                </form>
                            </div>
                            <div class="modal-footer" style="box-shadow: 2px 2px 6px gray;">
                            </div>
                          </div>
                        </div>
                    </div>
                    <div class="modal fade" id="popUpBlocked" tabindex="-1" aria-labelledby="dokumenModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header" style="background-color: #253D90; color: white; box-shadow: 2px 2px 8px gray; text-align: center;">
                                    <h5 class="modal-title" id="dokumenModalLabel" style="font-weight: bold; margin: auto;">
                                        Maaf, fitur web masih dalam masa pengembangan!
                                    </h5>
                                </div>
                                <div class="modal-body" style="text-align: center; padding: 2rem;">
                                    <p style="color: #253D90; font-size: 16px;">
                                        Silakan kembali nanti untuk pembaruan lebih lanjut.
                                    </p>
                                </div>
                                <div class="modal-footer" style="justify-content: center; box-shadow: 2px 2px 8px gray;">
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal" style="width: 150px;">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </body>
</html>
@endsection
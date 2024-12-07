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
                background-position: fill;
                object-fit: cover;
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
        <div>
            <form method="GET" action="{{ route('dashboard') }}">
                <h1 style="position: absolute; margin-top: 14cm; margin-left: 5.5cm;">Welcome!, {{ $pegawai->name }}</h1>
            </form>
        </div>
        <div class="calendar">
            <div id="date"></div>
            <div id="clock"></div>
        </div>
        <div class="card dashboard-content-container">
            <div class="card-body">
                <div class="dasboard-content">
                    <button class="dashboard-content-button">
                        <div class="button-content">
                            <i class="fa-solid fa-folder content-icon"></i>
                        <div class="button-text">
                            <div class="content-title">Dokumen</div>
                            <div class="content-subtitle">Atur dokumen disini!</div>
                        </div>
                    </button>
                    <button class="dashboard-content-button">
                        <div class="button-content">
                            <i class="fa-solid fa-list-check content-icon"></i>
                        <div class="button-text">
                            <div class="content-title">Task</div>
                            <div class="content-subtitle">Lihat tugas anda!</div>
                        </div>
                    </button>
                    <button type="button" class="dashboard-content-button" data-bs-toggle="modal" data-bs-target="#absenmodal">
                        <div class="button-content">
                            <i class="fa-solid fa-clock content-icon"></i>
                        <div class="button-text">
                            <div class="content-title">Jam Kerja</div>
                            <div class="content-subtitle">Jangan lupa absen!</div>
                        </div>
                    </button>
                    <button class="dashboard-content-button">
                        <div class="button-content">
                            <i class="fa-solid fa-briefcase content-icon"></i>
                        <div class="button-text">
                            <div class="content-title">Portofolio</div>
                            <div class="content-subtitle">Perbarui Portofolio.</div>
                        </div>
                        <button class="dashboard-content-button">
                            <div class="button-content">
                                <i class="fa-solid fa-user-tie content-icon"></i>
                            <div class="button-text">
                                <div class="content-title">MyCompany Profile</div>
                                <div class="content-subtitle">Profil anda di perusahaan.</div>
                            </div>
                        </button>
                        <button class="dashboard-content-button">
                            <div class="button-content">
                                <i class="fa-solid fa-file content-icon"></i>
                            <div class="button-text">
                                <div class="content-title">Report</div>
                                <div class="content-subtitle">Serahkan laporan disini.</div>
                            </div>
                        </button>
                    </button>
                    {{-- modal --}}
                    <div class="modal fade" id="absenmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h1 class="modal-title fs-5" id="exampleModalLabel">Absensi</h1>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('absen') }}" method="POST">
                                    @csrf
                                    <button type="submit">Mulai Bekerja</button>
                                </form>
                                <form action="{{ route('pulang') }}" method="POST">
                                    @csrf
                                    <button type="submit">Selesai Bekerja</button>
                                </form>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>
        </div>
        <div class="footer-container">
            <p>Copyright &copy;2024; Designed by Ukasa</p>
        </div>
    </body>
</html>
@endsection
@extends ('MyEmployeeApp.layout')
@section('title', 'Dashboard')
@section('navbar')
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            div.carousel-inner{
                border-radius: 10px;
                background-color: gray;
            }

            .carousel-img {
                width: 100%;
                height: 100%;
                object-fit: fill;
            }

            button.indicator {
                border-radius: 10px;
                background-color: gray;
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

            h1 {
                font-weight: bold;
            }
        </style>
    </head>
    <body>
        <div id="announcementCarousel" class="carousel slide" data-bs-ride="carousel" style="width: 75%; position: absolute; top: 4cm; margin-left: 5.5cm;">
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
                    <img src="{{ asset('images/announce2.png') }}" class="carousel-img" alt="announce2">
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
                <h1 style="position: absolute; margin-top: 14cm; margin-left: 5.5cm;">Welcome!, nama</h1>
          </div>
    </body>
    </html>
@endsection
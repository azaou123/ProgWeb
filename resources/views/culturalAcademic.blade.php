<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>DHWB - UCA</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css"
        integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
    <!-- CSS Bootstrap -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Programs.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
        integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <!-- JS Bootstrap --->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

</head>
<style>
    ::after.carousel-item-1 {
        background: linear-gradient(180deg, #0000007d, #000000b7), url('../img/picture.jpg');
        height: 600px !important;
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
        position: relative;
        border-top-left-radius: 20px !important;
        border-top-right-radius: 20px !important;
    }

    .carousel-item-2 {
        background: url('../img/mer1.jpg');
        height: 600px !important;
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
        position: relative;
        border-top-left-radius: 20px !important;
        border-top-right-radius: 20px !important;
    }

    .carousel-item-3 {
        background: url('../img/mer3.jpg');
        height: 600px !important;
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
        position: relative;
        border-top-left-radius: 20px !important;
        border-top-right-radius: 20px !important;
    }

    .carousel-bo {
        position: relative !important;
        z-index: 1000 !important;
        margin-top: -70px;
        border-top-left-radius: 20px !important;
        border-top-right-radius: 20px !important;
    }
</style>

<body>
    @include('top-bar')
    <nav class="navbar navbar-expand-md navbar-light bg-light justify-content-center align-items-center pt-4 padding-bottom-100">
    <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
        <ul class="navbar-nav text-center">
            <li class="nav-item">
                <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('interchanges-student') }}">Interchanges</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('interchanges-staff') }}">Workshops</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('reaserchProjects') }}">Research Projects</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="{{ route('programs') }}">Programs</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('technicalAcheivements') }}">Technical Acheivements</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('partners') }}">Partners</a>
            </li>
        </ul>
    </nav>
    <!-- Content section 1-->
    <!-- Content section 1-->
    <div class="container carousel-bo">
        <div id="controlsCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="overlay">
                    <div class="carousel-item carousel-item-4 active  rounded">
                        <div class="carousel-caption d-none d-md-block">
                            <h1 style="font-size:60px">Programs</h1>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section style="margin-top:50px">
        <div class="container">
            <div style="margin-bottom:90px ;margin-top:90px">
                <h2 class="display-6" style="color:#b8860b;">Trip To Merzouga</h2>
                <hr style="height:5px; width:13%; background-color:#800000;border: none;opacity: 1;margin-left:7px ">
            </div>
        </div>
        <div class="w-auto p-3">
            <div class="container carousel-bo">
                <div id="controlsCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="overlay">
                            <div class="carousel-item carousel-item-2 active rounded ">
                            </div>
                            <div class="carousel-item carousel-item-3 active rounded ">
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#controlsCarousel"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#controlsCarousel"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </section>
    <section class="mt-4">
        <div class="container text-center">
            <div class="d-flex align-items-center">

                <div class="row ">
                    <h2 class=" font-weight-bold text-start display-5"
                        style="color:#800000 ;margin-bottom:17px;margin-top:30px">Program Overview
                    </h2>
                    <br>
                    <hr
                        style="height:5px; width:13%; background-color:#b8860b;border: none;opacity: 1;margin-left:13px ;margin-bottom:55px ">
                    <br>
                    <div class="d-flex align-items-center">
                    </div>
                    <div class="col-2">
                        <hr style=" border-top: 2px solid brown;" class="display-1">
                        <dt class="text-start"><i class="bi bi-calendar-fill"></i>&emsp;05, September 2021</dt>

                        <hr style=" border-top: 2px solid brown;" class="display-1">
                        <dt class="text-start"><i class="bi bi-pin-map"></i>&emsp;UCA Morocco</dt>

                        <hr style=" border-top: 2px solid brown;" class="display-1">
                        <dt class="text-start"><i class="bi bi-flag-fill"></i> &emsp;Moroccan</dt>
                        <hr style=" border-top: 2px solid brown;">
                    </div>
                    <div class="col-10">
                        <p style="text-align: justify;" class="mt-2 ml-24">
                            Located in the Sahara Desert in southeastern Morocco, Merzouga is dramatically
                            beautiful in its isolation. Long stretches of soft sand and towering dunes stretch
                            in all directions, the horizon only broken by locals on foot or lines of camels. The
                            town itself is charmingly tiny, and can easily be explored on foot, its red
                            sandstone buildings blending easily into the warmth of the desert. Merzouga is
                            particularly extraordinary during sunrise and sunset, when the blazing sun turns
                            the town and sand dunes into a kaleidoscope of golds, bronzes, pinks, and
                            oranges.<br><br>
                            After two hours of walking in sand dunes, You will arrived to the nomads tents
                            behind sand dunes of Erg chebbi desert, After taking amazing pictures and drink
                            tea,You will have lunch of berber Pizza in nomad home, After the lunch we will
                            walk back to the starting point,<br><br>
                            Includes: Guide, Lunch, Water, Room in the guest house for your staff and
                            shower, Parking for your car if you have,Tea.
                        </p>

                    </div>
                </div>
            </div>
        </div>

    </section>

    @include('footer')
</body>

</html>

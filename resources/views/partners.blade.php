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
    <!-- CSS Bootstrap -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/partners.css') }}">
    <!-- JS Bootstrap --->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
</head>




<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');


    .slick-slide {
        margin: 0 20px;
    }

    .slick-slide img {
        width: 100%;
    }

    .slick-slider {
        position: relative;
        display: block;
        box-sizing: border-box;
    }

    .slick-list {
        position: relative;
        display: block;
        overflow: hidden;
        margin: 0;
        padding: 0;
    }

    .slick-track {
        position: relative;
        top: 0;
        left: 0;
        display: block
    }

    .slick-slide {
        display: none;
        float: left;
        height: 100%;
        min-height: 1px;
    }

    .slick-slide img {
        display: block;
    }

    .slick-initialized .slick-slide {
        display: block;
    }

    .copy {
        padding-top: 25px;
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
                <a class="nav-link " href="/">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/interchanges-student">Interchanges</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/all_Workshops">Workshops</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/Projects">Research Projects</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/programs">Programs</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/technicalAcheivements">Technical Acheivements</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="/allPartners">Partners</a>
            </li>
            @guest
            @if (Route::has('login'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
            @endif
        @else
        <li class="nav-item">
            <a class="nav-link" href="/Students">Dashboard</a>
        </li>
        <li class="nav-item dropup">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }}
            </a>

            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </li>
    @endguest
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
                            <h1 style="font-size:60px">Partners</h1>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section id="scroll" class="py-2" style="margin-bottom:60px">
        <div class="container">
            <div class="row d-sm-flex align-items-center justify-content-center">
                <div class=" col-lg py-3 " style="font-size: 20px;">
                    <div class="p-1 " style="margin-top:50px">
                        <h2 class="display-6" style="color:#b8860b;">Partners</h2>
                        <hr
                            style="height:6px; width:10%; background-color:#800000 !important ;border: none;opacity: 1; ">
                    </div>
                    <br>
                    <h3 class="mb-5">MEET OUR PARTNERS!</h3>
                    <p class="mb-3" style="text-align: justify">
                        The purpose of this cooperation between these two universities is to collaborate with several
                        companies in
                        different fields to create opportunities for students to explore the professional universe. </p>

                    <p class="mb-3" style="text-align: justify">
                        Working and studying abroad are key elements that can enhance a graduate CV, demonstrating an
                        ability to
                        adapt to different locations and adopt intercultural skills. Thanks to more than 100 agreements
                        that Cadi Ayyad
                        University has signed with several German companies, students can now experience a new way of
                        learning,
                        learning through experimentation.</p>

                    <p class="" style="text-align: justify">
                        We collaborate with businesses and organisations from all sectors. Our business development team
                        will work
                        with you to match your needs to our academics expertise and manage the contracts and IP, as well
                        as advising
                        on funding opportunities.</p>
                </div>
            </div>
        </div>
    </section>


    <!---------------------------LOGO PARTNERS-------------------------------------------->
    <div class="container">
        <h2 class="text-center font-weight-bold display-6">Our Partners</h2>
        <br><br><br>
        <section class="customer-logos slider">
            @foreach($partners as $partner)
                <div class="d-lg-flex">
                    <div class="slide"> <img class="w-100" src="{{asset('images/'.$partner->logo)}}" alt="image"></div>
                </div>
            @endforeach
        </section>
    </div>


    @include('footer')

    <!-------------------LE SCRIPT---------------------------------------->
    <script>
        $(document).ready(function() {
            $('.customer-logos').slick({
                slidesToShow: 6,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 1500,
                arrows: false,
                dots: false,
                pauseOnHover: false,
                responsive: [{
                    breakpoint: 768,
                    setting: {
                        slidesToShow: 4
                    }
                }, {
                    breakpoint: 520,
                    setting: {
                        slidesToShow: 3
                    }
                }]
            });
        });
    </script>
    <!-------------------FIN SCRIPT--------------->
</body>

</html>

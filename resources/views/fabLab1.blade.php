<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- CSS Bootstrap -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Projects.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <!-- JS Bootstrap --->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>


    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script src="{{ asset('js/script.js') }}"></script>
</head>

@include('top-bar')
<nav class="navbar navbar-expand-md justify-content-center align-items-center pt-4 padding-bottom-100">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link active" href="/">Home</a>
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
            <a class="nav-link" href="/allPartners">Partners</a>
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

<div class="container carousel-bo">
    <div id="controlsCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="overlay">
                <div class="carousel-item carousel-item-1 active  rounded">
                    <div class="carousel-caption d-none d-md-block ">
                        <h1>Technical Achievements</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="mt-5">
    <div class="container">
        <div class="d-flex align-items-center">
            <h2 class="color-gold font-weight-bold">{{$fablabs->title_fablab}}</h2><br><br><br><br><br><br><br><br>
        </div>
        <div class="d-flex justify-content-center">
            <img src="{{asset('images/'.$fablabs->image_fablab)}}" alt="" class="img-fluid w-50 align-self-center">
        </div>
    </div>
</section>
<section class="mt-4">
    <div class="container text-center">
        <div class="d-flex align-items-center">
            <div class="row text">
                <div class="col-2 w-100">
                    <hr style=" border-top: 3px solid brown;" class="display-1">
                    <dt class="">{{date('l, F jS, Y, h:i', strtotime($fablabs->created_at))}}</dt>
                    <hr style=" border-top: 3px solid brown;">
                </div>
                <div class="col-10">
                    <p style="text-align: justify;" class="mt-3 ml-24">{{$fablabs->description_fablab}}</p>

                </div>
            </div>
        </div>
    </div>
</section>
<section class="mt-5">
    <div class="container-lg">
        <div class="">
            <h2 class="color-gold font-weight-bold">Equipments </h2>
        </div>
    </div>
</section>
<section class="mt-4">
    <div class="container text-center">
        <div class=" justify-content-arround">
            <div class="row ">
                <div class="col  ">
                    <img src="{{ asset('img/equip1fab1.jpg') }}" alt="Responsive image" class=" img-fluid rounded"
                        width="600" height="auto">
                    <h2>REPLICATOR 3D PRINTER</h2>
                </div>
                <div class="col ">
                    <img src="{{ asset('img/equip2fab1.jpg') }}" alt="Responsive image" class=" img-fluid rounded"
                        width="600" height="auto">
                    <h2>3D SENSE SCANNER</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="mt-4">
    <div class="container text-center">
        <div class="  justify-content-arround">
            <div class="row ">
                <div class="col  ">
                    <img src="{{ asset('img/equip3fab1.jpg') }}" alt="Responsive image" class=" img-fluid rounded"
                        width="600" height="auto">
                    <h2>MECHANICAL WORKSHOP</h2>
                </div>
                <div class="col ">
                    <img src="{{ asset('img/equip4fab1.jpg') }}" alt="Responsive image" class=" img-fluid rounded"
                        width="600" height="auto">
                    <h2>PRUSA I3 RD PRINTER</h2>
                </div>
            </div> <br><br><br><br>
        </div>
    </div>
</section><br><br><br><br> <br><br>
@include('footer')

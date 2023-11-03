<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Workshop</title>
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
                <a class="nav-link active" href="/all_Workshops">Workshops</a>
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
                    <div class="carousel-item carousel-item-5 active  rounded">
                        <div class="carousel-caption d-none d-md-block ">
                            <h1>Workshops</h1>
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
                        <h2 class="display-6" style="color:#800000;">Workshops</h2>
                        <hr
                            style="height:6px; width:10%; background-color:#800000 !important ;border: none;opacity: 1; ">
                    </div>
                <div class="col-lg-11 mx-5">
                    <p style="text-align: justify; " class=" mt-3">
                        These seminars aim to bring together students and teachers in various fields around the study of
                        concrete cases in the
                        context of a collaboration between<br> the UCA and the DHBW.<br>

                        Conferences and support from the UCA and DHBW teams provided the data needed to carry out the
                        seminar.
                    </p>
                </div>
            </div>
        </div>

        </div>
    </section>
    <section class="mt-4">
        <div class="container">
            <div class="row">
                <div class="col-1">&nbsp;</div>
                <div class="col-10 ">
                    <div class="shadow-sm p-4 mb-5 bg-body rounded d-flex justify-content-between"
                        style="border:2px solid #c78735;">
                        <input type="date" style="width:300px; color:#c78735;border:2px solid #c78735 ;font-weight:900;border-radius:4px"
                            class="pe-7 mx-1 px-1 ">
                        <button class="btn text-white" style="background-color: #c78735;width:300px">APPLY FILTERS</button>
                    </div>
                </div>
                <div class="col-1">&nbsp;</div>
            </div>
        </div>
    </section><br><br>
    @foreach($workshops as $workshop)
        <section class="container">
            <div class="row">
                <div class="col-1">&nbsp;</div>
                <div class="col-10 border py-2 mx-3 mb-4 area ">
                    <div class="row " style="display: flex ;">
                        <div class="col-lg-3 p-2 ">
                            <img class="w-100" src="{{asset('images/'.$workshop->image_workshop)}}" alt="image">                        </div>
                        <div class="col-lg-8 " style="text-align: justify;">
                            <h4 style="font-weight:bold">{{$workshop->date_start}} - {{$workshop->date_start}} • {{$workshop->city}}, {{$workshop->country}}</h4>
                            <h5 class="text-left" style="font-weight:bold">{{$workshop->title}}</h5>
                            <p class="mt-3">
                            <p style="color: #c78735 ;font-weight:bold"> organizer : {{$workshop->university}} university</p><br>
                            {{$workshop->description}}
                            </p>
                            {{-- <a class="position-absolute end-0 text-decoration-none " href="#"
                                style="color: #c78735 ;font-weight:bold"> &emsp; More informations >>>
                            </a>&nbsp;<br> --}}
                        </div>

                    </div>
                </div>
                <div class="col-1">&nbsp;</div>
            </div>
        </section>
    @endforeach
    <nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center mt-5 pt-3">
        <li class="page-item"><a class="page-link me-2 p-3 px-4 border-0"
                style="border-radius: 0 ;background-color: #c78735; color:#ffffff" href="#">Previous</a>
        </li>
        <li class="page-item"><a class="page-link me-2 p-3 px-4 border-0"
                style="border-radius: 0; background-color: #c78735; color:#ffffff" href="#">1</a>
        </li>
        <li class="page-item"><a class="page-link me-2 p-3 px-4 border-0"
                style="border-radius: 0; background-color: #c78735; color:#ffffff" href="#">2</a>
        </li>
        <li class="page-item"><a class="page-link me-2 p-3 px-4 border-0"
                style="border-radius: 0; background-color: #c78735; color:#ffffff" href="#">3</a>
        </li>
        <li class="page-item"><a class="page-link p-3 px-4 border-0"
                style="border-radius: 0; background-color: #c78735; color:#ffffff" href="#">Next</a>
        </li>
    </ul>
</nav>

<br><br>

    @include('footer')
</body>

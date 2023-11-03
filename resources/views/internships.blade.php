<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Internships</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- CSS Bootstrap -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
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
                <a class="nav-link active" href="/interchanges-student">Interchanges</a>
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
                    <div class="carousel-item carousel-item-1 active">
                        <div class="carousel-caption d-none d-md-block">
                            <h1 class="display-1 fw-bold">Interchenges</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="liens-url p-5">
            <a href="/" class="lien me-2" style="color: #800000">Home</a>
            >
            <a href="/interchanges-student" class="lien mx-2" style="color: #800000">Interchanges</a>
            /
            <a href="/all_internships" class="text-secondary ms-2">Internships</a>
        </div>
        <div class="p-5">
            <h1 style="color: #800000">Interchanges / <span class="text-secondary">Internships</span></h1>
            <hr style="width: 10%; border: 1px solid #800000;">
        </div>
    </div>

    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <div class="img border border-2 border-dark image-back  p-3" style="border-radius: 20px;height: 300px">

                </div>
            </div>
            <div class="col-lg-7 my-2">
                <div class="border border-2 border-dark p-3 bg-white"
                    style="border-radius: 20px;">
                    <h5 style="color:#c78735;">Internships</h5>
                    <p style="text-align: justify">
                        Interns will achieve success in professional positions in different
                        sectors. The relationship between both universities and the student is
                        mutually beneficial; with guidance from professionals, Interns gain
                        practical experience by working on projects and programs while Both
                        institutions benefits from their contribution.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container px-5">
        <div class="my-5 py-4 px-5 d-lg-flex justify-content-between text-center" style="border:2px solid #c78735;">
            <div class="my-1">
                <select name="" id=""
                    style="color:#c78735; border:2px solid #c78735; font-weight: bold;" class="px-4">
                    <option value="">University</option>
                </select>
            </div>
            <div class="my-1">
                <input type="date" style="color:#c78735; border:2px solid #c78735; font-weight: bold;"
                    class="px-0">
            </div>
            <div class="my-1">

                <button class="btn btn-filter" style="">APPLY FILTERS</button>
            </div>
            </div>
        </div>
        @foreach($internships as $internship)
        <div class="container">
            <div class="d-lg-flex align-items-center">
                <div class="">
                    <i class="bi bi-person-fill" style="font-size: 300px;color: #800"></i>
                </div>
                <div class="fs-4 mx-3">
                    <p style="text-align: justify" class="mb-3"><b>Subject:</b> {{$internship->title}}</p>
                    <p style="text-align: justify" class="mb-3"><b>Institution:</b> {{$internship->company}}</p>
                    <p style="text-align: justify" ><b>Supervisor :</b></br>
                            @foreach ($internship->teachers as $teacher)
                                <li class="mx-5">{{ $teacher->firstname }} {{ $teacher->lastname }}</li>
                            @endforeach
                    </p>
                    <p style="text-align: justify" class="mb-3"><b>Period of internship:</b> {{date('F j, Y', strtotime($internship->date_start))}} - {{date('F j, Y', strtotime($internship->date_end))}}</p>
                    <p style="text-align: justify" class=""><b>Description :</b>{{$internship->description}}</p>
                </div>
            </div>
        </div>
        <hr>
    @endforeach

    @include('footer')
</body>

</html>

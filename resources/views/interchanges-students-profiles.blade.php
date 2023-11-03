
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student profile</title>
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
                            <h1 class="display-1 fw-bold">Interchanges</h1>
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
            <a href="interchanges-students-profiles" class="text-secondary ms-2">Exchange students Profiles</a>
        </div>
        <div class="">
            <h1 style="color: #800000">Interchanges / <span class="text-secondary">Exchange students Profiles</span>
            </h1>
            <hr style="width: 10%; border: 1px solid #800000;">
        </div>
        <div class="mt-5">
            <h6 style="color:#c78735">MEET OUR STUDENTS</h6>
            <h5>Exchange students Profiles</h5>
            <p class="mt-4" style="text-align: justify;">
                View available exchange student profiles.
                Students who may study at the host institution and/or complete an internship or project for
                one semester or one academic year.
            </p>
            <p class="mt-4" style="text-align: justify;">
                Explore Exchange students below. You can narrow your search by which university they come from, by date,
                by type of exchange which
                defines the type of exchange whether internship or exchange program
            </p>
            <h5 class="mt-5">Refine Your Search</h5>
            <div class="mt-5 py-4 px-5 d-lg-flex justify-content-between text-center" style="border:2px solid #c78735">
                <select name="" id=""
                    style="color:#c78735; border:2px solid #c78735; font-weight: bold;" class="pe-5 ps-2 px-5 my-1 text-center">
                    <option value="">University</option>
                </select>
                <input type="date" style="color:#c78735; border:2px solid #c78735; font-weight: bold;"
                    class="text-center pe-5 ps-2 px-4 my-1">
                <select name="" id=""
                    style="color:#c78735; border:2px solid #c78735; font-weight: bold;" class="pe-5 ps-2 px-4 my-1 text-center">
                    <option value="">Type Exchange</option>
                </select>
                <button class="btn btn-filter my-1 px-4" style="">APPLY FILTERS</button>
            </div>
            <div class="row my-3">
                <!-- <div class="py-4 mx-2 d-flex"> -->
                    @foreach ($exchangesStudent as $exchange)
                        @foreach ($exchange->students as $student)
                            <div class="col-lg-6">
                                <div class=" row card-prof-fill mx-1 mb-4 py-4">
                                    <div class="col-sm-3  justify-content-center">
                                        <i class="bi bi-person-fill" style="font-size: 100px;color: #800"></i>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="col-12">
                                            <p style="color: #800"><b>Name:</b> {{$student->firstname}} {{$student->lastname}}</p>
                                            <p style="color: #800"><b>Nationality:</b> {{$student->nationnality}}</p>
                                            <p style="color: #800"><b>University:</b> {{$student->university}}</p>
                                            <p style="color: #800"><b>Exchange :</b> {{$exchange->description}}</p>
                                            <p style="color: #800"><b>Date Debut:</b> {{$exchange->date_start}}</p>
                                            <p style="color: #800"><b>Date Fin:</b> {{$exchange->date_end}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endforeach
                <!-- </div> -->
            </div>

    </div>

    @include('footer')
</body>

</html>

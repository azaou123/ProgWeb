<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DHBW - Interchanges</title>
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
            <a href="" class="lien me-2" style="color: #800000">Home</a>
            >
            <a href="/interchanges-student" class="lien mx-2" style="color: #800000">Interchanges</a>
            /
            <a href="/interchanges-staff" class="text-secondary ms-2">Faculty and Staff Exchange</a>
        </div>
        <div class="p-5">
            <h1 style="color: #800000">Interchanges / <span class="text-secondary">Faculty and Staff Exchange</span>
            </h1>
            <hr style="width: 10%; border: 1px solid #800000;">
        </div>

        <section>
            <div class="row">
                <div class="col-lg-3 border-right-3">
                    <h6 class="p-4 lien">
                        <a href="/interchanges-student">Exchange students</a>
                    </h6>
                    <h6 class="p-4 lien">
                        <a href="/interchanges-staff" class="active">Faculty and Staff Exchange</a>
                    </h6>
                    <h6 class="p-4 lien">
                        <a href="/all_internships">Internships</a>
                    </h6>
                </div>
                <div class="col-lg-9 px-4">
                    <h5>Faculty Academic Exchange Program</h5>
                    <p style="text-align: justify" class="mt-5">
                        The faculty exchange program would provide participants with the opportunity to teach or conduct
                        research for one semester or an academic year at an overseas university. Faculty members would
                        benefit
                        from exposure to a culturally varied and diverse faculty make-up, with an opportunity to
                        exchange ideas
                        and observe a variety of styles.
                    </p>
                    <p style="text-align: justify" class="mt-3">
                        The faculty exchange program is one way to take advantage of the benefits of diverse faculty.
                        Ultimate goal
                        of educational institutions is to develop a vibrant and diverse faculty. This process, however
                        cannot take
                        place overnight. It occurs slowly, one or two faculty members at a time. The need for rich
                        variety of ideas,
                        cultures, thoughts, and styles, however, is immediate. In order to facilitate the process,
                        University Cadi
                        Ayyad can develop plans for a faculty exchange programs. The benefit will be immediate, and
                        students will
                        have the opportunity to learn concepts and ideas presented in an entirely new and different
                        manner.
                    </p>
                    <p style="text-align: justify" class="mt-3">
                        This cooperation between <b>UCA</b> & <b>DHBW</b> present a unique opportunity for interaction
                        between UCA’s
                        and
                        DHBW’s students and staff . They will create a greater bond among the concerned institutions and
                        will be a
                        powerful recruitment and retention tool.
                    </p>
                    <div class="row pt-3">
                        <div class="col-lg-4">
                            <div class="d-flex pt-5">
                                <i class="bi bi-1-circle-fill h4" style="color: #c78735"></i>
                                <p style="text-align: justify; font-size: 12px" class="ms-3">
                                    Both institutions agree to
                                    encourage faculty and staff
                                    participation in exchange program
                                    activities from host to host
                                    institution. Approval of both
                                    institutions will berequired for all
                                    exchanges.
                                </p>
                            </div>
                            <div class="d-flex pt-5">
                                <i class="bi bi-2-circle-fill h4" style="color: #c78735"></i>
                                <p style="text-align: justify; font-size: 12px" class="ms-3">
                                    Applicants for participation in
                                    the exchange will be selected by
                                    the home institution and will be
                                    subject to acceptance by the
                                    host institution.
                                </p>
                            </div>
                            <div class="d-flex pt-5">
                                <i class="bi bi-3-circle-fill h4" style="color: #c78735"></i>
                                <p style="text-align: justify; font-size: 12px" class="ms-3">
                                    The conditions of any faculty and
                                    staff exchanges will be agreed
                                    between the parties prior to the
                                    staff exchange commencing. This
                                    includes financial responsibilities,
                                    insurance coverage, housing etc.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-4 border image-back">
                        </div>
                        <div class="col-lg-4">
                            <div class="d-flex pt-5">
                                <i class="bi bi-4-circle-fill h4" style="color: #c78735"></i>
                                <p style="text-align: justify; font-size: 12px" class="ms-3">
                                    The period of the exchange will be
                                    determined by the purpose of the
                                    exchange.The duration of faculty
                                    and staff exchanges shall be
                                    arranged as appropriate and in
                                    accordance with the established
                                    rulesand practices of the host
                                    institution.
                                </p>
                            </div>
                            <div class="d-flex pt-5">
                                <i class="bi bi-5-circle-fill h4" style="color: #c78735"></i>
                                <p style="text-align: justify; font-size: 12px" class="ms-3">
                                    Each institution will be responsible
                                    for their own costs for the
                                    implementationof the above
                                    arrangements unless mutually and
                                    formally agreed otherwise in
                                    written form.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-5">
                        <h6 style="color:#c78735">MEET OUR TEACHERS</h6>
                        <h5>Exchange Teachers Profiles</h5>
                        <h5 class="my-5">Refine Your Search</h5>
                    </div>
                    <div class="my-5 mx-3 py-4 px-5 d-lg-flex justify-content-between text-center" style="border:2px solid #c78735">
                        <div class="my-1">
                            <select name="" id=""
                                style="color:#c78735; border:2px solid #c78735; font-weight: bold;"
                                class=" px-4">
                                <option value="">Programs</option>
                            </select>
                        </div>
                        <div class="my-1 ">
                            <input type="date"
                                style="color:#c78735; border:2px solid #c78735; font-weight: bold;"
                                class=" px-0">
                            </div>
                            <button class="btn btn-filter">APPLY FILTERS</button>
                    </div>

                    @foreach($exchangesTeacher as $exchangesTeacher)
                        @foreach ($exchangesTeacher->teachers as $teacher)

                            @if($teacher->university == 'UCA')
                                <div class="m-3 row card-prof mx-1 mt-4">
                                    <div class="col-lg-3">
                                        <i class="bi bi-person-fill text-white" style="font-size: 200px"></i>
                                    </div>
                                    <div class="col-lg-9">
                                        <div class="d-flex justify-content-between align-items-center py-3 pe-3">
                                            <span class="text-white h6"><b>University</b> : UCA - Morocco</span>
                                            <img src="{{ asset('img/uca.png') }}" alt=""
                                                style="filter: brightness(0) invert(1); width: 7.5%" class="img-fluid">
                                        </div>
                                        <div class="col-12">
                                            <p class="fw-bold text-white">Name : Mr. {{$teacher->firstname}} {{$teacher->lastname}}</p>
                                            <p class="text-white"><b>Nationality :</b> {{$teacher->nationnality}}</p>
                                            <!-- <p class="text-white"><b>Number of hours :</b> {{$teacher->bn_hours}}</p> -->
                                            <p class="text-white"><b>Description :</b> {{$exchangesTeacher->description}}</p>
                                            <p class="text-white"><b>From :</b> {{date('l, F jS, Y', strtotime($exchangesTeacher->date_start))}}</p>
                                            <p class="text-white"><b>To :</b> {{date('l, F jS, Y', strtotime($exchangesTeacher->date_end))}}</p>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            
                            @if($teacher->university == 'DHBW')
                                <div class="m-3 row card-prof-fill mx-1 mt-4">
                                    <div class="col-lg-3">
                                        <i class="bi bi-person-fill" style="font-size: 200px;color: #800"></i>
                                    </div>
                                    <div class="col-lg-9">
                                        <div class="d-flex justify-content-between align-items-center py-3 pe-3">
                                            <span class="h6" style="color: #800"><b>University</b> : DHBW - Germany</span>
                                            <img src="{{ asset('img/DHBW_Logo.webp') }}" alt="" style=" width: 20%" class="img-fluid">
                                        </div>
                                        <div class="col-lg-12">
                                            <p class="fw-bold" style="color: #800">Name : Mr. {{$teacher->firstname}} {{$teacher->lastname}}</p>
                                            <p style="color: #800"><b>Nationality :</b> {{$teacher->nationnality}}</p>
                                            <!-- <p class="text-white"><b>Number of hours :</b> {{$teacher->bn_hours}}</p> -->
                                            <p style="color: #800"><b>Description :</b> {{$exchangesTeacher->description}}</p>
                                            <p style="color: #800"><b>From :</b> {{date('l, F jS, Y', strtotime($exchangesTeacher->date_start))}}</p>
                                            <p style="color: #800"><b>To :</b> {{date('l, F jS, Y', strtotime($exchangesTeacher->date_end))}}</p>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    @endforeach
                </div>
            </div>
        </section>
    </div>







    @include('footer')
</body>

</html>

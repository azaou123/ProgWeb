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
            <a href="" class="lien mx-2" style="color: #800000">Interchanges</a>
            /
            <a href="" class="text-secondary ms-2">Exchange students</a>
        </div>
        <div class="p-5">
            <h1 style="color: #800000">Interchanges / <span class="text-secondary">Exchange students</span></h1>
            <hr style="width: 10%; border: 1px solid #800000;">
        </div>

        <section>
            <div class="row">
                <div class="col-lg-3 border-right-3">
                    <h6 class="p-4 lien">
                        <a href="/interchanges-student" class="active">Exchange students</a>
                    </h6>
                    <h6 class="p-4 lien">
                        <a href="/interchanges-staff">Faculty and Staff Exchange</a>
                    </h6>
                    <h6 class="p-4 lien">
                        <a href="/all_internships">Internships</a>
                    </h6>
                </div>
                <div class="col-lg-9 p-5">
                    <h5>What is the applicant exchange</h5>
                    <p style="text-align: justify;">
                        For the purpose of this agreement, between University Cadi Ayyad & Duale Hochschule
                        Baden-Württemberg,
                        “Exchange Students” are students who may study at the host institution and/or complete an
                        internship or
                        project for one semester or one academic year. They will be classified as exchange students and
                        will not be
                        eligible for degree status at the host institution, unless previously agreed by both
                        institutions. The “Exchange
                        Program” is the program pursuant to this agreement..
                    </p>
                    <div class="px-1 py-3">
                        <div class="row">
                            <div class="col-lg-6">
                                <img src="{{ asset('img/internships.jpg') }}" alt="" class="img-fluid">
                            </div>
                            <div class="col-lg-6">
                                <h6 class="pt-5">What is a Home institution ?</h6>
                                <p style="text-align: justify;">Home institution means the institution at which a
                                    student intends to graduate</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <h6 class="pt-5">What is a host institution ?</h6>
                                <p style="text-align: justify;">Host institution means the institution
                                    which has agreed to accept the student
                                    from the home institution.</p>
                            </div>
                            <div class="col-lg-6">
                                <img src="{{ asset('img/internships.jpg') }}" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-lg-9">
                                <h5 class="py-4">How does the applicant exchange work?</h5>
                                <p style="text-align: justify;">
                                    Applicants for participation in the exchange program will be selected according
                                    to criteria established by the home and the host institution. These applicants
                                    will be selected by the home institution and subject to final acceptance by the
                                    host institution.
                                </p>
                            </div>
                            <div class="col-lg-3">
                                <img src="{{ asset('img/exchange_student.jpg') }}" alt="" class="img-fluid">
                            </div>
                        </div>
                        <h5 class="py-4">Who can come to the host institution as an exchange student?</h5>
                        <p style="text-align: justify;">
                            To come to the host institution as an exchange student, your home university
                            must have a formal agreement for exchange studies with it .
                        </p>
                        <p style="text-align: justify;">
                            All exchange students must be registered and must remain enrolled as fulltime
                            degree-seeking at the home institution as a condition of acceptance into
                            the exchange program. Exchange students must be in good academic standing
                            prior to participating in the exchange program. Students are eligible to
                            participate if they have satisfied any language proficiency requirements of the
                            host institution.
                        </p>
                        <div class="mt-5">
                            <h3>Incoming Exchange Students</h3>
                            <div class="py-4 px-1">
                                <div class="row p-3 border-top border-bottom border-secondary">
                                    <div class="col-1"><i class="bi bi-arrow-right-circle fs-3"
                                            style="color: #800000"></i></div>
                                    <div class="col-11">
                                        <p class="" style="text-align: justify;">
                                            All students must carry adequate health, emergency evacuation and
                                            repatriation
                                            insurance
                                            coverage to the satisfaction of the host institution.
                                        </p>
                                    </div>
                                </div>
                                <div class="row p-3 border-bottom border-secondary">
                                    <div class="col-1"><i class="bi bi-arrow-right-circle fs-3"
                                            style="color: #800000"></i></div>
                                    <div class="col-11">
                                        <p class="" style="text-align: justify;">
                                            Students participating in the exchange program will not be expected to pay
                                            tuition fees
                                            at the host
                                            institution. Students will pay tuition fee to the home institution in
                                            accordance
                                            with
                                            the policies of
                                            that institution.
                                        </p>
                                    </div>
                                </div>
                                <div class="row p-3 border-bottom border-secondary">
                                    <div class="col-1"><i class="bi bi-arrow-right-circle fs-3"
                                            style="color: #800000"></i></div>
                                    <div class="col-11">
                                        <p class="" style="text-align: justify;">
                                            Exchange students will be responsible for making their travel arrangements
                                            and
                                            shall bear all associated costs including transportation, housing, meals,
                                            academic materials, medical care expenses, health insurance, personal
                                            expenses,
                                            required orientation fees, passport/visa application fees etc.
                                        </p>
                                    </div>
                                </div>
                                <div class="row p-3 border-bottom border-secondary">
                                    <div class="col-1"><i class="bi bi-arrow-right-circle fs-3"
                                            style="color: #800000"></i></div>
                                    <div class="col-11">
                                        <p class="" style="text-align: justify;">
                                            Exchange students will be subject to the rules and regulations of the host
                                            institution and the laws of the host country. They will be entitled to
                                            regular
                                        </p>
                                    </div>
                                </div>
                                <div class="row p-3">
                                    <div class="col-1"><i class="bi bi-arrow-right-circle fs-3"
                                            style="color: #800000"></i></div>
                                    <div class="col-11">
                                        <p class="" style="text-align: justify;">
                                            The host institution will make every effort to facilitate the integration of
                                            exchange students into the student life of the host institution
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="/interchanges-students-profiles" class="btn btn-xch my-5">View
                            available exchange student profiles ></a>
                        <p class="my-4 fw-bold">We wish you much success!</p>
                    </div>
                </div>
            </div>
        </section>
    </div>







    @include('footer')
</body>

</html>

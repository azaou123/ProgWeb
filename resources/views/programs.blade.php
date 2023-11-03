<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>DHWB - UCA</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css"
        integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
    <!-- CSS Bootstrap -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Programs.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <!-- JS Bootstrap --->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

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
            <a class="nav-link" href="/all_Workshops">Workshops</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/Projects">Research Projects</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="/programs">Programs</a>
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

    <section class="mt-1">
        <div class="container-lg text-center text-sm-start py-2">
            <div class="row d-sm-flex align-items-center justify-content-center">
                <div class="col-lg-7 py-3">
                    <div class="p-1 mt-4">
                        <h2 class="display-6" style="color:#b8860b;">Programs</h2>
                        <hr style="height:5px; width:15%; background-color:#800000;border: none;opacity: 1 ">
                    </div>
                    <p style="text-align: justify;" class="mt-3">
                        The purpose of this cooperation between <strong>University Cadi Ayyad (UCA) & Duale
                            Hochschule Baden-Württemberg (DHBW)</strong> is to match faculty members from
                        both universities member institutions who will collaborate in the partial design
                        and teaching of a course. Each professor will be expected to travel (if
                        conditions due to the COVID-19 pandemic allow for it) to the partner
                        institution, for a period that will be determined by the purpose of the
                        exchange, during the winter or the spring semester (between January and
                        June). In that week the professor will teach a class, meet with other faculty
                        members in order to discuss future potential projects, give an open lecture to
                        the community, etc. Professors are also expected to organize a virtual activity
                        to give their students the opportunity to collaborate.
                    </p>
                    <p style="text-align: justify;" class="mt-3">
                        The faculty exchange program is one way to take advantage of the benefits of
                        diverse faculty. Ultimate goal of educational institutions is to develop a vibrant
                        and diverse faculty. The faculty exchange programs present a unique
                        opportunity for interaction between Foreign universities and University Cadi
                        Ayyad. They will create a greater bond among the concerned institutions and
                        will be a powerful recruitment and retention tool.
                    </p>

                    <p style="text-align: justify;" class="mt-3">
                        This partnership also includes a cultural exchange program whose goal is to
                        promote respect and deepening understanding for other cultures while
                        strengthening relations. The more people learn to cooperate and collaborate
                        there is mutual understanding of each other s way of life which then translates
                        to promotion of international friendship and goodwill.
                    </p>

                </div>
                <div class="col-lg-4 py-9 " style="margin-top:90px;">
                    <img src="{{ asset('img/MR.jpg') }}" alt="" class="rounded img-fluid">
                </div>
            </div>
        </div>
    </section>
    <!---------grande section-------------------------------------------------------------------->
    <section id="scroll" class="text-center text-sm-start py-2  "style="margin-top:15px;margin-bottom:70px">
        <div class="container">
            <div class="row d-sm-flex align-items-center justify-content-center">
                <!--------------------ACCORDEON--------------------------------------------------------------->
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <!----------------------1 ACCORDEON------------------------------------------------------------>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed py-4" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseOne" aria-expanded="false"
                                aria-controls="flush-collapseOne"
                                style=" background-color: #800000 !important;color:#FFFFFF;font-size:25px;font-weight:600;">
                                Academics Programs
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample"
                            style=" background-color: #800000 !important;">
                            <div class="accordion-body" style=" background-color: #ffffff !important;">
                                <!--------------------------CORPS DU 1 ACCORDEON---------------------------->
                                <!---section1--------------------------------------------------------------->
                                <section class="mt-4">
                                    <div class="container-lg  text-center text-sm-start py-2">
                                        <div class="row d-sm-flex align-items-center justify-content-center">
                                            <div class="col-lg-7 py-3">
                                                <p style="text-align: justify;" class="mt-3">
                                                    At the heart of the cooperation between UCA & DHBW, there is a
                                                    commitment to
                                                    foster academic cooperation and exchange, thus enriching the
                                                    academic curricula
                                                    and our common understanding of human rights and the associated
                                                    global
                                                    challenges.
                                                </p>

                                                <p style="text-align: justify;" class="mt-3">
                                                    The exchange of professors among our member universities has been
                                                    one of our
                                                    flagship activities since the establishment of the network.</p>

                                                <p style="text-align: justify;" class="mt-3">
                                                    These programs are mutual, inter-institutional arrangements through
                                                    with the
                                                    proficiency and services of one institute s faculty are exchanged
                                                    with the other
                                                    institution for time-limited periods. The primary aim of an academic
                                                    exchange
                                                    program is to provide the opportunity for the exchanged personnel to
                                                    serve as
                                                    employees of the host institution; to encourage professional
                                                    development
                                                    through the stimulus of a different setting; and for the host
                                                    organizations to
                                                    benefit from the knowledge and skills of the exchanged personnel. It
                                                    assists in
                                                    transformative internationalization of the university.
                                                </p>

                                            </div>
                                            <div class="col-lg-4 py-3">
                                                <img src="{{ asset('img/CADI.jpg') }}" alt=""
                                                    class="rounded img-fluid">
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <!---section2-------------------------------------------------------->

                                <section class="mt-2">
                                    <div class="container-lg text-center text-sm-start py-2">
                                        <div class="row d-sm-flex align-items-center justify-content-center">
                                            <div class="col-lg-4 py-3">
                                                <img src="{{ asset('img/DHBW1.jpg') }}" alt=""
                                                    class="rounded img-fluid">
                                            </div>
                                            <div class="col-lg-7 py-3">
                                                <p style="text-align: justify;" class="mt-3">
                                                    These faculty exchange programs in most cases international faculty
                                                    exchange
                                                    lead to some benefits that accrue to the organization like:
                                                <p style="text-align: justify;" class="mt-3">
                                                    Revitalization of course content at the school to reflect the latest
                                                    trends;¢
                                                     Invigoration of school faculty by the addition of new colleagues
                                                    directly involved
                                                    in the similar practice arena</p>
                                                <p style="text-align: justify;" class="mt-3">
                                                     Creation of new opportunities for future school-agency
                                                    collaboration on
                                                    research, special projects and practicals;</p>
                                                <p style="text-align: justify;" class="mt-3">
                                                     Acquisition or update of practice experience which can inform
                                                    faculty teaching
                                                    and research
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <!---section2-------------------------------------------------------->
                                <section class=" mt-4 ">
                                    <div class="container-fluid py-5"style="background-color:#800000 ;border: 2px solid #800000">
                                        <div class="row">
                                        <div class="col-lg-7">
                                                    <div class="row">
                                                        <div class="col-lg">
                                                            <div class="py-4">
                                                                <h4 style="color:#FFFFFF">Filter Programs</h4>
                                                                <div class="d-lg-flex align-items-center ">
                                                                    <select name="" id="" class="form-select me-2 my-1"
                                                                        style="color:#000000; background-color: #FFFFFF; font-weight: bold; font-size: 20px; border-radius: 4px;">
                                                                        <option value="">Programs</option>
                                                                    </select>
                                                                    <select name="" id="" class="form-select me-2 my-1"
                                                                        style="color:#000000; background-color: #FFFFFF; font-weight: bold; font-size: 20px; border-radius: 4px;">
                                                                        <option value="">University</option>
                                                                        <option value="">DHBW</option>
                                                                    </select>
                                                                    <select name="" id="" class="form-select me-2 my-1 "
                                                                        style="color:#000000; background-color: #FFFFFF; font-weight: bold; font-size: 20px; border-radius: 4px;">
                                                                        <option value="">Department</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                 
                                                    </div>
                                                    <div class="col-4 d-flex justify-content-between">  

                                            <!------------2colonne SEARCH----------------------------- --------------->
                                            <div class="col-4 d-flex justify-content-between">
                                                <div class="my-4 ms-5"style="">
                                                    <h4 style="color:#FFFFFF">Search Programs</h4>
                                                    <form id="form">
                                                        <div class="d-lg-flex" style="height: 3rem;">
                                                            <input type="search" id="query" name="q"placeholder="All programs..." tyle=" border-radius:7px;border:4px solid  #FFFFFF" class="me-2 my-1">
                                                            <button class="btn btn-filter "style="color:#000000; border:2px solid  #FFFFFF; background-color: #FFFFFF ;font-weight: bold;font-size:18px; border-radius:4px;">Search</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-----------fin row ------------------------------------------------>
                                </section>
                                <!--------section card ---------------->
                                <section class="container mt-5">
                                        <div class="row">
                                        @foreach ($dataAcademic as $da)
                                        <div class="col-lg-4 my-2">
                                                <div class="card"
                                                    style="width: 100%;height: 34rem; box-shadow: 4px 3px 8px 1px #969696;-webkit-box-shadow: 4px 3px 8px 1px #969696;">
                                                    <img class="w-100" src="{{asset('images/'.$da->image_program_ACAD)}}" alt="image">
                                                    <div class="card-body ">
                                                        <div class="d-flex justify-content-between">
                                                            <span class="" style="font-size: 10px;"><i class="bi bi-calendar-fill "></i><span class="mx-3">{{date('l, F jS, Y', strtotime($da->Date))}}</span></span>
                                                            
                                                        </div>
                                                        <div class="d-flex align-items-start flex-column">
                                                            <h5 class="card-title">{{$da->title}}</h5>
                                                            <p class="card-text" style="text-align: justify; font-size: 12px; height: 7rem;">{{$da->description}}</p>
                                                            <!-- <a href="#"
                                                                class="btn btn-news mb-auto">Learn More ></a> -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </section>
                                
                                <!-----------section Button LOAD MORE--------------->
                                <!-- <section style="margin-top:100px;margin-bottom:40px">
                                    <div class="conatainer " style=" text-align:center;">
                                        <button type="button" class="btn btn-primary btn-lg align-items-center"style="background-color:#800000 !important;border:#800000;">Load more</button>
                                    </div>
                                </section> -->
                                <!-----fin------->
                            </div>
                        </div>
                    </div>
                    <!---------------2 accordeon---------------------------------->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button collapsed py-4" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                aria-controls="flush-collapseTwo"
                                style=" background-color: #800000 !important;color:#FFFFFF;font-size:25px;font-weight:600;">
                                Cultural Programs
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample"
                            style=" background-color: #800000 !important;">
                            <div class="accordion-body" style=" background-color: #ffffff !important;">

                                <section class="mt-2">
                                    <div class="container-lg text-center text-sm-start py-2">
                                        <div
                                            class="row d-sm-flex align-items-center justify-content-center w-100 h-100">
                                            <div class="col-lg-4 py-3">
                                                <img src="{{ asset('img/Mains.jpg') }}" alt=""
                                                    class="rounded img-fluid ">
                                            </div>
                                            <div class="col-lg-8 py-3">
                                                <p style="text-align: justify;" class="mt-3">
                                                    This partnership is pleased to offer a variety of social and
                                                    cultural
                                                    programs that are focused on enhancing the educational experiences
                                                    of
                                                    international students and scholars at both universities.
                                                <p style="text-align: justify;" class="mt-3">
                                                    The student exchange experience is an unforgettable one. Your year
                                                    will
                                                    be filled with new discoveries about yourself and others while you
                                                    live
                                                    with your host family, attend high school and improve your English
                                                    skills
                                                    or any other languague.</p>
                                                <p style="text-align: justify;" class="mt-3">
                                                    Cultural excursions are fun one or two-day trips that take advantage
                                                    of
                                                    the many opportunities close to Morocco. They re not associated with
                                                    an
                                                    academic course but you ll definitely have a fun educational
                                                    experience.</p>
                                                <p style="text-align: justify;" class="mt-3">
                                                    Through the Cultural Program, you ll engages with the histories,
                                                    perspectives, and contemporary realities of cultures and countries
                                                    around the world. We want you to keep exploring, in class and
                                                    beyond.

                                                    You could learn to make traditionnal food from a professional and
                                                    discover different places in the country.
                                                </p>
                                                <p style="text-align: justify;" class="mt-3">
                                                    Explore your options below, and join students from all over the
                                                    world on
                                                    an amazing journey and experience!
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </section>


                                
                                <section class=" mt-4 ">
                                       <div class="container-fluid py-5 text-center"style="background-color:#800000 ;border: 2px solid #800000">
                                            <div class="row">
                                            
                                               <div class="col-lg-4 my-4 ">
                                               
                                                    <select name="" id="" class="form-select me-2 my-1 pe-2 ps-2"  style="color:#000000; background-color: #FFFFFF; font-weight: bold; font-size: 20px; border-radius: 4px;">
                                                        <option value="">Programs</option>
                                                    </select>
                                                 </div>    
                                                        
                                                   
                                                 <div class="col-lg-4 my-4">
                                                    <input type="date"style="color:#000000; border:2px solid  #FFFFFF; background-color: #FFFFFF ;font-weight: bold;font-size:20px;  border-radius:4px" class=" me-2 pe-2 ps-2 py-1">
                                                    <button class="btn btn-filter my-1"style="color:#000000; border:2px solid  #FFFFFF; background-color: #FFFFFF ;font-weight: bold;border-radius:4px" class="py-1">APPLY FILTERS</button>
                                                                
                                                 </div>
                                               
                                            

                                                 <!------------2colonne SEARCH----------------------------- --------------->
                                                <div class=" col-lg-4 my-4  ">
                                                   
                                                       
                                                        <form id="form">
                                                            <input type="search" id="query" name="q"placeholder="All programs..."style=" border-radius:7px;border:4px solid  #FFFFFF" class="me-2  pe-2 py-2">
                                                                <button class="btn btn-filter my-1 py-1"style="color:#000000; border:2px solid  #FFFFFF; background-color: #FFFFFF ;font-weight: bold;font-size:18px; border-radius:4px;">Search</button>
                                                            
                                                        </form>
                                                   
                                                </div>
                                            </div>
                                        </div>
                                   
                                    <!-----------fin row ------------------------------------------------>
                                </section>
                                
                        </div>
                    </div>

                    <!---------------fin du 2 accordeon------------->
                </div>
                <!-------------fin du grand accordeon----------->
            </div>
            <!----------fin du row-------------->
        </div>
        <!--------------fin container------------>

    </section>

    @include('footer')

</body>

</html>

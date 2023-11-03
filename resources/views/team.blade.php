<?php
    use App\Models\students;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Team</title>
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
                <a class="nav-link" href="/interchanges-student">Interchanges</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/all_Workshops">Workshops</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="/Projects">Research Projects</a>
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
                            <h1 class="display-1 fw-bold">Team</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
       
        
        <div class="mt-5">
            <h6 style="color:#c78735">Website Creators</h6>
            
            <p class="mt-4 h5" style="text-align: justify;">
            Iscover our innovative collaborative website, a result of the partnership between Cadi Ayyad University (UCA) in Morocco and Baden-Wuerttemberg Cooperative State University (DHBW) in Germany.

            Our platform offers a unique opportunity for students from both institutions to engage in enriching intercultural exchanges. Through our website, you can easily connect with fellow students, share knowledge, participate in joint projects, and explore new academic perspectives.

            Whether you're interested in internships, collaborative research projects, or simply the experience of building connections with students from a different culture, our collaborative website opens the doors to international exchange.

            Join us today and be part of this collaborative adventure that transcends borders in learning and fosters intercultural understanding. Together, we are building a bridge between UCA and DHBW for a promising educational and professional future.

            Unite, share your ideas, and shape your student journey with the power of UCA-DHBW collaboration.
            </p>
           
            <div class="row">
                
            <div class="py-4 mx-2 d-flex">
           
                <div class="col-12">
                    <div class="row card-prof-fill mx-1 mb-4 py-4">
                       <div class="col-lg-3 col-md-4 col-sm-12 d-flex justify-content-center">
                        <img src="{{ asset('img/fatiha.jpg') }}"  style="width: 90%; height: 50 %;" >
                        </div>
                        <div class="col-lg-9 col-md-8 col-sm-12">
                               <p><b><h6 style="color: #800; display: inline;">Full name:</h6> <h6 style="color: black; display: inline;">Ait Baali Fatiha</h6></b></p><br>
                               <p><b><h6 style="color: #800; display: inline;">Nationality:</h6> <h6 style="color: black; display: inline;">Moroccan</h6></b></p><br>
                               <p><b><h6 style="color: #800; display: inline;">University:</h6> <h6 style="color: black; display: inline;"> Cadi Ayyad, Faculty of Sciences Semlalia Marrakesh (FSSM)</h6></b></p><br>
                               <p><b><h6 style="color: #800; display: inline;">Date of birth:</h6> <h6 style="color: black; display: inline;">13/09/2000</h6></b></p><br>
                               <p><b><h6 style="color: #800; display: inline;">Email:</h6>        <a href="mailto:loubnalazgham63@gmail.com" style="color: black; display: inline;">fatihabaali137@gmail.com</a></b></p><br>
                               <p><b><h6 style="color: #800; display: inline;"><a href="http://www.linkedin.com/in/fatiha-baali/">LinkedIn</a>                            
                        </div>
                    </div>
                    <div class="row card-prof-fill mx-1 mb-4 py-4">
                        <div class="col-lg-3 col-md-4 col-sm-12 d-flex justify-content-center">
                            <img src="{{ asset('img/loubnaaa.png') }}" style="width: 90%; height: 90%;">
                        </div>
                        <div class="col-lg-9 col-md-8 col-sm-12">
                            <p><b><h6 style="color: #800; display: inline;">Full name:</h6> <h6 style="color: black; display: inline;">LAZGHAM Loubna</h6></b></p><br>
                            <p><b><h6 style="color: #800; display: inline;">Nationality:</h6> <h6 style="color: black; display: inline;">Moroccan</h6></b></p><br>
                            <p><b><h6 style="color: #800; display: inline;">University:</h6> <h6 style="color: black; display: inline;"> Cadi Ayyad, Faculty of Sciences Semlalia Marrakesh (FSSM)</h6></b></p><br>
                            <p><b><h6 style="color: #800; display: inline;">Date of birth:</h6> <h6 style="color: black; display: inline;">19/02/2001</h6></b></p><br>
                            <p><b><h6 style="color: #800; display: inline;">Email:</h6>         <a href="mailto:loubnalazgham63@gmail.com" style="color: black; display: inline;">loubnalazgham63@gmail.com</a></b></p></br>
                            <p><b><h6 style="color: #800; display: inline;"> <a href="http://linkedin.com/in/loubna-lazgham-a498a81b7">LinkedIn</a>
                        </div>
                    </div>

                    <div class="row card-prof-fill mx-1 mb-4 py-4">
                        <div class="col-lg-3 col-md-4 col-sm-12 d-flex justify-content-center">
                           <img src="{{ asset('img/must.png') }}"  style="width: 90%; height: 50 %;" >
                        </div>
                        <div class="col-lg-9 col-md-8 col-sm-12">
                               <p><b><h6 style="color: #800; display: inline;">Full name:</h6> <h6 style="color: black; display: inline;">EJ-JAMAAY El mustapha </h6></b></p><br>
                               <p><b><h6 style="color: #800; display: inline;">Nationality:</h6> <h6 style="color: black; display: inline;">Moroccan</h6></b></p><br>
                               <p><b><h6 style="color: #800; display: inline;">University:</h6> <h6 style="color: black; display: inline;"> Cadi Ayyad, Faculty of Sciences Semlalia Marrakesh (FSSM)</h6></b></p><br>
                               <p><b><h6 style="color: #800; display: inline;">Date of birth:</h6> <h6 style="color: black; display: inline;">14/03/2001</h6></b></p><br>
                               <p><b><h6 style="color: #800; display: inline;">Email:</h6>        <a href="mailto:loubnalazgham63@gmail.com" style="color: black; display: inline;">mustejjamaay2001@gmail.com</a></b></p><br>
                               <p><b><h6 style="color: #800; display: inline;"><a href="http://linkedin.com/in/el-mustapha-ej-jamaay-772087182">LinkedIn</a>                             
                        </div>
                    </div>
                    <div class="row card-prof-fill mx-1 mb-4 py-4">
                    <div class="col-lg-3 col-md-4 col-sm-12 d-flex justify-content-center">
                        <img src="{{ asset('img/mohamed.jpg') }}"  style="width: 90%; height: 50 %;" >
                        </div>
                        <div class="col-lg-9 col-md-8 col-sm-12">
                               <p><b><h6 style="color: #800; display: inline;">Full name:</h6> <h6 style="color: black; display: inline;">LAFHAM Mohamed</h6></b></p><br>
                               <p><b><h6 style="color: #800; display: inline;">Nationality:</h6> <h6 style="color: black; display: inline;">Moroccan</h6></b></p><br>
                               <p><b><h6 style="color: #800; display: inline;">University:</h6> <h6 style="color: black; display: inline;"> Cadi Ayyad, Faculty of Sciences Semlalia Marrakesh (FSSM)</h6></b></p><br>
                               <p><b><h6 style="color: #800; display: inline;">Date of birth:</h6> <h6 style="color: black; display: inline;">08-01-2001</h6></b></p><br>
                               <p><b><h6 style="color: #800; display: inline;">Email:</h6>        <a href="mailto:loubnalazgham63@gmail.com"style="color: black; display: inline;">lafham.mohamed@gmail.com</a></b></p><br>
                               <p><b><h6 style="color: #800; display: inline;" ><a href="http://linkedin.com/in/mohamed-lafham">LinkedIn</a>
                        </div>
                    </div>
                    <div class="row card-prof-fill mx-1 mb-4 py-4">
                        <div class="col-lg-3 col-md-4 col-sm-12 d-flex justify-content-center">
                            <img class="img-fluid" src="{{ asset('img/oussama.jpeg') }}"  style="width: 90%; height: 50 %;" >
                        </div>
                        <div class="col-lg-9 col-md-8 col-sm-12">
                               <p><b><h6 style="color: #800; display: inline;">Full name:</h6> <h6 style="color: black; display: inline;">AKHATAR Oussama</h6></b></p><br>
                               <p><b><h6 style="color: #800; display: inline;">Nationality:</h6> <h6 style="color: black; display: inline;">Moroccan</h6></b></p><br>
                               <p><b><h6 style="color: #800; display: inline;">University:</h6> <h6 style="color: black; display: inline;"> Cadi Ayyad, Faculty of Sciences Semlalia Marrakesh (FSSM)</h6></b></p><br>
                               <p><b><h6 style="color: #800; display: inline;">Date of birth:</h6> <h6 style="color: black; display: inline;">01/10/2001</h6></b></p><br>
                               <p><b><h6 style="color: #800; display: inline;">Email:</h6>        <a href="mailto:loubnalazgham63@gmail.com"style="color: black; display: inline;">oussamaakhatar2@gmail.com</a></b></p><br>
                               <p><b><h6 style="color: #800; display: inline;"> <a href="https://ma.linkedin.com/in/oussamaakhatar">LinkedIn </a>                          
                        </div>
                    </div>
                </div> 
                
            
            </div>
        </div>
    </div>

    @include('footer')
</body>

</html>

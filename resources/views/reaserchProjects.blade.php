<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reaserch project</title>
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
            <a class="nav-link active" href="/Projects">Research Projects</a>
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
                <div class="carousel-item carousel-item-4 active  rounded">
                    <div class="carousel-caption d-none d-md-block ">
                        <h1>Reaserch Projects</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="mt-4">
    <div class="container container text-center text-sm-start py-2">
        <div class="row d-sm-flex align-items-center justify-content-center">
            <div class="col-lg py-3">
                <h3 style="font-style: oblique;">The Research Project scheduled in semester 9 of the 5th year involves a
                    period of practical experience in an academic environment.</h3>
            </div>
        </div>
    </div>
</section>

@foreach ($projects as $project)

    <section class="m-4  mx-5 border">
        <div class="container text-center text-sm-start py-2">
            <div class="row d-sm-flex">
                <div class=" col-lg text-center py-3">
                    <img class="w-50 " src="{{asset('images/'.$project->image_project)}}" alt="logo ">
                </div>
                <div class="col-lg py-3  text-center">
                    <h3 style="text-align: justify;font-weight:bold;" class="">{{$project->title}}</h3>
                    <h3 style="text-align: justify;font-weight:bold;" class="">{{$project->created_at}}</h3>
                    <p style="text-align: justify;" class="mt-3">{{$project->description}}</p>
                    
                </div>
                
            </div>
        </div>
        </div>
    </section>
    
@endforeach
<nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center mt-5">
        <li class="page-item"><a class="page-link me-2 p-3 px-4 broder-0"
                style="border-radius: 0 ;background-color: #c78735; color:#ffffff" href="#">Previous</a>
        </li>
        <li class="page-item"><a class="page-link me-2 p-3 px-4 broder-0"
                style="border-radius: 0; background-color: #c78735; color:#ffffff" href="#">1</a>
        </li>
        <li class="page-item"><a class="page-link me-2 p-3 px-4 broder-0"
                style="border-radius: 0; background-color: #c78735; color:#ffffff" href="#">2</a>
        </li>
        <li class="page-item"><a class="page-link me-2 p-3 px-4 broder-0"
                style="border-radius: 0; background-color: #c78735; color:#ffffff" href="#">3</a>
        </li>
        <li class="page-item"><a class="page-link p-3 px-4 broder-0"
                style="border-radius: 0; background-color: #c78735; color:#ffffff" href="#">Next</a>
        </li>
    </ul>
</nav><br><br>
@include('footer')

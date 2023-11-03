<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>News</title>
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
                    <div class="carousel-item carousel-item-1 active">
                        <div class="carousel-caption d-none d-md-block">
                            <h1 class="display-1 fw-bold">News</h1>
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
            <a href="/new" class="lien mx-2" style="color: #800000">News</a>
        </div>
        <div class="p-5">
            <h1 style="color: #800000">Home / <span class="text-secondary">News</span></h1>
            <hr style="width: 10%; border: 1px solid #800000;">
        </div>
    </div>

    <div class="container">

        @foreach($lastnews as $ln)
        <div class="border border-dark pb-5 px-5 bg-light image-back" style="padding-top: 200px">
            <p class="mt-5 ms-5 p-3 border border-dark h5 bg-white" style="margin-right: 700px;">{{date('l, F jS, Y', strtotime($ln->created_at))}}</p>
            <br>
            <p class="mb-3 ms-5 p-3 border border-dark h5 bg-white" style="color: #c78735; margin-right: 300px;">{{$ln->title}}</p>
        </div>
        @endforeach

        {{-- <div class="row mt-5">
            <div class="col-6">
                <div class="card p-3" style="width: 100%;height: 100%;">
                    <img src="{{ asset('img/marrakech.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body pb-2">
                        <div class="">
                            <h5 class="card-title mb-4">28 Jan 2022 | News</h5>
                            <h6 class="card-title mb-3" style="color: #c78735">BEYOND SCALE: “CONTAGION” WITH KELLER
                                EASTERLING</h6>
                            <p class="mt-5" style="text-align: justify; font-size: 12px;">Join
                                Keller Easterling, designer, writer and professor at Yale, in this "Beyond Scale"
                                masterclass.</p>
                                <button class="btn h6"
                                style="background-color: #800000; border: 1px solid #800000; border-radius: 0; color:#ffffff">LEARN
                                MORE</button>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        

        <div class="my-4 ">
            <div class="col-lg-8">
            <div class="py-4 px-4 d-flex flex-column" style="border:2px solid #c78735">
                <select name="" id=""
                    style="color:#c78735; border:2px solid #c78735; font-weight: bold"
                    class="pe-5 ps-2 py-2 mb-3">
                    <option value="">Programs</option>
                </select>
                <input type="date" style="color:#c78735; border:2px solid #c78735; font-weight: bold"
                    class="ps-2 py-2 mb-5">
                <button class="btn"
                    style="background-color: #c78735; border: 1px solid #c78735; border-radius: 0; color:#ffffff">APPLY
                    FILTERS</button>
            </div>
        </div>
            <h4 style="color: #c78735" class="mb-4">Latest News</h4>
            @foreach($allnews as $an)
            <div class="row border rounded m-3">
                <div class="col-9">
                    <div class="row mb-3">
                        <div class="col-lg-4  border-dark">
                            @if (!empty($an->image))
                                <img src="{{ asset('images/'.$an->image) }}" class="card-img-top img-fluid m-3" style="width: 100%;height: 20rem" alt="...">
                            @else
                                <img src="{{ asset('images/staticnews.jpg') }}" class="card-img-top img-fluid m-3" style="width: 100%;height: 20rem" alt="Default Image">
                            @endif
                        </div>
                        <div class="col-lg-8 p-4">
                            <p class="mb-3">{{date('l, F jS, Y  ,h:i A', strtotime($an->created_at))}}</p>
                            <h4 class="mb-3">{{$an->title}}</h4>
                            <p style="text-align: justify">{{$an->description}}</p>
                            <hr class="horizotal" style="width: 15%">
                            {{-- <p class="mt-5 mb-4">18:00, ONLINE, ENGLISH</p> --}}
                            <!-- <a href="/news-space/{{$an->id}}" class="btn h6"
                                style="background-color: #800000; border: 1px solid #800000; border-radius: 0; color:#ffffff">LEARN
                                MORE</a> -->
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center mt-5">
                <li class="page-item"><a class="page-link me-2 p-3 px-4 broder-0"
                        style="border-radius: 0 ;background-color: #c78735; color:#ffffff">Previous</a>
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
        </nav>
    </div>



    @include('footer')
</body>

</html>

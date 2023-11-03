
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
                <a class="nav-link" href="/technicalAcheivements">Technical Achievements</a>
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
    </div>
</nav>
    

<div class="container carousel-bo">
    <div id="controlsCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="overlay">
                <div class="carousel-item carousel-item-1 active">
                    <div class="carousel-caption d-none d-md-block">
                        <h2>Academic Cooperation UCA & DHBW</h2>
                    </div>
                </div>
                <div class="carousel-item carousel-item-2 active">
                    <div class="carousel-caption d-none d-md-block">
                        <h2>Academic Cooperation UCA & DHBW</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="autres-liens py-2">
            <nav class="navbar navbar-expand-md justify-content-center align-items-center pt-2">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/news">News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                    </li>
                    
                </ul>
            </nav>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#controlsCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previoussss</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#controlsCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

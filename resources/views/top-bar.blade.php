<div class="row me-0">
    <div class="col-4" id="logo">
        <div class="d-flex justify-content-center align-items-center">
            <img src="{{ asset('img/logo.jpg') }}" class="img-fluid w-75 p-2">
        </div>
    </div>
    <div class="col-4  text-center align-self-center" style="color:#800000" id="text">
        <h4>UCA & DHBW <br> Cooperation</h4>
    </div>
    <div class="col-4 align-self-center d-none d-sm-block" id="search">
        <div class="input-group">
            <span class="input-group-text border-0" id="search-addon">
                <i class="fas fa-search"></i>
            </span>
            <input type="search" class="form-control search" placeholder="Search" aria-label="Search"
                onclick="largeSearch();" />
        </div>
        <ul>
        {{-- @guest
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
        @endguest --}}
        
    </div>  
</div>

<script src="{{ asset('js/script.js') }}"></script>

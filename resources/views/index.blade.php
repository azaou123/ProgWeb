<section class="mt-4">
    <div class="container">
        <h5 class="color-gold">INTERNATIONAL COOPERATION</h5>
        <h2 class="mt-3">Cooperative Education<br>with DHBW</h2>
        <div class="row">
            <div class="col-lg-8 p-3">
                <div>
                <p style="text-align: justify;" class="mt-3">
                    Apart from international cooperation co-ordinated by specific and externally funded
                    programs, UCA university maintains a number of relationships with national and international
                    universities and institutions. By doing so, and through the signature of cooperation
                    agreements, the UCA aims to develop joint research projects, educational activities and the
                    exchange between professors and students.
                </p>
                <p style="text-align: justify;" class="mt-3">
                    Ultimately, <b>Baden-Württemberg Cooperative State University (DHBW) and Cadi Ayyad
                        University (UCA),</b> have entered into a general agreement to foster international cooperation
                    in education and research and also facilitate educational exchanges between the two
                    universities. This was driven by the need to offer international experiences to students,
                    faculty, and staff, and to strengthen the existing cultural and educational links between the
                    two institutions. The two universities agreed on a productive and positive long term
                    cooperative relationship where they both consent to :
                </p>
                </div>
            </div>
            <div class="col-lg-4 p-3">
                <img src="{{ asset('img/Germany_Morocco_Locator.jpg') }}" alt="" class="img-fluid w-100">
            </div>
        </div>
    </div>
</section>

<section class="p-5 text-center">
    <div class="container text-center   ">
        <div class="row text-center">
            <div class="col">
                <div class="card card-fill">
                    <div class="card-body">
                        <h5 class="card-title"><i class="bi bi-people-fill text-white"></i></h5>
                        <h6 class="card-subtitle mt-4 text-white">Work in<br>cooperation</h6>
                    </div>
                </div>
            </div>
            <div class="col my-1">
                <div class="card card-not-fill">
                    <div class="card-body">
                        <h5 class="card-title"><i class="bi bi-archive"></i></h5>
                        <h6 class="card-subtitle mt-4">Explore<br>options</h6>
                    </div>
                </div>
            </div>
            <div class="col my-1">
                <div class="card card-fill">
                    <div class="card-body">
                        <h5 class="card-title"><i class="bi bi-file-earmark-plus text-white"></i></h5>
                        <h6 class="card-subtitle mt-4 text-white">Create research<br>opportunities</h6>
                    </div>
                </div>
            </div>
            <div class="col my-1">
                <div class="card card-not-fill">
                    <div class="card-body">
                        <h5 class="card-title"><i class="bi bi-lightbulb"></i></h5>
                        <h6 class="card-subtitle mt-4">Meet the academic, <br>intellectual, and<br> creative needs
                            of<br>institutions.</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="container">
    <div class="row">
        <div class="col-lg-4">
            <h2 class="px-3">Specific Areas<br> Cooperation</h2>
            <div class="px-3">
                <p style="text-align: justify;">
                    Subject to mutual consent, the area of
                    cooperation includes any program
                    offered at either institution in which the
                    two institutions believe cooperation is
                    feasible and desirable and which could
                    contribute to fostering and developing a
                    mutually beneficial relationship between
                    the two institutions.
                </p>
                <p style="text-align: justify;">The following exchange activities are
                    examples of possible shared programs
                    that can take place
                    through the
                    partnership.
                </p>
            </div>
        </div>
        <div class="col-lg-4 img-1 d-flex align-items-center justify-content-center text-white ">
            <a class="nav-link" href="/interchanges-student"><h4>Students Exchange</h4></a>
        </div>
        <div class="col-lg-4">
            <div class="d-flex flex-column">
                <div class="img-2 d-flex align-items-center justify-content-center text-white ps-2 mb-2">
                <a class="nav-link" href="/interchanges-staff" ><h4>Faculty and Staff Exchange</h4></a>
                </div>
                <div class="img-3 d-flex align-items-center justify-content-center text-white ps-2">
                <a class="nav-link" href="/technicalAcheivements"><h4>Fab Lab </h4></a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="container mt-5">
    <h1 class="mb-3">Latest News</h1>
    <div class="row">
        @foreach ($latestNews as $ne)
        <div class="col-md-4 my-2">
            <div class="card" style="width: 100%;height: 100%;">
            @if (!empty($ne->image))
                <img src="{{ asset('images/'.$ne->image) }}" class="card-img-top img-fluid" style="width: 100%;height: 20rem" alt="...">
            @else
                <img src="{{ asset('images/staticnews.jpg') }}" class="card-img-top img-fluid" style="width: 100%;height: 20rem" alt="Default Image">
            @endif
            <div class="card-body pb-2">
                    <div class="d-flex justify-content-between">
                        <span class="" style="font-size: 10px;"><i class="bi bi-calendar-fill "></i><span class="mx-3">{{date('l, F jS, Y', strtotime($ne->created_at))}}</span></span>
                        
                    </div>
                    <div class="d-flex align-items-start flex-column">
                        <h5 class="card-title">{{$ne->title}}</h5>
                        <p class="card-text" style="text-align: justify; font-size: 12px; height: 7rem;">{{$ne->description}}</p>
                        <!-- <a href="/news-space/{{$ne->id}}" class="btn btn-news mt-2 mb-auto">Learn More ></a> -->
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>

<section class="mt-5">
    <hr class="horizotal">
    <div class="container">
        <div class="row">
            <div class="col border-right">
                <div class="d-flex flex-column align-items-center infos-3">
                    <i class="fa-solid fa-graduation-cap"></i>
                    <span class="my-1">{{ $nbrStudent }}</span>
                    <p>Students</p>
                </div>
            </div>
            <div class="col border-right">
                <div class="d-flex flex-column align-items-center infos-3">
                    <i class="fa-solid fa-briefcase"></i>
                    <span class="my-1">{{ $nbrWorkshop }}</span>
                    <p>Workshops</p>
                </div>
            </div>
            <div class="col">
                <div class="d-flex flex-column align-items-center infos-3">
                    <i class="fa-regular fa-rectangle-list"></i>
                    <span class="my-1">{{ $nbrProgram }}</span>
                    <p>Programs</p>
                </div>
            </div>
        </div>
    </div>
    <hr class="horizotal">
</section>

<section class="mt-5">
    <div class="container">
        <section class="partners-logos slider">
            @foreach($partners as $partner)
                <div class="slide my-4"> <img class="w-100" src="{{asset('images/'.$partner->logo)}}" alt="image"></div>
            @endforeach
        </section>
    </div>
</section>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>DHWB - UCA</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <!-- CSS Bootstrap -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('') }}">
    <!-- JS Bootstrap --->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

<body>


    <div class="row">
        <div class="col-4 align-items-center">
            <nav class="navbar"
                style="height: 100%;margin-top:0px;position:fixed;box-shadow: 4px 3px 8px 1px #969696;-webkit-box-shadow: 4px 3px 8px 1px #969696;">

                <ul class="nav navbar-nav">
                    <div class=" align-item-center p-3">
                        <img class="" style="width:200px;height:70px;margin-top:-210px"
                            src="{{ asset('img/logo.jpg') }}" alt="..." />
                    </div>
                    <a href="#" class="active"
                        style=" background-color: #eee; color: black; display: block; padding: 12px; text-decoration: none; padding-left:20px; margin-top:-70px;">
                        <img class="" src="{{ asset('img/dashboard.png') }}" alt="..." />
                        &emsp;Doashboard
                    </a>
                    <li class="nav-item">
                        <div class="accordion accordion-flush" id="accordionFlushExample" style="margin-bottom:10px">

                            <div class="accordion-item mt-3">
                                <h2 class="accordion-header" id="flush-headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseOne" aria-expanded="false"
                                        aria-controls="flush-collapseOne">
                                        <img class="" src="{{ asset('img/universite.png') }}"
                                            alt="..." />&emsp;Student
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <hr style=" border-top: 1px solid black;" class="display-1">
                                        <a class="text-start"
                                            style="font-size:13px; text-decoration:none;color:black;font-weight:bold;margin-left:12px"
                                            href="#">Add New Student</dt>

                                            <hr style=" border-top: 1px solid black;" class="display-1">
                                            <a class="text-start"
                                                style="font-size:13px; text-decoration:none;color:black;font-weight:bold"
                                                href="#">&emsp;List Students

                                                </dt>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item mt-2">
                                <h2 class="accordion-header" id="flush-headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                        aria-controls="flush-collapseTwo">
                                        <img class="" src="{{ asset('img/prof.png') }}"
                                            alt="..." />&emsp;Teacher
                                    </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <hr style=" border-top: 1px solid black;" class="display-1">
                                        <a class="text-start"
                                            style="font-size:13px; text-decoration:none;color:black;font-weight:bold"
                                            href="#">&emsp;Add New Teacher</dt>

                                            <hr style=" border-top: 1px solid black;" class="display-1">
                                            <a class="text-start"
                                                style="font-size:13px; text-decoration:none;color:black;font-weight:bold"
                                                href="#">&emsp;List Teachers


                                                </dt>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item mt-2">
                                <h2 class="accordion-header" id="flush-headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseThree" aria-expanded="false"
                                        aria-controls="flush-collapseThree">
                                        <img class="" src="{{ asset('') }}" alt="..." />
                                        &emsp;Exchange Programs
                                    </button>
                                </h2>
                                <div id="flush-collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <hr style=" border-top: 1px solid black;" class="display-1">
                                        <a class="text-start"
                                            style="font-size:13px; text-decoration:none;color:black;font-weight:bold"
                                            href="#">&emsp;Add New Exchanges
                                            Students</dt>

                                            <hr style=" border-top: 1px solid black;" class="display-1">
                                            <a class="text-start"
                                                style="font-size:13px; text-decoration:none;color:black;font-weight:bold"
                                                href="#">&emsp;List Exchange

                                                Students

                                                </dt>
                                                <hr style=" border-top: 1px solid black;" class="display-1">
                                                <a class="text-start"
                                                    style="font-size:13px; text-decoration:none;color:black;font-weight:bold"
                                                    href="#">&emsp;Add New Exchanges
                                                    Teacher

                                                    </dt>
                                                    <hr style=" border-top: 1px solid black;" class="display-1">
                                                    <a class="text-start"
                                                        style="font-size:13px; text-decoration:none;color:black;font-weight:bold"
                                                        href="#">&emsp;List Exchange

                                                        Teachers

                                                        </dt>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item mt-2">
                                <h2 class="accordion-header" id="flush-headingFour">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#flush-collapseFour"
                                        aria-expanded="false" aria-controls="flush-collapseFour">
                                        <img class="" src="{{ asset('img/workshop.png') }}"
                                            alt="..." />&emsp;Workshops&emsp;
                                    </button>
                                </h2>
                                <div id="flush-collapseFour" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <hr style=" border-top: 1px solid black;" class="display-1">
                                        <a class="text-start"
                                            style="font-size:13px; text-decoration:none;color:black;font-weight:bold"
                                            href="#">&emsp;Add New Workshops</dt>

                                            <hr style=" border-top: 1px solid black;" class="display-1">
                                            <a class="text-start"
                                                style="font-size:13px; text-decoration:none;color:black;font-weight:bold"
                                                href="#">&emsp;List Workshops

                                                </dt>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item mt-2">
                                <h2 class="accordion-header" id="flush-headingFive">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#flush-collapseFive"
                                        aria-expanded="false" aria-controls="flush-collapseFive">
                                        <img class="" src="{{ asset('') }}"
                                            alt="..." />&emsp;Reaserch

                                        Project
                                    </button>
                                </h2>
                                <div id="flush-collapseFive" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <hr style=" border-top: 1px solid black;" class="display-1">
                                        <a class="text-start"
                                            style="font-size:13px; text-decoration:none;color:black;font-weight:bold"
                                            href="#">&emsp;Add New Reaserch

                                            Project</dt>

                                            <hr style=" border-top: 1px solid black;" class="display-1">
                                            <a class="text-start"
                                                style="font-size:13px; text-decoration:none;color:black;font-weight:bold"
                                                href="#">&emsp;List Reaserch

                                                Project

                                                </dt>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item mt-2">
                                <h2 class="accordion-header" id="flush-headingSix">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#flush-collapseSix"
                                        aria-expanded="false" aria-controls="flush-collapseSix">
                                        <img class="" src="{{ asset('img/research.png') }}"
                                            alt="..." />&emsp;Fab lab

                                    </button>
                                </h2>
                                <div id="flush-collapseSix" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <hr style=" border-top: 1px solid black;" class="display-1">
                                        <a class="text-start"
                                            style="font-size:13px; text-decoration:none;color:black;font-weight:bold"
                                            href="#">&emsp;Add New Fab lab
                                            </dt>

                                            <hr style=" border-top: 1px solid black;" class="display-1">
                                            <a class="text-start"
                                                style="font-size:13px; text-decoration:none;color:black;font-weight:bold"
                                                href="#">&emsp;List Fab lab


                                                </dt>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item mt-2">
                                <h2 class="accordion-header" id="flush-headingSeven">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven"
                                        aria-expanded="false" aria-controls="flush-collapseSeven">
                                        <img class="" src="{{ asset('img/code.png') }}"
                                            alt="..." />&emsp;Programs

                                    </button>
                                </h2>
                                <div id="flush-collapseSeven" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingSeven" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <hr style=" border-top: 1px solid black;" class="display-1">
                                        <a class="text-start"
                                            style="font-size:13px; text-decoration:none;color:black;font-weight:bold"
                                            href="#">&emsp;Add Cultural Programs
                                            </dt>

                                            <hr style=" border-top: 1px solid black;" class="display-1">
                                            <a class="text-start"
                                                style="font-size:13px; text-decoration:none;color:black;font-weight:bold"
                                                href="#">&emsp;Add Academic Programs</a>


                                            </dt>
                                            <hr style=" border-top: 1px solid black;" class="display-1">
                                            <a class="text-start"
                                                style="font-size:13px; text-decoration:none;color:black;font-weight:bold"
                                                href="#">&emsp;List Programs



                                                </dt>
                                    </div>
                                </div>
                            </div>

                        </div>
        </div>


        <div class="col-9 align-items-center text-center"style="margin-left:240px;margin-top:0px">
            <!-- Navbar -->
            <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-wight" style="margin-left:240px;">
                <!-- Container wrapper -->
                <div class="container-fluid">
                    <!-- Toggle button -->
                    <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
                        data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-bars"></i>
                    </button>

                    <!-- Collapsible wrapper -->
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Navbar brand -->
                        <a class="navbar-brand mt-2 mt-lg-0" href="#">

                            <!---- ajout de text --------------->


                        </a>
                        <!-- Left links -->

                        <!-- Avatar -->
                        <div class="dropdown">
                            <a class="dropdown-toggle d-flex align-items-center hidden-arrow" href="#"
                                id="navbarDropdownMenuAvatar" role="button" data-mdb-toggle="dropdown"
                                aria-expanded="false">
                                <img src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp" class="rounded-circle"
                                    height="50" alt="Black and White Portrait of a Man" loading="lazy" />
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuAvatar">
                                <li>
                                    <a class="dropdown-item" href="#">My profile</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Settings</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Logout</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Right elements -->
                </div>
                <!-- Container wrapper -->
            </nav>
            <!-- Navbar -->
            <!-- Navbar -->


            <h1 class="text-start"style="margin-left:140px;margin-top:60px;margin-bottom:-60px"> Add Teacher</h1>
            <form style="margin-left:140px;background-color:#eee;height:500px;border-radius:15px">
                <div class="row" style="margin-left:50px;margin-top:90px;margin-right:39px">
                    <h3 style="margin-top:15px">Teacher</h3>
                    <div class="form-group col-md-6" style="margin-top:30px">
                        <label for="inputEmail4 text-start ">Last name</label>
                        <input type="email" class="form-control" id="inputEmail4" placeholder="last name"
                            style="height:47px ;">
                    </div>
                    <div class="form-group col-md-6" style="margin-top:30px">
                        <label for="inputState">University</label>
                        <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                            <option selected></option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                </div>
                <div class="row" style="margin-left:50px;margin-top:20px;margin-right:39px">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">First name </label>
                        <input type="email" class="form-control" id="inputEmail4" placeholder="first name"
                            style="height:47px">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputState">Speciality</label>
                        <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                            <option selected></option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                </div>
                <div class="row" style="margin-left:50px;margin-top:20px;margin-right:39px">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Nationality</label>
                        <input type="email" class="form-control" id="inputEmail4" placeholder="nationality"
                            style="height:47px">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Email Adress </label>
                        <input type="email" class="form-control" id="inputEmail4" placeholder="email adress"
                            style="height:47px">
                    </div>
                </div>
                <div class="row" style="margin-left:50px;margin-top:20px;margin-right:39px">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Phone number</label>
                        <input type="email" class="form-control" id="inputEmail4" placeholder="phone number"
                            style="height:47px">
                    </div>
                    <div class="form-group">
                    </div>
                    <div class="align-items-center" style="margin-top:50px;margin-bottom:50px">
                        <button type="submit" class="btn btn-primary"
                            style="width:100px;height:40px ;background-color:#800000;border:3px solid #800000">Sign
                            in</button>
            </form>

        </div>


    </div>
    </div>
</body>

</html>

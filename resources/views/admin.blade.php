<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>DHWB - UCA</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css">
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <!-- CSS Bootstrap -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('') }}">
    <!-- JS Bootstrap --->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

<body>


    <nav class="navbar navbar-expand-lg navbar-light bg-wight" style="height:120px;margin-left:30px">
        <!-- Container wrapper -->
        <div class="container-fluid">
            <!-- Toggle button -->
            <img class="" style="width:200px;height:70px;" src="{{ asset('img/logo.jpg') }}" alt="..." />

            <!-- Collapsible wrapper -->
            <div class="collapse navbar-collapse" id="navbarRightAlignExample">
                <!-- Left links -->
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item me-3">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link" href="#">Interchanges</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link" href="#">Workshops</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link" href="#">Research Projects</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link" href="#">Programs</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link" href="#">Technical Acheivements</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link" href="#">Partners</a>
                    </li>


                </ul>
                <!-- Left links -->
            </div>
            <!-- Collapsible wrapper -->
        </div>
        <!-- Container wrapper -->
    </nav>
    <section class="vh-120" style="background-color: #800000;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-30">
                    <div class="card" style="border-radius: 1rem; ">
                        <div class="row g-0">
                            <div class="col-md-6 col-lg-8 d-none d-md-block">
                                <img src="{{ asset('img/faculte.jpg') }}"alt="login form" class="img-fluid"
                                    style="border-top-left-radius: 1rem;border-bottom-left-radius: 1rem;height:650px" />
                            </div>
                            <div class="col-md-6 col-lg-4 d-flex align-items-center">
                                <div class="card-body p-4 p-lg-5 text-black">

                                    <form>

                                        <div class="d-flex align-items-center mb-3 pb-1">
                                            <i class="bi bi-mortarboard-fill fa-2x me-3" style="color:#800000"></i>
                                            <span class="h5 fw-bold mb-0 text-center" style="color: #800000;">Academic
                                                Cooperation<br>UCA & DHBW</span>
                                        </div>

                                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your
                                            account</h5>

                                        <div class="form-outline mb-4">
                                            <input type="email" id="form2Example17"
                                                class="form-control form-control-lg" />
                                            <label class="form-label" for="form2Example17">Email address</label>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <div class="input-group">
                                                <input type="password" name="password" id="password"
                                                    class="form-control" data-toggle="password">
                                                <div class="input-group-append">
                                                    <span class="input-group-text">
                                                        <i class="fa fa-eye"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <label class="form-label" for="form2Example17">Password</label>
                                        </div>

                                        <div class="pt-1 mb-4">
                                            <button class="btn btn-dark btn-lg btn-block" type="button"
                                                style="background-color:#800000;border:none">Login</button>
                                        </div>

                                        <a class="small text-muted" href="#!">Forgot password?</a>
                                        <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a
                                                href="#!" style="color: #393f81;">Register here</a></p>
                                        <a href="#!" class="small text-muted">Terms of use.</a>
                                        <a href="#!" class="small text-muted">Privacy policy</a>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="/path/to/bootstrap-show-password.js"></script>
</body>

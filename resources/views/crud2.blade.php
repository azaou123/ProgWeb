<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crud 2.0</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/sidebars.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        img {}

        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }

        i.crud {
            color: #800000;
            font-size: 20px;
            margin-left: 10px;
        }

        th {
            color: #800000;
        }
    </style>
</head>

<body>
    <div class="d-flex">
        <div class="col-md-3 p-3">
            <a href="/" class="d-flex align-items-center pb-3 mb-3 link-dark text-decoration-none border-bottom">
                <img src="{{ asset('img/logo.jpg') }}" alt="" style="" class="img-fluid">
            </a>
            <div class="accordion accordion-flush" id="dashboard">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-dash">
                        <button class="btn d-flex" type="button" data-bs-toggle="collapse" data-bs-target=""
                            aria-expanded="false" aria-controls="">
                            <i class="bi bi-house-door me-1"></i> Dashboard
                        </button>
                    </h2>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            Student
                        </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body p-0 py-3">
                            <ul class="list-group">
                                <li class="list-group-item"><a href="" class="nav-link">Add New Student</a></li>
                                <li class="list-group-item"><a href="" class="nav-link">List Students</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseThree" aria-expanded="false"
                            aria-controls="flush-collapseThree">
                            Teacher
                        </button>
                    </h2>
                    <div id="flush-collapseThree" class="accordion-collapse collapse"
                        aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <ul class="list-group">
                                <li class="list-group-item"><a href="" class="nav-link">Add New Teacher</a>
                                </li>
                                <li class="list-group-item"><a href="" class="nav-link">List Teachers</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-heading4">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapse4" aria-expanded="false" aria-controls="flush-collapse4">
                            Exanchange Programs
                        </button>
                    </h2>
                    <div id="flush-collapse4" class="accordion-collapse collapse" aria-labelledby="flush-heading4"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <ul class="list-group">
                                <li class="list-group-item"><a href="" class="nav-link">Add New Exanchange
                                        Teacher</a>
                                </li>
                                <li class="list-group-item"><a href="" class="nav-link">List Exanchange
                                        Teachers</a>
                                </li>
                                <li class="list-group-item"><a href="" class="nav-link">Add New Exanchange
                                        Student</a>
                                </li>
                                <li class="list-group-item"><a href="" class="nav-link">List Exanchange
                                        Students</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-heading5">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapse5" aria-expanded="false" aria-controls="flush-collapse5">
                            Workshops
                        </button>
                    </h2>
                    <div id="flush-collapse5" class="accordion-collapse collapse" aria-labelledby="flush-heading5"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <ul class="list-group">
                                <li class="list-group-item"><a href="" class="nav-link">Add New Workshops</a>
                                </li>
                                <li class="list-group-item"><a href="" class="nav-link">List Workshops</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-heading6">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapse6" aria-expanded="false" aria-controls="flush-collapse6">
                            Research Project
                        </button>
                    </h2>
                    <div id="flush-collapse6" class="accordion-collapse collapse" aria-labelledby="flush-heading6"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <ul class="list-group">
                                <li class="list-group-item"><a href="" class="nav-link">Add New Research
                                        Project</a>
                                </li>
                                <li class="list-group-item"><a href="" class="nav-link">List Research
                                        Project</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-heading7">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapse7" aria-expanded="false" aria-controls="flush-collapse7">
                            Fab Lab
                        </button>
                    </h2>
                    <div id="flush-collapse7" class="accordion-collapse collapse" aria-labelledby="flush-heading7"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <ul class="list-group">
                                <li class="list-group-item"><a href="" class="nav-link">Add New Fab Lab</a>
                                </li>
                                <li class="list-group-item"><a href="" class="nav-link">List Fab Lab</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-heading8">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapse8" aria-expanded="false" aria-controls="flush-collapse8">
                            Programs
                        </button>
                    </h2>
                    <div id="flush-collapse8" class="accordion-collapse collapse" aria-labelledby="flush-heading8"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <ul class="list-group">
                                <li class="list-group-item"><a href="" class="nav-link">Add Cultural
                                        Programs</a>
                                </li>
                                <li class="list-group-item"><a href="" class="nav-link">Add Academic
                                        Programs</a>
                                </li>
                                <li class="list-group-item"><a href="" class="nav-link">List Programs</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-9 p-3">
            <div class="p-3 border border-2 border-secondary rounded">
                <h3 class="text-secondary">Teachers List</h3>
            </div>
            <div class="d-flex mt-4">
                <div class="col-6">
                    <div class="mt-3 py-2 d-flex rounded" style="">
                        <select style="color:#800000; border:none; font-weight: bold;" class="pe-5 ps-2 me-5">
                            <option value="">All (56)</option>
                        </select>
                        <button class="btn btn-filter1" style="">APPLY FILTERS</button>
                    </div>
                </div>
                <div class="col-6">
                    <div class="mt-3 py-2 d-flex justify-content-between rounded" style="">
                        <input type="text" style="color:#800000; border:2px solid #800000; font-weight: bold;"
                            class="pe-1 ps-2" placeholder="Name">
                        <select style="color:#800000; border:2px solid #800000; font-weight: bold;" class="pe-5 ps-2">
                            <option value="">Speciality</option>
                        </select>
                        <button class="btn btn-filter1" style="">APPLY FILTERS</button>
                    </div>
                </div>
            </div>
            <div class="px-3 pt-4 border mt-5 rounded">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Speciality</th>
                            <th scope="col">Nationality</th>
                            <th scope="col">Email</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Oussama</td>
                            <td>AKHATAR</td>
                            <td>ISI</td>
                            <td>Moroccan</td>
                            <td>oussamaakhatar2@gmail.com</td>
                            <td>
                                <a href="">
                                    <i class="bi bi-person-fill-add crud"></i>
                                </a>
                                <a href="">
                                    <i class="bi bi-arrow-clockwise crud"></i>
                                </a>
                                <a href="">
                                    <i class="bi bi-trash-fill crud"></i>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>

</html>

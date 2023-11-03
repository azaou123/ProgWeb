<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Bootstrap CRUD Data Table for Database with Modal Form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
    <title>Bootstrap CRUD Data Table for Database with Modal Form</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css"
        integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
    <!-- CSS Bootstrap -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
        integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <!-- JS Bootstrap --->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <style>
        body {


            font-family: 'Varela Round', sans-serif;
            font-size: 13px;
        }

        .table-responsive {
            margin: 90px 0;
        }

        .table-wrapper {
            background: #fff;
            padding: 20px 25px;
            border-radius: 3px;
            min-width: 1000px;
            box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
        }

        .table-title {
            padding-bottom: 15px;
            background: #800000;
            color: #fff;
            padding: 10px 30px;
            min-width: 100%;
            margin: -20px -25px 10px;
            border-radius: 3px 3px 0 0;
        }

        .table-title h2 {
            margin: 5px 0 0;
            font-size: 24px;
        }

        .table-title .btn-group {
            float: right;
        }

        .table-title .btn {
            color: #fff;
            float: right;
            font-size: 13px;
            border: none;
            min-width: 50px;
            border-radius: 2px;
            border: none;
            outline: none !important;
            margin-left: 10px;
        }

        .table-title .btn i {
            float: left;
            font-size: 21px;
            margin-right: 5px;
        }

        .table-title .btn span {
            float: left;
            margin-top: 2px;
        }

        table.table tr th,
        table.table tr td {
            border-color: #e9e9e9;
            padding: 12px 15px;
            vertical-align: middle;
        }

        table.table tr th:first-child {
            width: 60px;
        }

        table.table tr th:last-child {
            width: 100px;
        }

        table.table-striped tbody tr:nth-of-type(odd) {
            background-color: #fcfcfc;
        }

        table.table-striped.table-hover tbody tr:hover {
            background: #f5f5f5;
        }

        table.table th i {
            font-size: 13px;
            margin: 0 5px;
            cursor: pointer;
        }

        table.table td:last-child i {
            opacity: 0.9;
            font-size: 22px;
            margin: 0 5px;
        }

        table.table td a {
            font-weight: bold;
            color: #566787;
            display: inline-block;
            text-decoration: none;
            outline: none !important;
        }

        table.table td a:hover {
            color: #2196F3;
        }

        table.table td a.edit {
            color: #FFC107;
        }

        table.table td a.delete {
            color: #F44336;
        }

        table.table td i {
            font-size: 19px;
        }

        table.table .avatar {
            border-radius: 50%;
            vertical-align: middle;
            margin-right: 10px;
        }

        .pagination {
            float: right;
            margin: 0 0 5px;
        }

        .pagination li a {
            border: none;
            font-size: 13px;
            min-width: 30px;
            min-height: 30px;
            color: #999;
            margin: 0 2px;
            line-height: 30px;
            border-radius: 2px !important;
            text-align: center;
            padding: 0 6px;
        }

        .pagination li a:hover {
            color: #666;
        }

        .pagination li.active a,
        .pagination li.active a.page-link {
            background: #03A9F4;
        }

        .pagination li.active a:hover {
            background: #0397d6;
        }

        .pagination li.disabled i {
            color: #ccc;
        }

        .pagination li i {
            font-size: 16px;
            padding-top: 6px
        }

        .hint-text {
            float: left;
            margin-top: 10px;
            font-size: 13px;
        }

        /* Custom checkbox */
        .custom-checkbox {
            position: relative;
        }

        .custom-checkbox input[type="checkbox"] {
            opacity: 0;
            position: absolute;
            margin: 5px 0 0 3px;
            z-index: 9;
        }

        .custom-checkbox label:before {
            width: 18px;
            height: 18px;
        }

        .custom-checkbox label:before {
            content: '';
            margin-right: 10px;
            display: inline-block;
            vertical-align: text-top;
            background: white;
            border: 1px solid #bbb;
            border-radius: 2px;
            box-sizing: border-box;
            z-index: 2;
        }

        .custom-checkbox input[type="checkbox"]:checked+label:after {
            content: '';
            position: absolute;
            left: 6px;
            top: 3px;
            width: 6px;
            height: 11px;
            border: solid #000;
            border-width: 0 3px 3px 0;
            transform: inherit;
            z-index: 3;
            transform: rotateZ(45deg);
        }

        .custom-checkbox input[type="checkbox"]:checked+label:before {
            border-color: #03A9F4;
            background: #03A9F4;
        }

        .custom-checkbox input[type="checkbox"]:checked+label:after {
            border-color: #fff;
        }

        .custom-checkbox input[type="checkbox"]:disabled+label:before {
            color: #b8b8b8;
            cursor: auto;
            box-shadow: none;
            background: #ddd;
        }

        /* Modal styles */
        .modal .modal-dialog {
            max-width: 400px;
        }

        .modal .modal-header,
        .modal .modal-body,
        .modal .modal-footer {
            padding: 20px 30px;
        }

        .modal .modal-content {
            border-radius: 3px;
            font-size: 14px;
        }

        .modal .modal-footer {
            background: #ecf0f1;
            border-radius: 0 0 3px 3px;
        }

        .modal .modal-title {
            display: inline-block;
        }

        .modal .form-control {
            border-radius: 2px;
            box-shadow: none;
            border-color: #dddddd;
        }

        .modal textarea.form-control {
            resize: vertical;
        }

        .modal .btn {
            border-radius: 2px;
            min-width: 100px;
        }

        .modal form label {
            font-weight: normal;
        }
    </style>
    <script>
        $(document).ready(function() {
            // Activate tooltip
            $('[data-toggle="tooltip"]').tooltip();

            // Select/Deselect checkboxes
            var checkbox = $('table tbody input[type="checkbox"]');
            $("#selectAll").click(function() {
                if (this.checked) {
                    checkbox.each(function() {
                        this.checked = true;
                    });
                } else {
                    checkbox.each(function() {
                        this.checked = false;
                    });
                }
            });
            checkbox.click(function() {
                if (!this.checked) {
                    $("#selectAll").prop("checked", false);
                }
            });
        });
    </script>
</head>

<body>


    <div class="row">
        <div class="col-4 align-items-center">
            <nav class="navbar"
                style="height: 100%;margin-top:0px;position:fixed;box-shadow: 4px 3px 8px 1px #969696;-webkit-box-shadow: 4px 3px 8px 1px #969696;">

                <ul class="nav navbar-nav">
                    <div class=" align-item-center p-3">
                        <img class="img-fluid w-50" src="{{ asset('img/logo.jpg') }}" alt="..." />
                    </div>
                    <a href="#" class="active"
                        style=" background-color: #eee;color: black;display: block;padding: 12px;text-decoration: none;padding-left:20px;margin-top:-70px;">
                        <i class="fa-solid fa-table-columns" style="color: #800000;font-size: 16px"></i>&emsp;Doashboard
                    </a>
                    <li class="nav-item">
                        <div class="accordion accordion-flush" id="accordionFlushExample" style="margin-bottom:10px">

                            <div class="accordion-item mt-3">
                                <h2 class="accordion-header" id="flush-headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseOne" aria-expanded="false"
                                        aria-controls="flush-collapseOne">
                                        <i class="fa-regular fa-screen-users" style="color: #800000"></i>&emsp;Student
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <hr style=" border-top: 1px solid black;" class="display-1">
                                        <a class="text-start"
                                            style="font-size:13px; text-decoration:none;color:black;font-weight:bold;margin-left:12px"
                                            href="#">Add New Student
                                        </a>

                                        <hr style=" border-top: 1px solid black;" class="display-1">
                                        <a class="text-start"
                                            style="font-size:13px; text-decoration:none;color:black;font-weight:bold"
                                            href="#">&emsp;List Students
                                        </a>
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
                                            href="#">&emsp;Add New Teacher
                                        </a>

                                        <hr style=" border-top: 1px solid black;" class="display-1">
                                        <a class="text-start"
                                            style="font-size:13px; text-decoration:none;color:black;font-weight:bold"
                                            href="#">&emsp;List Teachers
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item mt-2">
                                <h2 class="accordion-header" id="flush-headingThree">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#flush-collapseThree"
                                        aria-expanded="false" aria-controls="flush-collapseThree">
                                        <img class="" src="{{ asset('img/universite.png') }}" alt="..." />
                                        &emsp;Exchange Programs
                                    </button>
                                </h2>
                                <div id="flush-collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <hr style=" border-top: 1px solid black;" class="display-1">
                                        <a class="text-start"
                                            style="font-size:13px; text-decoration:none;color:black;font-weight:bold"
                                            href="#">&emsp;Add New Exchanges Students
                                        </a>
                                        <hr style=" border-top: 1px solid black;" class="display-1">
                                        <a class="text-start"
                                            style="font-size:13px; text-decoration:none;color:black;font-weight:bold"
                                            href="#">&emsp;List Exchange Students
                                        </a>
                                        <hr style=" border-top: 1px solid black;" class="display-1">
                                        <a class="text-start"
                                            style="font-size:13px; text-decoration:none;color:black;font-weight:bold"
                                            href="#">&emsp;Add New Exchanges Teacher
                                        </a>
                                        <hr style=" border-top: 1px solid black;" class="display-1">
                                        <a class="text-start"
                                            style="font-size:13px; text-decoration:none;color:black;font-weight:bold"
                                            href="#">&emsp;List Exchange Teachers </a>
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

                                            </a>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item mt-2">
                                <h2 class="accordion-header" id="flush-headingFive">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#flush-collapseFive"
                                        aria-expanded="false" aria-controls="flush-collapseFive">
                                        <img class="" src="{{ asset('') }}" alt="..." />&emsp;Reaserch

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
                                            alt="..." />&emsp;Programs<i class="fa-solid fa-list-check"
                                            style="color: #800000
                                            "></i>

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


        <div class="col-9 align-i tems-center text-center"style="margin-left:300px;margin-top:0px">
            <section class=" mt-2">
                <div class="container-fluid" style="background-color:#800000 ;border: 10px solid #800000">
                    <div class="row">
                        <!------------premier colonne FILTRAGE DES PROGRAMMES---------- --------------->
                        <div class="col-7 d-flex justify-content-between">
                            <div class="py-4 px-5">
                                <h4 style="color:#FFFFFF">Filter Programs</h4>


                                <select name="" id=""
                                    style="color:#000000; border:2px solid  #FFFFFF; background-color: #FFFFFF ;font-weight: bold;font-size:20px; height:60px;padding-right:90px; padding-left:10px; margin-bottom:5px;border-radius:4px"
                                    class="pe-5 ps-2">
                                    <option value="">Programs</option>
                                </select>
                                <input type="date"
                                    style="color:#000000; border:2px solid  #FFFFFF; background-color: #FFFFFF ;font-weight: bold;font-size:20px; height:60px;padding-right:90px; padding-left:10px; margin-bottom:5px;border-radius:4px"
                                    class="pe-5 ps-2" class="pe-2 ps-2">
                                <button
                                    class="btn btn-filter"style="color:#000000; border:2px solid  #FFFFFF; background-color: #FFFFFF ;font-weight: bold;font-size:15px; height:60px;padding-right:90px; padding-left:10px; margin-bottom:5px;border-radius:4px"
                                    class="pe-5 ps-2">APPLY FILTERS</button>

                            </div>
                        </div>
                        <!------------2colonne SEARCH----------------------------- --------------->
                        <div class="col-4 d-flex justify-content-between">
                            <div class="py-4 px-5"style="margin-left:120px">
                                <h4 style="color:#FFFFFF">Search Programs</h4>
                                <form id="form">
                                    <input type="search" id="query" name="q"
                                        placeholder="All programs..."
                                        style=" width:250px;height:60px;border-radius:7px;border:4px solid  #FFFFFF">
                                    <br>
                                    <button
                                        class="btn btn-filter"style="color:#000000; border:2px solid  #FFFFFF; background-color: #FFFFFF ;font-weight: bold;font-size:18px; height:60px;padding-right:90px; padding-left:10px; margin-bottom:5px;border-radius:4px;margin-top:5px"
                                        class="pe-5 ps-2">Search</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Navbar -->
                <div class="container-xl">
                    <div class="table-responsive mt-10">
                        <div class="table-wrapper">
                            <div class="table-title">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h1 style="color:#fff">Teacher <b>List</b></h1>
                                    </div>
                                    <div class="col-sm-6">
                                        <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i
                                                class="material-icons">&#xE147;</i> <span>Add New Teacher</span></a>
                                        <a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"><i
                                                class="material-icons">&#xE15C;</i> <span>Delete</span></a>
                                    </div>
                                </div>
                            </div>
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>
                                            <span class="custom-checkbox">
                                                <input type="checkbox" id="selectAll">
                                                <label for="selectAll"></label>
                                            </span>
                                        </th>
                                        <th>First name</th>
                                        <th>Last name</th>
                                        <th>Speciality</th>
                                        <th>Nationality</th>
                                        <th>Email</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <span class="custom-checkbox">
                                                <input type="checkbox" id="checkbox1" name="options[]"
                                                    value="1">
                                                <label for="checkbox1"></label>
                                            </span>
                                        </td>
                                        <td>Thomas Hardy</td>
                                        <td>thomashardy@mail.com</td>
                                        <td>89 Chiaroscuro Rd, Portland, USA</td>
                                        <td>(171) 555-2222</td>
                                        <td>
                                            <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i
                                                    class="material-icons" data-toggle="tooltip"
                                                    title="Edit">&#xE254;</i></a>
                                            <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i
                                                    class="material-icons" data-toggle="tooltip"
                                                    title="Delete">&#xE872;</i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="custom-checkbox">
                                                <input type="checkbox" id="checkbox2" name="options[]"
                                                    value="1">
                                                <label for="checkbox2"></label>
                                            </span>
                                        </td>
                                        <td>Dominique Perrier</td>
                                        <td>dominiqueperrier@mail.com</td>
                                        <td>Obere Str. 57, Berlin, Germany</td>
                                        <td>(313) 555-5735</td>
                                        <td>
                                            <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i
                                                    class="material-icons" data-toggle="tooltip"
                                                    title="Edit">&#xE254;</i></a>
                                            <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i
                                                    class="material-icons" data-toggle="tooltip"
                                                    title="Delete">&#xE872;</i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="custom-checkbox">
                                                <input type="checkbox" id="checkbox3" name="options[]"
                                                    value="1">
                                                <label for="checkbox3"></label>
                                            </span>
                                        </td>
                                        <td>Maria Anders</td>
                                        <td>mariaanders@mail.com</td>
                                        <td>25, rue Lauriston, Paris, France</td>
                                        <td>(503) 555-9931</td>
                                        <td>
                                            <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i
                                                    class="material-icons" data-toggle="tooltip"
                                                    title="Edit">&#xE254;</i></a>
                                            <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i
                                                    class="material-icons" data-toggle="tooltip"
                                                    title="Delete">&#xE872;</i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="custom-checkbox">
                                                <input type="checkbox" id="checkbox4" name="options[]"
                                                    value="1">
                                                <label for="checkbox4"></label>
                                            </span>
                                        </td>
                                        <td>Fran Wilson</td>
                                        <td>franwilson@mail.com</td>
                                        <td>C/ Araquil, 67, Madrid, Spain</td>
                                        <td>(204) 619-5731</td>
                                        <td>
                                            <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i
                                                    class="material-icons" data-toggle="tooltip"
                                                    title="Edit">&#xE254;</i></a>
                                            <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i
                                                    class="material-icons" data-toggle="tooltip"
                                                    title="Delete">&#xE872;</i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="custom-checkbox">
                                                <input type="checkbox" id="checkbox5" name="options[]"
                                                    value="1">
                                                <label for="checkbox5"></label>
                                            </span>
                                        </td>
                                        <td>Martin Blank</td>
                                        <td>martinblank@mail.com</td>
                                        <td>Via Monte Bianco 34, Turin, Italy</td>
                                        <td>(480) 631-2097</td>
                                        <td>
                                            <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i
                                                    class="material-icons" data-toggle="tooltip"
                                                    title="Edit">&#xE254;</i></a>
                                            <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i
                                                    class="material-icons" data-toggle="tooltip"
                                                    title="Delete">&#xE872;</i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="clearfix">
                                <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
                                <ul class="pagination">
                                    <li class="page-item disabled"><a href="#">Previous</a></li>
                                    <li class="page-item"><a href="#" class="page-link">1</a></li>
                                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                                    <li class="page-item active"><a href="#" class="page-link">3</a></li>
                                    <li class="page-item"><a href="#" class="page-link">4</a></li>
                                    <li class="page-item"><a href="#" class="page-link">5</a></li>
                                    <li class="page-item"><a href="#" class="page-link">Next</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Edit Modal HTML -->
                <div id="addEmployeeModal" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form>
                                <div class="modal-header">
                                    <h4 class="modal-title">Add Teacher</h4>
                                    <button type="button" class="close" data-dismiss="modal"
                                        aria-hidden="true">&times;</button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label>First name</label>
                                        <input type="text" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Last name</label>
                                        <input type="email" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Speciality</label>
                                        <textarea class="form-control" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Nationality</label>
                                        <input type="text" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" class="form-control" required>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <input type="button" class="btn btn-default" data-dismiss="modal"
                                        value="Cancel">
                                    <input type="submit" class="btn btn-success" value="Add">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Edit Modal HTML -->
                <div id="editEmployeeModal" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form>
                                <div class="modal-header">
                                    <h4 class="modal-title">Edit Teacher</h4>
                                    <button type="button" class="close" data-dismiss="modal"
                                        aria-hidden="true">&times;</button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label>First name</label>
                                        <input type="text" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Last name</label>
                                        <input type="email" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Speciality</label>
                                        <textarea class="form-control" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Nationality</label>
                                        <input type="text" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" class="form-control" required>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <input type="button" class="btn btn-default" data-dismiss="modal"
                                        value="Cancel">
                                    <input type="submit" class="btn btn-success" value="Add">
                                </div>
                        </div>
                        <div class="modal-footer">
                            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                            <input type="submit" class="btn btn-info" value="Save">
                        </div>
                        </form>
                    </div>
                </div>
        </div>
        <!-- Delete Modal HTML -->
        <div id="deleteEmployeeModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form>
                        <div class="modal-header">
                            <h4 class="modal-title">Delete Teacher</h4>
                            <button type="button" class="close" data-dismiss="modal"
                                aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">
                            <p>Are you sure you want to delete these Records?</p>
                            <p class="text-warning"><small>This action cannot be undone.</small></p>
                        </div>
                        <div class="modal-footer">
                            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                            <input type="submit" class="btn btn-danger" value="Delete">
                        </div>
                    </form>
                </div>
            </div>
        </div>


    </div>
    </div>
</body>

</html>

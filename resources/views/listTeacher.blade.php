<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Teachers List</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/sidebars.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
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

        i {
            font-size: 1.5rem !important;
            color: #800000;
        }

        div p,
        div span {
            margin-bottom: 0 !important;
        }
    </style>
</head>

<body>
    <div class="d-flex " style="height: 100%;">
        <div class="col-md-3 p-3" style="box-shadow:0.2px 0.2px 10px black; z-index: 1000;">
            <a href="/" class="d-flex align-items-center pb-3 link-dark text-decoration-none border-bottom">
                <img src="{{ asset('img/logo.jpg') }}" alt="" style="" class="img-fluid">
            </a>
            @include('menu_admin')
        </div>

        <div class="col-md-9 pt-5 px-5 mb-4" style="background-color:#EFEFEF">
            <div class=" px-2 border rounded shadow bg-white">
                <div class="d-flex justify-content-between align-items-center ">
                    <h3 class="text-dark">Teachers List</h3>
                    @include('dropdown_admin')
                </div>
            </div>
            <div class="d-flex align-items-center mt-4">
                <div class="col-5 d-flex justify-content-start">
                    <div class="mt-3 py-2 d-flex rounded" style="">
                        <select style="color:#800000; border:none; font-weight: bold;border:2px solid #800000;" class="pe-5 me-2 rounded">
                            <option value="">All {{$nbr}}</option>
                        </select>
                        <a href="/teachers/create"><button class="btn btn-filter1 rounded" style="">ADD NEW <i class="bi bi-plus-lg text-light ms-4"></i></button></a>
                    </div>
                </div>
                <div class="col-7 d-flex justify-content-end ">
                    <div class="mt-3 p-2 d-flex justify-content-between rounded bg-white" style="border:2px solid #800000;">
                        <div class="row">
                            <div class="col d-flex justify-content-center">
                                <div class="input-group rounded" style="border:2px solid #800000; font-weight: 500;">
                                    <input class="form-control border-0" style="color:#800000;font-weight: 500;" type="search" value="Name">
                                    <span class="input-group-append">
                                        <button class="btn bg-white p-0 pe-2" type="button">
                                            <i class="bi bi-search"></i>
                                        </button>
                                    </span>
                                </div>
                            </div>
                            <div class="col d-flex justify-content-center">
                                <select style="color:#800000; border:2px solid #800000; font-weight: 500;"
                                    class="w-100 h-100 rounded shadow">
                                    <option value="">Speciality</option>
                                </select>
                            </div>
                            <div class="col d-flex justify-content-center">
                                <button class="btn btn-filter1 h-100 w-100 rounded shadow" style="">APPLY FILTERS</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="px-3 pt-4 border mt-5 rounded shadow bg-white">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Speciality</th>
                            <th scope="col">University</th>
                            <th scope="col">Nationality</th>
                            <th scope="col">Email</th>
                            <th scope="col">Num Tel</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($teachers as $teacher)
                        <tr>
                            <td>{{$teacher->firstname}}</td>
                            <td>{{$teacher->lastname}}</td>
                            <td>{{$teacher->speciality}}</td>
                            <td>{{$teacher->university}}</td>
                            <td>{{$teacher->nationnality}}</td>
                            <td>{{$teacher->email_teacher}}</td>
                            <td>{{$teacher->phone_number}}</td>
                            <td class="d-flex justify-content-end">
                                <a href="/teachers/{{$teacher->id}}/edit" class="mt-1"><i class="bi bi-arrow-clockwise me-2"></i></a>
                                <form action="/destroyTeacher/{{$teacher->id}}" method="POST"> 
                                    @csrf
                                    @method('delete')   
                                    <button type="submit" class="btn"><i class="bi bi-trash-fill me-2"></i></button>
                                </form>
                                
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @include('footer')
</body>

</html>

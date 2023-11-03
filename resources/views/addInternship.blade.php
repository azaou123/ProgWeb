<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Internship</title>
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

        <div class="col-md-9 p-5" style="background-color:#EFEFEF">
        <div class="p-1 d-flex align-items-center justify-content-between " style="background-color:#EFEFEF;margin-top:-30px">
                <h4 class="" style="color:#967117 " > New Internship </h4>
                @include('dropdown_admin')
            </div>
            <br>
            <h3 class="text-dark mb-5">Add Internship</h3>
            <div class="p-5 w-100 mx-auto" style="background-color:white;">
                <h3 class="text-dark mb-5"> Internship</h3>
                <form  method="post" enctype="multipart/form-data" action="/storeInternship">
                    @csrf
                    <div class="row">
                        <div class="col-6 mb-4">
                            <div class="mb-3">
                              <label for="title" class="form-label" style="color:grey">Title</label>
                              <input type="title" name="title" class="form-control" id="title">
                            </div>
                        </div>
                        <div class="col-6 mb-4">
                            <div class="mb-3">
                              <label for="" class="form-label" style="color:grey">Description</label>
                              <input type="description" name="description" class="form-control" id="description">
                            </div>
                        </div>
                        <div class="col-6 mb-4">
                            <div class="mb-3">
                              <label for="" class="form-label" style="color:grey">From</label>
                              <input type="date" name="from" class="form-control" id="">
                            </div>
                        </div>
                        <div class="col-6 mb-4">
                            <div class="mb-3">
                            <label for="" class="form-label" style="color:grey">To</label>
                            <input type="date" name="to" class="form-control" id="">
                             </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                              <label for="" class="form-label" style="color:grey">Company</label>
                              <input type="text" name="company" class="form-control" id="">
                            </div>
                        </div>
                        <!-- <div class="col-6 mb-4">
                            <div class="mb-3">
                              <label for="" class="form-label" style="color:grey">Supervisor</label>
                              <select name="teacher_id" class="form-select">
                                <option value=""></option>
                                @foreach($teachers as $teacher)
                                    <option value="{{$teacher->id}}">{{$teacher->firstname}} {{$teacher->lastname}}</option>
                                @endforeach
                              </select>
                            </div>
                        </div> -->
                        <div class="form-group m-5 ">
                            <label for="teacher_id" class="mb-4">Supervisors :</label></br>
                            @foreach($teachers as $teacher)
                                <input class="mx-5 form-check-input" name="teachers[]" type="checkbox" value="{{$teacher->id}}" id="{{$teacher->firstname}} {{$teacher->lastname}}">
                                <label class="mx-1 form-check-label" for="{{$teacher->firstname}} {{$teacher->lastname}}">{{$teacher->firstname}} {{$teacher->lastname}}</label></br>
                            @endforeach
                        </div> 

                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-filter1 rounded col-4">Submit</button>
                    </div>
                  </form>
            </div>
        </div>
    </div>

</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Research Project</title>
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
    <div class="d-flex " style="height: 100%">
        <div class="col-md-3 p-3" style="box-shadow:0.2px 0.2px 10px black; z-index: 1000;">
            <a href="/" class="d-flex align-items-center pb-3 link-dark text-decoration-none border-bottom">
                <img src="{{ asset('img/logo.jpg') }}" alt="" style="" class="img-fluid">
            </a>
            @include('menu_admin')
        </div>

        <div class="col-md-9 p-5" style="background-color:#EFEFEF">
            <div class="p-1 d-flex align-items-center justify-content-between "
                style="background-color:#EFEFEF;margin-top:-30px">
                <h4 class="" style="color:#967117; "> Research Project</h4>
                @include('dropdown_admin')
            </div>
            <br>
            <h3 class=" mb-5">New Research Project</h3>
            <div class="p-5 w-100 mx-auto" style="background-color:white;">
                <h3 class="text-dark mb-5"> Research Project</h3>
                <form method="post" enctype="multipart/form-data" action="/updateResearchProject/{{$dataRP->id}}">
                    @csrf
                    <div class="row">
                        <div class="col-12 mb-4">
                            <div class="mb-3">
                                <label for="" class="form-label" style="color:grey">Title</label>
                                <input type="text" class="form-control" value="{{$dataRP->title}}" id="lastname" name="title" placeholder="Your title">
                            </div>
                            <div class="col-12 mb-4">
                                <div class="mb-3">
                                    <label for="lastname" class="form-label" style="color:grey">Description</label>
                                    <textarea class="form-control" name="description" rows="5" id="comment" placeholder="Your description...">{{$dataRP->description}}</textarea>
                                </div>
                            </div>

                        </div>
                        <div class="col-12 mb-4">
                            <div class="mb-3">
                                <!-- <label for="fname" class="form-label" style="color:grey"> Image: </label> -->
                                <div class="form-group">
                                    <label for="avatar" class="form-label" style="color:grey">Image:</label>
                                    <div>
                                        @if ($dataRP->image_project)
                                            <img src="{{ asset('images/' . $dataRP->image_project) }}" alt="Project Image" style="max-width: 200px; margin-bottom: 10px;">
                                            <p class="-control" >{{ $dataRP->image_project }}</p>
                                        @endif
                                        <input class="form-control rounded" type="file" name="image_project" id="avatar" value="sssss" accept="image/png, image/jpeg" placeholder="image project">
                                    </div>
                                </div>
                                <!-- <input class="form-control rounded" type="file" name="image_project" id="avatar"
                                    accept="image/png, image/jpeg"  placeholder="Image project...">  -->
                            </div>
                        </div>
                        <div class="form-group m-5">
                            <label for="student_id" class="mb-4">Students engaged in the project:</label><br>
                            @foreach($students as $student)
                                <input class="mx-5 form-check-input" name="students[]" type="checkbox" value="{{ $student->id }}" id="{{ $student->firstname }} {{ $student->lastname }}" {{ in_array($student->id, $dataRP->students->pluck('id')->toArray()) ? 'checked' : '' }}>
                                <label class="mx-1 form-check-label" for="{{ $student->firstname }} {{ $student->lastname }}">{{ $student->firstname }} {{ $student->lastname }}</label><br>
                            @endforeach
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

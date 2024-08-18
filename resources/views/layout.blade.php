<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Student Management System</title>

    <style>
    body {
        overflow-x: hidden;
    }
    .sidebar {
        margin: 0;
        padding: 0;
        width: 200px;
        background-color: #f1f1f1;
        position: fixed;
        height: 90%;
        overflow: auto;
        top: 70px; /* Adjust according to navbar height */
        z-index: 1029;
    }

    .sidebar a {
        display: block;
        color: black;
        padding: 16px;
        text-decoration: none;
    }

    .sidebar a.active {
        background-color: #04AA6D;
        color: white;
    }

    .sidebar a:hover:not(.active) {
        background-color: #555;
        color: white;
    }

    div.content {
        margin-left: 220px; /* Adjust according to sidebar width */
        padding: 16px;
        height: 1000px;
    }

    @media screen and (max-width: 700px) {
        .sidebar {
            width: 100%;
            height: auto;
            position: relative;
        }
        .sidebar a {
            float: left;
        }
        div.content {
            margin-left: 0;
        }
    }

    @media screen and (max-width: 400px) {
        .sidebar a {
            text-align: center;
            float: none;
        }
    }
</style>

</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg navbar-light bg-light" style="position: fixed; top: 0; width: 100%; z-index: 1030;">
                    <a class="navbar-brand" href="#"><h2>Student Management Project</h2></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    </div>
                </nav>
            </div>
        </div>
        <div class="row" style="margin-top: 70px;">
            <div class="sidebar">
                <a class="active" href="home">Home</a>
                <a  href="{{url('/students')}}">Student</a>
                <a  href="{{url('/teachers')}}">Teacher</a>
                <a  href="{{url('/courses')}}">Courses</a>
                <a  href="{{url('/batches')}}">Batches</a>
                <a  href="{{url('/enrollments')}}">Enrollment</a>
                <a  href="{{url('/payments')}}">Payment</a>
            </div>
            <div class="content">
                @yield('content')
            </div>
        </div>
    </div>
</body>
</html>

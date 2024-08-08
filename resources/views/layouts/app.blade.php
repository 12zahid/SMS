<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Management System</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css"rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{ url('/') }}"><h4>Home</h4></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="{{ url('/students') }}">Students</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/teachers') }}">Teachers</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/courses') }}">Courses</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/payments') }}">Payments</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/enrolls') }}">Enrolls</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/courseteachers') }}">Course Teachers</a></li>
                <div class="search-container"> 
                    <form class="form-inline my-2 my-lg-0 ml-auto" action="{{route('search')}}" method="GET">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" name="query" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>  
            </ul>
        </div>
    </nav>
    <div class="container mt-4">
        @yield('content')
    </div>
</body>
</html>
@extends('layouts.app')

@section('content')
<div class="jumbotron text-center">
    <h1 class="display-4">Welcome to the Student Management System</h1>
    <p class="lead">Manage students, courses, teachers, enrollments, and payments efficiently.</p>
    <a class="btn btn-primary btn-lg" href="{{ url('/students') }}" role="button">Get Started</a>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <img class="card-img-top" src="https://img.freepik.com/premium-photo/young-asian-indian-college-students-reading-books-studying-laptop-preparing-exam-working-group-project-while-sitting-grass-staircase-steps-college-campus_466689-7729.jpg?ga=GA1.1.113903802.1700416889&semt=sph" alt="Students">
                <div class="card-body">
                    <h5 class="card-title">Students</h5>
                    <p class="card-text">Manage student information and track their progress.</p>
                    <a href="{{ url('/students') }}" class="btn btn-primary">View Students</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img class="card-img-top" src="https://img.freepik.com/free-photo/book-library-with-open-textbook_1150-5920.jpg?t=st=1722532297~exp=1722535897~hmac=4e06fabd07ef7fcedf537d001dce7437d3130e0b327b9e704fc40ee937058210&w=826" alt="Courses">
                <div class="card-body">
                    <h5 class="card-title">Courses</h5>
                    <p class="card-text">Manage course information and assignments.</p>
                    <a href="{{ url('/courses') }}" class="btn btn-primary">View Courses</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img class="card-img-top" src="https://img.freepik.com/premium-photo/teacher-working-with-small-group-kids_259150-5496.jpg?ga=GA1.1.113903802.1700416889&semt=sph" alt="Teachers">
                <div class="card-body">
                    <h5 class="card-title">Teachers</h5>
                    <p class="card-text">Manage teacher information and their course assignments.</p>
                    <a href="{{ url('/teachers') }}" class="btn btn-primary">View Teachers</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
{{-- @extends('layouts.app')

@section('content')
    <div class="jumbotron">
        <h1 class="display-4">Welcome to the Student Management System</h1>
        <p class="lead">Manage students, courses, teachers, enrollments, and payments efficiently.</p>
        <hr class="my-4">
        <a class="btn btn-primary btn-lg" href="{{ url('/students') }}" role="button">Get Started</a>
    </div>
@endsection --}}

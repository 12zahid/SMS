
@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">Course Details</div>
        <div class="card-body">
            <hr>
            <h5 class="card-title">Name: {{ $courses->name }}</h5>
            <p class="card-text">Title: {{ $courses->title }}</p>
            <p class="card-text">Syllabus: {{ $courses->syllabus }}</p>
            <p class="card-text">Duration: {{ $courses->duration }}</p>
            <p class="card-text">Course Code: {{ $courses->course_code }}</p>
            <a href="{{ url('/courses') }}" class="btn btn-secondary">Back</a>
        </div>
    </div>
</div>
@endsection


@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-header">Add New Course</div>
    <div class="card-body">
        <a href="{{url('courses')}}" title="back"><button class="btn btn-success btn-sm"><i class="ri-arrow-left-fill"></i></button></a>
        <hr>
        <form action="{{ url('/courses') }}" method="POST">
            @csrf
            <div class="form-group">
               Name : <input type="text" name="name" id="name" class="form-control" required>
            </div>
            <div class="form-group">
               Title : <input type="text" name="title" id="title" class="form-control" required>
            </div>
            <div class="form-group">
             Syllabus : <textarea name="syllabus" id="syllabus" class="form-control" required></textarea>
            </div>
            <div class="form-group">
               Duration : <input type="number" name="duration" id="duration" class="form-control" required>
            </div>
            <div class="form-group">
               Course Code : <input type="text" name="course_code" id="course_code" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-success">Save</button>
        </form>
    </div>
</div>
@stop

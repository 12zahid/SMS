
@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">Teacher Assignment Details</div>
    <div class="card-body">
        
        <a href="{{ url('/courseteachers') }}" class="btn btn-primary"><i class="fas fa-arrow-left"></i></a>

        <div class="form-group">
           Course : <input type="text" id="course_name" class="form-control" value="{{ $courseTeacher->course->name }}" disabled>
        </div>

        <div class="form-group">
           Teacher : <input type="text" id="teacher_name" class="form-control" value="{{ $courseTeacher->teacher->first_name }} {{ $courseTeacher->teacher->last_name }}" disabled>
        </div>

        <a href="{{ url('courseteachers') }}" class="btn btn-primary">Back</a>
    </div>
</div>
@endsection

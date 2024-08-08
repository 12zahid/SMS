

@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-header">Edit Course</div>
    <div class="card-body">
        
        <a href="{{ url('courses') }}" class="btn btn-primary btn-sm" title="Back">
            <i class="ri-arrow-left-fill"></i>
        </a>
        <form action="{{ url('/courses/' . $courses->id) }}" method="POST">
            @csrf
            @method('PATCH')
            <div class="form-group">
               Name : <input type="text" name="name" id="name" class="form-control" value="{{ $courses->name }}" required>
            </div>
            <div class="form-group">
               Title : <input type="text" name="title" id="title" class="form-control" value="{{ $courses->title }}" required>
            </div>
            <div class="form-group">
               Syllabus : <textarea name="syllabus" id="syllabus" class="form-control" required>{{ $courses->syllabus }}</textarea>
            </div>
            <div class="form-group">
               Duration : <input type="number" name="duration" id="duration" class="form-control" value="{{ $courses->duration }}" required>
            </div>
            <div class="form-group">
               Course Code : <input type="text" name="course_code" id="course_code" class="form-control" value="{{ $courses->course_code }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection

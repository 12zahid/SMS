
@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">Assign Teacher to Course</div>
    <div class="card-body">
        <a href="{{ url('/enrolls') }}" class="btn btn-primary"><i class="fas fa-arrow-left"></i></a>

        <form action="{{ url('courseteachers') }}" method="POST">
            @csrf
            <div class="form-group">
                    Course : <select name="course_id" id="course_id" class="form-control" required>
                    <option value="">Select Course</option>
                    @foreach($courses as $course)
                        <option value="{{ $course->id }}">{{ $course->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
               Teacher: <select name="teacher_id" id="teacher_id" class="form-control" required>
                    <option value="">Select Teacher</option>
                    @foreach($teachers as $teacher)
                        <option value="{{ $teacher->id }}">{{ $teacher->first_name }} {{ $teacher->last_name }} ( {{$teacher->qualification}} )</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-success">Assign</button>
        </form>
    </div>
</div>
@stop

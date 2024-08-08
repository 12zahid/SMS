@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">Edit Teacher Assignment</div>
    <div class="card-body">
        <a href="{{ url('/enrolls') }}" class="btn btn-primary"><i class="fas fa-arrow-left"></i></a>

        <form action="{{ url('courseteachers/' . $courseTeacher->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="course_id">Course</label>
                Course : <select name="course_id" id="course_id" class="form-control" required>
                    @foreach($courses as $course)
                        <option value="{{ $course->id }}" {{ $course->id == $courseTeacher->course_id ? 'selected' : '' }}>
                            {{ $course->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
              Teacher :   <select name="teacher_id" id="teacher_id" class="form-control" required>
                    @foreach($teachers as $teacher)
                        <option value="{{ $teacher->id }}" {{ $teacher->id == $courseTeacher->teacher_id ? 'selected' : '' }}>
                            {{ $teacher->first_name }} {{ $teacher->last_name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-success">Update</button>
        </form>
    </div>
</div>
@endsection

@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">Enroll Student</div>
        <div class="card-body">
            <a href="{{ url('/enrolls') }}" class="btn btn-primary"><i class="fas fa-arrow-left"></i></a>
            <form action="{{ url('enrolls') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="student_id">Student:</label>
                    <select name="student_id" id="student_id" class="form-control">
                        @foreach ($students as $student)
                            <option value="{{ $student->id }}">{{ $student->first_name }} {{ $student->last_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="course_id">Course:</label>
                    <select name="course_id" id="course_id" class="form-control">
                        @foreach ($courses as $course)
                            <option value="{{ $course->id }}">{{ $course->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="enrollment_date">Enrollment Date:</label>
                    <input type="date" name="enrollment_date" id="enrollment_date" class="form-control">
                </div>
                <div class="form-group">
                    <label for="status">Status:</label>
                    <select name="status" id="status" class="form-control">
                        <option value="active">Active</option>
                        <option value="inactive">Inactive</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Enroll</button>
            </form>
        </div>
    </div>
</div>
@endsection

@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">Edit Enrollment</div>
        <div class="card-body">
            <a href="{{ url('/enrolls') }}" class="btn btn-primary"><i class="fas fa-arrow-left"></i></a>
            <hr>
            <form action="{{ url('enrolls/' . $enrollments->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="student_id">Student:</label>
                    <select name="student_id" id="student_id" class="form-control">
                        @foreach ($students as $item)
                            <option value="{{ $item->id }}" {{ $enrollments->student_id == $item->id ? 'selected' : '' }}>
                                {{ $item->first_name }} {{ $item->last_name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="course_id">Course:</label>
                    <select name="course_id" id="course_id" class="form-control">
                        @foreach ($courses as $course)
                            <option value="{{ $course->id }}" {{ $enrollments->course_id == $course->id ? 'selected' : '' }}>
                                {{ $course->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="enrollment_date">Enrollment Date:</label>
                    <input type="date" name="enrollment_date" id="enrollment_date" class="form-control" value="{{ $enrollments->enrollment_date }}">
                </div>
                <div class="form-group">
                    <label for="status">Status:</label>
                    <select name="status" id="status" class="form-control">
                        <option value="active" {{ $enrollments->status == 'active' ? 'selected' : '' }}>Active</option>
                        <option value="inactive" {{ $enrollments->status == 'inactive' ? 'selected' : '' }}>Inactive</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>
@endsection
@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">Enrollment Details</div>
    <div class="card-body">
        <p><strong>Student:</strong> {{ $enrollment->student->first_name }} {{ $enrollment->student->last_name }}</p>
        <p><strong>Course:</strong> {{ $enrollment->course->name }}</p>
        <p><strong>Enrollment Date:</strong> {{ $enrollment->enrollment_date }}</p>
        <p><strong>Status:</strong> {{ $enrollment->status }}</p>
        <a href="{{ url('enrolls/' . $enrollment->id . '/edit') }}" class="btn btn-primary">Edit</a>
        <a href="{{ url('enrolls') }}" class="btn btn-secondary">Back</a>
    </div>
</div>
@endsection

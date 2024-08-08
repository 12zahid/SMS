@extends('layouts.app')
@section('content')
    <div class="contianer">
     @if ($students->isNotEmpty())
        <h1>Student Results</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Email</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Course</th>
                    <th>Teacher</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                @php
                    $hasCourse = $student->courses->isNotEmpty();
                @endphp
                <tr>
                    <td>{{ $student->email }}</td>
                    <td>{{ $student->first_name }}</td>
                    <td>{{ $student->last_name }}</td>
                    @if ($hasCourse)
                        @foreach ($student->courses as $course)
                            <td>{{ $course->name }}</td>
                            <td>
                                @foreach ($course->teachers as $teacher)
                                    {{ $teacher->first_name }} {{ $teacher->last_name }}
                                @endforeach
                            </td>
                        @endforeach
                    @else
                        <td colspan="2">No courses selected</td>
                    @endif
                </tr>
            @endforeach
            </tbody>
        </table>
    @else
        <p>No student records found.</p>
    @endif


    @if ($teachers->isNotEmpty())
    <h1>Teacher Results</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Email</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Course</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($teachers as $teacher)
            @php
                $hasCourse = $teacher->courses->isNotEmpty();
            @endphp
            <tr>
                <td>{{ $teacher->email }}</td>
                <td>{{ $teacher->first_name }}</td>
                <td>{{ $teacher->last_name }}</td>
                @if ($hasCourse)
                    @foreach ($teacher->courses as $course)
                        <td>{{ $course->name }}</td>
                    @endforeach
                @else
                    <td>No courses assigned</td>
                @endif
            </tr>
        @endforeach
        </tbody>
    </table>
@else
    <p>No teacher records found.</p>
@endif
<a href="{{ url('/') }}" class="btn btn-primary" title="goto home page"><i class="fas fa-arrow-left"></i>   </a>
    </div>
@endsection
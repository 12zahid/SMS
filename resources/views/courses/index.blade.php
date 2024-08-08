


@extends('layouts.app')

@section('content')
<style>
    .action-buttons {
        display: flex;
        justify-content: space-around;
    }
    .action-buttons button {
        margin-right: 5px;
    }
</style>
<div class="card">
    <div class="card-header">Courses</div>
    <div class="card-body">
        <a href="{{ url('/') }}" class="btn btn-primary"><i class="fas fa-arrow-left"></i></a>
        <a href="{{ url('/courses/create') }}" class="btn btn-success btn-md" title="Add New Course">
            <i class="ri-user-add-fill"></i>
        </a>
        <br/>
        <br/>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Title</th>
                        <th>Syllabus</th>
                        <th>Duration</th>
                        <th>Course Code</th>
                        <th>Teacher</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($courses as $course)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $course->name }}</td>
                            <td>{{ $course->title }}</td>
                            <td>{{ $course->syllabus }}</td>
                            <td>{{ $course->duration }}</td>
                            <td>{{ $course->course_code }}</td>
                            <td>
                                @if($course->teachers->isNotEmpty())
                                    {{ $course->teachers->first()->first_name }} {{ $course->teachers->first()->last_name }}
                                @else
                                    No Teacher Assigned
                                @endif
                            </td>
                            <td class="action-buttons">
                                <a href="{{ url('/courses/' . $course->id) }}" title="View Course">
                                    <button class="btn btn-success btn-sm"><i class="ri-eye-fill"></i></button>
                                </a>
                                <a href="{{ url('/courses/' . $course->id . '/edit') }}" title="Edit Course">
                                    <button class="btn btn-info btn-sm"><i class="ri-edit-line"></i></button>
                                </a>
                                <form method="POST" action="{{ url('/courses' . '/' . $course->id) }}" accept-charset="UTF-8" style="display:inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete Course" onclick="return confirm('Confirm delete?')">
                                        <i class="ri-delete-bin-2-fill"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{$courses->links()}}
        </div>
    </div>
</div>
@endsection


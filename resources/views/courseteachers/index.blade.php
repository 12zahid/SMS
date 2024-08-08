@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-header">Teacher Assignments</div>
    <div class="card-body">
        <a href="{{ url('/') }}" class="btn btn-primary"><i class="fas fa-arrow-left"></i></a>
        <a href="{{ url('courseteachers/create') }}" class="btn btn-success">Assign New Teacher</a>
        <br><br>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Course</th>
                    <th>Teacher</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($courseTeachers as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->course->name }}</td>
                    <td>{{ $item->teacher->first_name }} {{ $item->teacher->last_name }}</td>
                    <td>
                        <a href="{{ url('courseteachers/' . $item->id) }}" class="btn btn-info btn-sm"><i class="ri-eye-fill"></i></a>
                        <a href="{{ url('courseteachers/' . $item->id . '/edit') }}" class="btn btn-warning btn-sm"><i class="ri-edit-line"></i></a>
                        <form action="{{ url('courseteachers/' . $item->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Are you sure you want to delete this assignment?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"><i class="ri-delete-bin-2-fill"></i></button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection


@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">Enrollments</div>
        <div class="card-body">
            <a href="{{ url('/') }}" class="btn btn-primary"><i class="fas fa-arrow-left"></i></a>
            <a href="{{ url('/enrolls/create') }}" class="btn btn-success btn-sm" title="Add New Enrollment">
                Add New
            </a>
            <br/>
            <br/>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Student</th>
                            <th>Course</th>
                            <th>Enrollment Date</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($enrollments as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->student->first_name }} {{ $item->student->last_name }}</td>
                                <td>{{ $item->course->name }}</td>
                                <td>{{ $item->enrollment_date }}</td>
                                <td>{{ $item->status }}</td>
                                <td>
                                    <a href="{{ url('/enrolls/' . $item->id) }}" title="View Enrollment"><button class="btn btn-success btn-sm"><i class="ri-eye-fill"></i></button></a>
                                    <a href="{{ url('/enrolls/' . $item->id . '/edit') }}" title="Edit Enrollment"><button class="btn btn-info btn-sm"><i class="ri-edit-line"></i></button></a>
                                    <form method="POST" action="{{ url('/enrolls' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" title="Delete Enrollment" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="ri-delete-bin-2-fill"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

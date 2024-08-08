@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">Teachers</div>
        <div class="card-body">
            <a href="{{ url('/') }}" class="btn btn-Secondary"><i class="fas fa-arrow-left"></i>   </a>
            <hr>
            <a href="{{ url('/teachers/create') }}" class="btn btn-success btn-sm" title="Add New Teacher">
                Add New
            </a>
            <br />
            <br />
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($teachers as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->first_name }}</td>
                                <td>{{ $item->last_name }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->phone }}</td>
                                <td>{{ $item->address }}</td>
                                <td>
                                    <a href="{{ url('/teachers/' . $item->id) }}" title="View Teacher"><button class="btn btn-success btn-sm"><i class="ri-eye-fill"></i></button></a>
                                    <a href="{{ url('/teachers/' . $item->id . '/edit') }}" title="Edit Teacher"><button class="btn btn-info btn-sm"><i class="ri-edit-line"></i></button></a>
                                    <form method="POST" action="{{ url('/teachers' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline" onsubmit="return confirmDelete();">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" title="Delete Teacher" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="ri-delete-bin-2-fill"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{$teachers->links()}}
            </div>
        </div>
    </div>
</div>
{{-- <script>
    function confirmDelete() {
        return confirm('Are you sure you want to delete?');
    }
</script> --}}
@endsection


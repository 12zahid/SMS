{{-- @extends('layout')
@section('content')
    

        
<div class="crud">
    <div class="crud-header">
        <h2>Student Application</h2>
    </div>
    <div class="crud-body">
        <a href="{{url('/students/create')}}" class="btn btn-success btn-sm" title="Add New Student" >
            <i class="fa fa-plus" aria-hidden="true">Add New</i>
        </a>
        <br/>
        <br/>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Mobile</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($students as $item)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$item->Name}}</td>
                        <td>{{$item->Address}}</td>
                        <td>{{$item->Mobile}}</td>
                        <td>
                            <a href="{{ url('/students/'.$item->id) }}">
                                <button class="btn btn-info btn-sm">
                                    <i class="fa fa-eye" aria-hidden="true"></i> View
                                </button>
                            </a>
                            <a href="{{ url('/students/' . $item->id . '/edit') }}">
                                <button class="btn btn-primary btn-sm">
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                                </button>
                            </a>
                            <form action="{{ url('students/' . $item->id) }}" method="POST" style="display:inline;" onsubmit="return confirmDelete();">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
</div>
<script>
    function confirmDelete() {
        return confirm('Are you sure you want to delete this student?');
    }
</script>
@endsection --}}
<!-- resources/views/students/index.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css"rel="stylesheet"/> --}}
    <title>Document</title>
</head>
<body>
    @extends('layouts.app')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">Students</div>
        <div class="card-body">
            <a href="{{ url('/') }}" class="btn btn-secondary" title="Goto Home page">
                <i class="fas fa-arrow-left"></i> 
            </a>
            <hr>
            <a href="{{ url('/students/create') }}" class="btn btn-primary btn-sm" title="Add New Student">
                Add New
            </a>
            <br/>
            <br/>
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
                            <th>Date of Birth</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($students as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->first_name }}</td>
                                <td>{{ $item->last_name }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->phone }}</td>
                                <td>{{ $item->address }}</td>
                                <td>{{ $item->date_of_birth }}</td>
                                <td>
                                    <a href="{{ url('/students/' . $item->id) }}" title="View Student"><button class="btn btn-success btn-sm"><i class="ri-eye-fill"></i></button></a>
                                    <a href="{{ url('/students/' . $item->id . '/edit') }}" title="Edit Student"><button class="btn btn-info btn-sm"><i class="ri-edit-line"></i></button></a>
                                    <form method="POST" action="{{ url('/students' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" title="Delete Student" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="ri-delete-bin-2-fill"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{$students->links()}}
            </div>
        </div>
    </div>
</div>
@endsection
</body>
</html>


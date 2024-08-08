{{-- @extends('students.layout')
@section('content')
<div class="card">
<div class="card-header">student Details</div>
<div class="card-body">
    <h5 class="card-title" >Name:{{ $students->Name}}</h5>
    <p class="card-text">Address{{ $students->Address}}</p>
    <p class="card-text">Mobile{{ $students->Mobile}}</p>
    </div>    
</div>    
@endsection --}}
@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">Student Details</div>
        <div class="card-body">
            <h5 class="card-title">First Name: {{ $students->first_name }}</h5>
            <p class="card-text">Last Name: {{ $students->last_name }}</p>
            <p class="card-text">Email: {{ $students->email }}</p>
            <p class="card-text">Phone: {{ $students->phone }}</p>
            <p class="card-text">Address: {{ $students->address }}</p>
            <p class="card-text">Date of Birth: {{ $students->date_of_birth }}</p>
            <a href="{{ url('/students') }}" class="btn btn-primary">Back</a>
        </div>
    </div>
</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Teacher Details</h3>
    <div class="card">
        <div class="card-header">
            {{ $teachers->first_name }} {{ $teachers->last_name }}
        </div>
        <div class="card-body">
            <p><strong>Email:</strong> {{ $teachers->email }}</p>
            <p><strong>Phone:</strong> {{ $teachers->phone }}</p>
            <p><strong>Address:</strong> {{ $teachers->address }}</p>
            <p><strong>Qualification:</strong> {{ $teachers->qualification }}</p>
            <a href="{{ route('teachers.index') }}" class="btn btn-secondary">Back</a>
        </div>
    </div>
</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container">
   <div class="card">
    <div class="card-header"><h1>Create Teacher</h1></div>
    <div class="card-body">
        <a href="{{ url('/teachers') }}" class="btn btn-primary"><i class="fas fa-arrow-left"></i>   </a>
          <hr>
    <form action="{{ route('teachers.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="first_name">First Name:</label>
            <input type="text" class="form-control" id="first_name" name="first_name" required>
        </div>
        <div class="form-group">
            <label for="last_name">Last Name:</label>
            <input type="text" class="form-control" id="last_name" name="last_name" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="phone">Phone:</label>
            <input type="text" class="form-control" id="phone" name="phone">
        </div>
        <div class="form-group">
            <label for="address">Address:</label>
            <input type="text" class="form-control" id="address" name="address">
        </div>
        <div class="form-group">
            <label for="qualification">Qualification:</label>
            <input type="text" class="form-control" id="qualification" name="qualification" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
    </div>       
</div> 
@stop

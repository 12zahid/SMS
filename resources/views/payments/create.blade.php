
@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-header">Add New Payment</div>
    <div class="card-body">
        <a href="{{ url('/payments') }}" class="btn btn-secondary"><i class="fas fa-arrow-left"></i>   </a>
         <hr>
        <form action="{{ url('payments') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="enrollment_id">Enrollment</label>
                <select name="enrollment_id" id="enrollment_id" class="form-control">
                    @foreach($enrollments as $enrollment)
                        <option value="{{ $enrollment->id }}">{{ $enrollment->student->first_name }} {{ $enrollment->student->last_name }} - {{ $enrollment->course->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="amount">Amount</label>
                <input type="number" name="amount" id="amount" class="form-control">
            </div>
            <div class="form-group">
                <label for="payment_date">Payment Date</label>
                <input type="date" name="payment_date" id="payment_date" class="form-control">
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <input type="text" name="status" id="status" class="form-control" value="completed">
            </div>
            <input type="submit" value="Save" class="btn btn-primary btn-sm">
        </form>
    </div>
</div>
@stop

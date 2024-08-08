@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-header">Edit Payment</div>
    <div class="card-body">
        <a href="{{ url('/payments') }}" class="btn btn-secondary"><i class="fas fa-arrow-left"></i>   </a>
         <hr>
        <form action="{{ url('payments/' . $payments->id) }}" method="POST">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="enrollment_id">Enrollment</label>
                <select name="enrollment_id" id="enrollment_id" class="form-control">
                    @foreach($enrollments as $item)
                        <option value="{{ $item->id }}" {{ $payments->enrollment_id == $item->id ? 'selected' : '' }}>
                            {{ $item->student->first_name }} {{ $item->student->last_name }} - {{ $item->course->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="amount">Amount</label>
                <input type="number" name="amount" id="amount" class="form-control" value="{{ $payments->amount }}">
            </div>
            <div class="form-group">
                <label for="payment_date">Payment Date</label>
                <input type="date" name="payment_date" id="payment_date" class="form-control" value="{{ $payments->payment_date }}">
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <input type="text" name="status" id="status" class="form-control" value="{{ $payments->status }}">
            </div>
            <input type="submit" value="Update" class="btn btn-primary btn-sm">
        </form>
    </div>
</div>
@endsection

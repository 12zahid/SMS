
@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-header">Payment Details</div>
    <div class="card-body">
        
        <div class="table-responsive">
            <table class="table">
                <tbody>
                    <tr>
                        <th>ID</th>
                        <td>{{ $payments->id }}</td>
                    </tr>
                    <tr>
                        <th>Enrollment</th>
                        <td>{{ $payments->enrollment->student->first_name }} {{ $payments->enrollment->student->last_name }} - {{ $payments->enrollment->course->name }}</td>
                    </tr>
                    <tr>
                        <th>Amount</th>
                        <td>{{ $payments->amount }}</td>
                    </tr>
                    <tr>
                        <th>Payment Date</th>
                        <td>{{ $payments->payment_date }}</td>
                    </tr>
                    <tr>
                        <th>Status</th>
                        <td>{{ $payments->status }}</td>
                    </tr>
                </tbody>
            </table>
           
        </div>
        <a href="{{ url('/payments') }}" class="btn btn-secondary btn-sm" title="Back">
            Back
        </a>
        <br />
        <br />
    </div>
</div>
@endsection

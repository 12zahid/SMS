
@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">Payments</div>
        <div class="card-body">
            <a href="{{ url('/') }}" class="btn btn-primary"><i class="fas fa-arrow-left"></i>   </a>

            <a href="{{ url('/payments/create') }}" class="btn btn-success btn-sm" title="Add New Payment">
                Add New
            </a>
            <br/>
            <br/>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Enrollment</th>
                            <th>Amount</th>
                            <th>Payment Date</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($payments as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->enrollment->student->first_name }} {{ $item->enrollment->student->last_name }} - {{ $item->enrollment->course->name }}</td>
                                <td>{{ $item->amount }}</td>
                                <td>{{ $item->payment_date }}</td>
                                <td>{{ $item->status }}</td>
                                <td>
                                    <a href="{{ url('/payments/' . $item->id) }}" title="View Payment"><button class="btn btn-success btn-sm"><i class="ri-eye-fill"></i></button></a>
                                    <a href="{{ url('/payments/' . $item->id . '/edit') }}" title="Edit Payment"><button class="btn btn-info btn-sm"><i class="ri-edit-line"></i></button></a>
                                    <form method="POST" action="{{ url('/payments' . '/' . $item->id) }}" style="display:inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" title="Delete Payment" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="ri-delete-bin-2-fill"></i></button>
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

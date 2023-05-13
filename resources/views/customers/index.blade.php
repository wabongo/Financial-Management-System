@extends('layouts.app')

@section('page-title', 'Customers')

@section('content')
<div class="container">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-hover table table-striped table-sm">
                    <thead>
                        <tr>
                            <th scope="col">Customer ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Contact Information</th>
                            <th scope="col">Balance</th>
                            <th scope="col">Payment Terms</th>
                            <th scope="col">Credit Limit</th>
                            <th scope="col">Payment History</th>
                            <th scope="col">Notes/Comments</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($customers as $c)
                        <tr>
                            <td>{{$c->customer_id}}</td>
                            <td>{{$c->name}}</td>
                            <td>{{$c->contact}}</td>
                            <td>{{number_format($c->balance, 2)}}</td>
                            <td>Net 30</td>
                            <td>Ksh1,000</td>
                            <td>...</td>
                            <td>...</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a href="{{ route('customers.create') }}" class="btn btn-primary">New Account</a>
    </div>
</div>
</div>

<!-- Bootstrap core CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap core JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
@endsection
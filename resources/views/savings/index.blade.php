@extends('layouts.app')

@section('page-title', 'Savings Accounts')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <table class="table table-hover table table-striped table-sm">
                <thead>
                    <tr>
                        <th scope="col">Account ID</th>
                        <th scope="col">Account Holder</th>
                        <th scope="col">Account Type</th>
                        <th scope="col">Account Number</th>
                        <th scope="col">Bank Name</th>
                        <th scope="col">Balance</th>
                        <th scope="col">Interest Rate</th>
                        <th scope="col">Start Date</th>
                        <th scope="col">End Date</th>
                        <th scope="col">Status</th>
                        <th scope="col">Last Updated</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($savings as $s)
                    <tr>
                        <td>{{$s->account_Id}} </td>
                        <td>{{$s->account_holder}} </td>
                        <td>{{$s->account_type}} </td>
                        <td>{{$s->account_number}} </td>
                        <td>{{$s->bank_name}} </td>
                        <td>{{$s->balance}} </td>
                        <td>{{$s->interest_rate}} </td>
                        <td>{{$s->start_date}} </td>
                        <td>{{$s->end_date}} </td>
                        <td>{{$s->status}} </td>
                        <td>{{$s->last_updated}} </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href="{{ route('savings.create') }}" class="btn btn-primary">New Account</a>
            </div>
        </div>
    </div>
</div>
<!-- Bootstrap core CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap core JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>

@endsection
@extends('layouts.app')

@section('page-title','Loan Accounts')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-hover table table-striped table-sm">
                    <thead>
                        <tr>
                            <th>LoanID</th>
                            <th>Borrower</th>
                            <th>LoanAmount</th>
                            <th>Interest Rate</th>
                            <th>Loan Type</th>
                            <th>Loan Term</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Payment Frequency</th>
                            <th>Payment Amount</th>
                            <th>Outstanding Balance</th>
                            <th>Status</th>
                            <th>Last Updated</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($loans as $l)
                        <tr>
                            <td>{{$l->loan_Id}}</td>
                            <td>{{$l->borrower}}</td>
                            <td>{{$l->loan_amount}}</td>
                            <td>{{$l->interest_rate}}</td>
                            <td>{{$l->loan_type}}</td>
                            <td>{{$l->loan_term}}</td>
                            <td>{{$l->start_date}}</td>
                            <td>{{$l->end_date}}</td>
                            <td>{{$l->payment_frequency}}</td>
                            <td>{{$l->payment_amount}}</td>
                            <td>{{$l->outstanding_balance}}</td>
                            <td>{{$l->status}}</td>
                            <td>{{$l->last_updated}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="d-grid gap-2d-md-flex justify-content-md-end">
                    <a href="{{route('loans.create')}}" class="btn btn-primary">New Account</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap core JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>

    </script>
    @endsection
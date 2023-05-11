@extends('layouts.app')

@section('page-title', 'Loan Accounts')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Loan ID</th>
                            <th>Borrower</th>
                            <th>Loan Amount</th>
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
                        <tr>
                            <td>1</td>
                            <td>bwana mkuu</td>
                            <td>Ksh10,000</td>
                            <td>5%</td>
                            <td>Personal Loan</td>
                            <td>24 months</td>
                            <td>2023-01-15</td>
                            <td>2025-01-15</td>
                            <td>Monthly</td>
                            <td>Ksh450</td>
                            <td>Ksh7,500</td>
                            <td>Active</td>
                            <td>2023-05-10</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Maverick Aoko</td>
                            <td>Ksh50,000</td>
                            <td>4.5%</td>
                            <td>Mortgage</td>
                            <td>360 months</td>
                            <td>2022-09-01</td>
                            <td>2052-09-01</td>
                            <td>Monthly</td>
                            <td>Ksh300</td>
                            <td>Ksh45,000</td>
                            <td>Active</td>
                            <td>2023-05-10</td>
                        </tr>
                    </tbody>
                </table>
                <button class="btn" type="button">
                    <a href="{{ route('loans.create') }}">Create Loan Account</a>
                </button>
            </div>
        </div>
    </div>
</div>
<!-- Bootstrap core CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap core JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
@endsection
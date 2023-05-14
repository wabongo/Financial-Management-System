@extends('layouts.app')

@section('page-title', 'Loan Accounts')

@section('content')
<div class="container">
    <table id="example" class="stripe hover" style="width:100%; padding-top: 1em; padding-bottom: 1em;">
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
            @foreach($loans as $l)
            <tr>
                <td>{{ $l->loan_Id }}</td>
                <td>{{ $l->borrower }}</td>
                <td>{{ $l->loan_amount }}</td>
                <td>{{ $l->interest_rate }}</td>
                <td>{{ $l->loan_type }}</td>
                <td>{{ $l->loan_term }}</td>
                <td>{{ $l->start_date }}</td>
                <td>{{ $l->end_date }}</td>
                <td>{{ $l->payment_frequency }}</td>
                <td>{{ $l->payment_amount }}</td>
                <td>{{ $l->outstanding_balance }}</td>
                <td>{{ $l->status }}</td>
                <td>{{ $l->last_updated }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-4">
        <a href="{{ route('loans.create') }}" class="btn btn-primary">New Account</a>
    </div>
</div>

<link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css" rel="stylesheet">

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
<script>
    $(document).ready(function() {
        $('#example').DataTable({
            responsive: true
        });
    });
</script>

<!-- Bootstrap core CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap core JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
@endsection
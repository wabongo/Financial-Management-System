@extends('layouts.app')

@section('page-title', 'Savings Accounts')

@section('content')
<div class="container">
    <table id="example" class="stripe hover" style="width:100%; padding-top: 1em; padding-bottom: 1em;">
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
                <td>{{ $s->account_Id }}</td>
                <td>{{ $s->account_holder }}</td>
                <td>{{ $s->account_type }}</td>
                <td>{{ $s->account_number }}</td>
                <td>{{ $s->bank_name }}</td>
                <td>{{ $s->balance }}</td>
                <td>{{ $s->interest_rate }}</td>
                <td>{{ $s->start_date }}</td>
                <td>{{ $s->end_date }}</td>
                <td>{{ $s->status }}</td>
                <td>{{ $s->last_updated }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-4">
        <a href="{{ route('savings.create') }}" class="btn btn-primary">New Account</a>
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
@extends('layouts.app')

@section('page-title', 'Customers')

@section('content')
<div class="container">
    <table id="example" class="stripe hover" style="width:100%; padding-top: 1em; padding-bottom: 1em;">
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
                <td>{{ $c->id }}</td>
                <td>{{ $c->name }}</td>
                <td>{{ $c->contact }}</td>
                <td>{{ number_format($c->balance, 2) }}</td>
                <td>{{ $c->payment_terms }}</td>
                <td>{{ $c->credit_limit }}</td>
                <td>{{ $c->payment_history }}</td>
                <td>{{ $c->notes }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-4">
        <a href="{{ route('customers.create') }}" class="btn btn-primary">New Customer</a>
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
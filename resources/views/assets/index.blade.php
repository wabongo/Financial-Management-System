@extends('layouts.app')

@section('page-title', 'Assets')

@section('content')
<div class="container">
    <table id="example" class="stripe hover" style="width:100%; padding-top: 1em; padding-bottom: 1em;">
        <thead>
            <tr>
                <th scope="col">Asset ID</th>
                <th scope="col">Asset Name</th>
                <th scope="col">Asset Type</th>
                <th scope="col">Acquisition Date</th>
                <th scope="col">Purchase Price</th>
                <th scope="col">Current Value</th>
                <th scope="col">Depreciation Method</th>
                <th scope="col">Depreciation Rate</th>
                <th scope="col">Useful Life</th>
                <th scope="col">Depreciation Start Date</th>
                <th scope="col">Disposal Date</th>
                <th scope="col">Disposal Amount</th>
                <th scope="col">Status</th>
                <th scope="col">Location</th>
                <th scope="col">Owner</th>
                <th scope="col">Notes</th>
            </tr>
        </thead>
        <tbody>
            @foreach($assets as $a)
            <tr>
                <td>{{ $a->id }}</td>
                <td>{{ $a->name }}</td>
                <td>{{ $a->type }}</td>
                <td>{{ $a->purchase_date }}</td>
                <td>{{ number_format($a->purchase_price, 2) }}</td>
                <td>{{ number_format($a->current_price, 2) }}</td>
                <td>{{ $a->depreciation_method }}</td>
                <td>{{ $a->depreciation_rate }}%</td>
                <td>{{ $a->useful_life }} years</td>
                <td>{{ $a->created_at->format('Y-m-d') }}</td>
                <td>{{ $a->updated_at->format('Y-m-d') }}</td>
                <td>{{ $a->status }}</td>
                <td>{{ $a->location }}</td>
                <td>{{ $a->owner }}</td>
                <td>{{ $a->notes }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-4">
        <a href="{{ route('assets.create') }}" class="btn btn-primary">New Account</a>
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
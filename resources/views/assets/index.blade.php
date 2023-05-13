@extends('layouts.app')

@section('page-title', 'Assets')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 table-responsive">
            <table class="table table-hover table-responsive table-striped table-sm">
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
                        <th scope="row">{{ $a->id }}</th>
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
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href="{{ route('assets.create') }}" class="btn btn-primary">New Account</a>
            </div>
        </div>
    </div>
    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap core JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
    @endsection
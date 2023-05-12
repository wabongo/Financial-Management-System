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
                    <tr>
                        <th scope="row">1</th>
                        <td>Property A</td>
                        <td>Real Estate</td>
                        <td>2022-01-15</td>
                        <td>$500,000</td>
                        <td>$550,000</td>
                        <td>Straight-line</td>
                        <td>5%</td>
                        <td>20 years</td>
                        <td>2022-01-15</td>
                        <td></td>
                        <td></td>
                        <td>Active</td>
                        <td>City, State</td>
                        <td>John Doe</td>
                        <td>Additional notes about Property A</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Vehicle B</td>
                        <td>Vehicle</td>
                        <td>2021-05-01</td>
                        <td>$30,000</td>
                        <td>$25,000</td>
                        <td>Double Declining Balance</td>
                        <td>20%</td>
                        <td>10 years</td>
                        <td>2021-05-01</td>
                        <td></td>
                        <td></td>
                        <td>Active</td>
                        <td>City, State</td>
                        <td>Jane Smith</td>
                        <td>Additional notes about Vehicle B</td>
                    </tr>
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
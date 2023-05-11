@extends('layouts.app')

@section('page-title', 'Savings Accounts')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <table class="table">
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
                    <tr>
                        <td>1</td>
                        <td>John Doe</td>
                        <td>Regular Savings</td>
                        <td>123456789</td>
                        <td>ABC Bank</td>
                        <td>Ksh1,000</td>
                        <td>3.5%</td>
                        <td>2022-01-01</td>
                        <td>-</td>
                        <td>Active</td>
                        <td>2023-05-10 10:30 AM</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Jane Smith</td>
                        <td>High-Interest Savings</td>
                        <td>987654321</td>
                        <td>XYZ Bank</td>
                        <td>Ksh5,000</td>
                        <td>4.0%</td>
                        <td>2021-05-15</td>
                        <td>-</td>
                        <td>Active</td>
                        <td>2023-05-10 09:15 AM</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Larry Mackenzie</td>
                        <td>Regular Savings</td>
                        <td>246813579</td>
                        <td>DEF Bank</td>
                        <td>Ksh2,500</td>
                        <td>2.75%</td>
                        <td>2023-02-20</td>
                        <td>-</td>
                        <td>Active</td>
                        <td>2023-05-10 11:45 AM</td>
                    </tr>
                </tbody>
            </table>

            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button class="btn btn-black me-md-2" type="button"> <a href="{{ route('savings.create') }}">Create savings account</a></button>
            </div>
        </div>
    </div>
</div>
<!-- Bootstrap core CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap core JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>

@endsection
@extends('layouts.app')

@section('page-title', 'Create Savings Account')


@section('content')
<style>
    form {
        background-color: #f4f4f4;
        padding: 10px;
        border-radius: 5px;
    }

    form label {
        color: #333;
        font-weight: bold;
    }

    form input[type="text"] {
        border-radius: 7.5;
        border: none;
        box-shadow: none;
        background-color: #fff;
        height: 40px;
        margin-bottom: 15px;
    }

    form button[type="submit"] {
        background-color: #0069d9;
        color: #fff;
        border: none;
        border-radius: 10px;
        font-weight: bold;
        text-transform: uppercase;
    }

    form button[type="submit"]:hover {
        background-color: #0056b3;
    }

    /* Company color */
    .company-color {
        color: #0069d9;
    }
</style>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form class="row g-3" method="POST" action="{{route('savings.store')}}">
                @csrf
                <div class="col-md-6">
                    <label for="accountID" class="form-label">Account ID</label>
                    <input type="text" class="form-control" id="accountID" name="account_Id">
                </div>
                <div class="col-md-6">
                    <label for="accountHolder" class="form-label">Account Holder</label>
                    <input type="text" class="form-control" id="accountHolder" name="account_holder">
                </div>
                <div class="col-md-6">
                    <label for="accountType" class="form-label">Account Type</label>
                    <input type="text" class="form-control" id="accountType" name="account_type">
                </div>
                <div class="col-md-6">
                    <label for="accountNumber" class="form-label">Account Number</label>
                    <input type="text" class="form-control" id="accountNumber" name="account_number">
                </div>
                <div class="col-md-6">
                    <label for="bankName" class="form-label">Bank Name</label>
                    <input type="text" class="form-control" id="bankName" name="bank_name">
                </div>
                <div class="col-md-6">
                    <label for="balance" class="form-label">Balance</label>
                    <input type="text" class="form-control" id="balance" name="balance">
                </div>
                <div class="col-md-6">
                    <label for="interestRate" class="form-label">Interest Rate</label>
                    <input type="text" class="form-control" id="interestRate" name="interest_rate">
                </div>
                <div class="col-md-6">
                    <label for="startDate" class="form-label">Start Date</label>
                    <input type="date" class="form-control" id="startDate" name="start_date">
                </div>
                <div class="col-md-6">
                    <label for="endDate" class="form-label">End Date</label>
                    <input type="date" class="form-control" id="endDate" name="end_date">
                </div>
                <div class="col-md-6">
                    <label for="status" class="form-label">Status</label>
                    <input type="text" class="form-control" id="status" name="status">
                </div>
                <div class="col-md-6">
                    <label for="lastUpdated" class="form-label">Last Updated</label>
                    <input type="date" class="form-control" id="lastUpdated" name="last_updated">
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Bootstrap core CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap core JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
@endsection
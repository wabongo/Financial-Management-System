@extends('layouts.app')

@section('page-title', 'Create Savings Account')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form class="row g-3">
                <div class="col-md-6">
                    <label for="accountID" class="form-label">Account ID</label>
                    <input type="text" class="form-control" id="accountID" name="accountID">
                </div>
                <div class="col-md-6">
                    <label for="accountHolder" class="form-label">Account Holder</label>
                    <input type="text" class="form-control" id="accountHolder" name="accountHolder">
                </div>
                <div class="col-md-6">
                    <label for="accountType" class="form-label">Account Type</label>
                    <input type="text" class="form-control" id="accountType" name="accountType">
                </div>
                <div class="col-md-6">
                    <label for="accountNumber" class="form-label">Account Number</label>
                    <input type="text" class="form-control" id="accountNumber" name="accountNumber">
                </div>
                <div class="col-md-6">
                    <label for="bankName" class="form-label">Bank Name</label>
                    <input type="text" class="form-control" id="bankName" name="bankName">
                </div>
                <div class="col-md-6">
                    <label for="balance" class="form-label">Balance</label>
                    <input type="text" class="form-control" id="balance" name="balance">
                </div>
                <div class="col-md-6">
                    <label for="interestRate" class="form-label">Interest Rate</label>
                    <input type="text" class="form-control" id="interestRate" name="interestRate">
                </div>
                <div class="col-md-6">
                    <label for="startDate" class="form-label">Start Date</label>
                    <input type="text" class="form-control" id="startDate" name="startDate">
                </div>
                <div class="col-md-6">
                    <label for="endDate" class="form-label">End Date</label>
                    <input type="text" class="form-control" id="endDate" name="endDate">
                </div>
                <div class="col-md-6">
                    <label for="status" class="form-label">Status</label>
                    <input type="text" class="form-control" id="status" name="status">
                </div>
                <div class="col-md-6">
                    <label for="lastUpdated" class="form-label">Last Updated</label>
                    <input type="text" class="form-control" id="lastUpdated" name="lastUpdated">
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
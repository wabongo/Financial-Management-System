@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form class="row g-3">
                <div class="col-md-6">
                    <label for="loanID" class="form-label">Loan ID</label>
                    <input type="text" class="form-control" id="loanID" name="loanID">
                </div>
                <div class="col-md-6">
                    <label for="borrower" class="form-label">Borrower</label>
                    <input type="text" class="form-control" id="borrower" name="borrower">
                </div>
                <div class="col-md-6">
                    <label for="loanAmount" class="form-label">Loan Amount</label>
                    <input type="text" class="form-control" id="loanAmount" name="loanAmount">
                </div>
                <div class="col-md-6">
                    <label for="interestRate" class="form-label">Interest Rate</label>
                    <input type="text" class="form-control" id="interestRate" name="interestRate">
                </div>
                <div class="col-md-6">
                    <label for="loanType" class="form-label">Loan Type</label>
                    <input type="text" class="form-control" id="loanType" name="loanType">
                </div>
                <div class="col-md-6">
                    <label for="loanTerm" class="form-label">Loan Term</label>
                    <input type="text" class="form-control" id="loanTerm" name="loanTerm">
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
                    <label for="paymentFrequency" class="form-label">Payment Frequency</label>
                    <input type="text" class="form-control" id="paymentFrequency" name="paymentFrequency">
                </div>
                <div class="col-md-6">
                    <label for="paymentAmount" class="form-label">Payment Amount</label>
                    <input type="text" class="form-control" id="paymentAmount" name="paymentAmount">
                </div>
                <div class="col-md-6">
                    <label for="outstandingBalance" class="form-label">Outstanding Balance</label>
                    <input type="text" class="form-control" id="outstandingBalance" name="outstandingBalance">
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
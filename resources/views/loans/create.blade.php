@extends('layouts.app')

@section('page-title', 'Create Loan Account')

@section('content')

<style>
    /* Form style */
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
        <div class="col-md-6 mx-auto">
            <form class="row g-3" method="post" action="{{route('loans.store')}}">
                @csrf
                <div class="col-md-12">
                </div>
                <div class="col-md-6">
                    <label for="loan ID" class="form-label">Loan ID</label>
                    <input type="text" class="form-control" id="loanID" name="loan_Id">
                </div>
                <div class="col-md-6">
                    <label for="borrower" class="form-label">Borrower</label>
                    <input type="text" class="form-control" id="borrower" name="borrower">
                </div>
                <div class="col-md-6">
                    <label for="loan Amount" class="form-label">Loan Amount</label>
                    <input type="text" class="form-control" id="loan Amount" name="loan_amount">
                </div>
                <div class="col-md-6">
                    <label for="interestRate" class="form-label">Interest Rate</label>
                    <input type="text" class="form-control" id="interest Rate" name="interest_rate">
                </div>
                <div class="col-md-6">
                    <label for="loanType" class="form-label">Loan Type</label>
                    <input type="text" class="form-control" id="loanType" name="loan_type">
                </div>
                <div class="col-md-6">
                    <label for="loanTerm" class="form-label">Loan Term</label>
                    <input type="text" class="form-control" id="loanTerm" name="loan_term">
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
                    <label for="paymentFrequency" class="form-label">Payment Frequency</label>
                    <input type="text" class="form-control" id="paymentFrequency" name="payment_frequency">
                </div>
                <div class="col-md-6">
                    <label for="paymentAmount" class="form-label">Payment Amount</label>
                    <input type="text" class="form-control" id="paymentAmount" name="payment_amount">
                </div>
                <div class="col-md-6">
                    <label for="outstandingBalance" class="form-label">Outstanding Balance</label>
                    <input type="text" class="form-control" id="outstandingBalance" name="outstanding_balance">
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

<!-- Include necessary scripts -->
@push('scripts')
<!-- Include Bootstrap core JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
@endpush

<!-- Include Bootstrap core CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
@endsection
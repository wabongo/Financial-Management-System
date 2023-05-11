@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form class="row g-3">
                <div class="col-md-6">
                    <label for="customerID" class="form-label">Customer ID</label>
                    <input type="text" class="form-control" id="customerID" name="customerID">
                </div>
                <div class="col-md-6">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="col-12">
                    <label for="contactInfo" class="form-label">Contact Information</label>
                    <textarea class="form-control" id="contactInfo" name="contactInfo"></textarea>
                </div>
                <div class="col-md-6">
                    <label for="balance" class="form-label">Balance</label>
                    <input type="text" class="form-control" id="balance" name="balance">
                </div>
                <div class="col-md-6">
                    <label for="paymentTerms" class="form-label">Payment Terms</label>
                    <input type="text" class="form-control" id="paymentTerms" name="paymentTerms">
                </div>
                <div class="col-md-6">
                    <label for="creditLimit" class="form-label">Credit Limit</label>
                    <input type="text" class="form-control" id="creditLimit" name="creditLimit">
                </div>
                <div class="col-md-6">
                    <label for="paymentHistory" class="form-label">Payment History</label>
                    <textarea class="form-control" id="paymentHistory" name="paymentHistory"></textarea>
                </div>
                <div class="col-12">
                    <label for="notes" class="form-label">Notes/Comments</label>
                    <textarea class="form-control" id="notes" name="notes"></textarea>
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
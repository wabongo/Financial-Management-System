@extends('layouts.app')

@section('page-title', 'Assets')

@section('content')
<form class="row g-3">
    <div class="col-md-6">
        <label for="inputAssetName" class="form-label">Asset Name</label>
        <input type="text" class="form-control" id="inputAssetName">
    </div>
    <div class="col-md-6">
        <label for="inputAssetType" class="form-label">Asset Type</label>
        <input type="text" class="form-control" id="inputAssetType">
    </div>
    <div class="col-12">
        <label for="inputAcquisitionDate" class="form-label">Acquisition Date</label>
        <input type="date" class="form-control" id="inputAcquisitionDate">
    </div>
    <div class="col-12">
        <label for="inputPurchasePrice" class="form-label">Purchase Price</label>
        <input type="text" class="form-control" id="inputPurchasePrice">
    </div>
    <div class="col-md-6">
        <label for="inputCurrentValue" class="form-label">Current Value</label>
        <input type="text" class="form-control" id="inputCurrentValue">
    </div>
    <div class="col-md-6">
        <label for="inputDepreciationMethod" class="form-label">Depreciation Method</label>
        <input type="text" class="form-control" id="inputDepreciationMethod">
    </div>
    <div class="col-md-4">
        <label for="inputDepreciationRate" class="form-label">Depreciation Rate</label>
        <input type="text" class="form-control" id="inputDepreciationRate">
    </div>
    <div class="col-md-2">
        <label for="inputUsefulLife" class="form-label">Useful Life</label>
        <input type="text" class="form-control" id="inputUsefulLife">
    </div>
    <div class="col-md-6">
        <label for="inputDepreciationStartDate" class="form-label">Depreciation Start Date</label>
        <input type="date" class="form-control" id="inputDepreciationStartDate">
    </div>
    <div class="col-md-6">
        <label for="inputDisposalDate" class="form-label">Disposal Date</label>
        <input type="date" class="form-control" id="inputDisposalDate">
    </div>
    <div class="col-md-6">
        <label for="inputDisposalAmount" class="form-label">Disposal Amount</label>
        <input type="text" class="form-control" id="inputDisposalAmount">
    </div>
    <div class="col-md-6">
        <label for="inputStatus" class="form-label">Status</label>
        <input type="text" class="form-control" id="inputStatus">
    </div>
    <div class="col-md-6">
        <label for="inputLocation" class="form-label">Location</label>
        <input type="text" class="form-control" id="inputLocation">
    </div>
    <div class="col-md-6">
        <label for="inputOwner" class="form-label">Owner</label>
        <input type="text" class="form-control" id="inputOwner">
    </div>
    <div class="col-12">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
                Check me out
            </label>
        </div>
    </div>
    <div class="col-12">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
<!-- Bootstrap core CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap core JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>

@endsection
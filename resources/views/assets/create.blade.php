@extends('layouts.app')

@section('page-title', 'Assets')

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
<form class="row g-3" method="post" action="{{route('assets.store')}}">
    @csrf
    <div class="col-md-6">
        <label for="inputAssetName" class="form-label">Asset Name</label>
        <input type="text" class="form-control" id="AssetName" name="name">
    </div>
    <div class="col-md-6">
        <label for="inputAssetType" class="form-label">Asset Type</label>
        <input type="text" class="form-control" id="AssetType" name="type">
    </div>
    <div class="col-12">
        <label for="inputAcquisitionDate" class="form-label">Acquisition Date</label>
        <input type="date" class="form-control" id="AcquisitionDate" name="acquisition_date">
    </div>
    <div class="col-12">
        <label for="inputPurchasePrice" class="form-label">Purchase Price</label>
        <input type="text" class="form-control" id="PurchasePrice" name="purchase_price">
    </div>
    <div class="col-md-6">
        <label for="inputCurrentValue" class="form-label">Current Value</label>
        <input type="text" class="form-control" id="CurrentValue" name="current_value">
    </div>
    <div class="col-md-6">
        <label for="inputDepreciationMethod" class="form-label">Depreciation Method</label>
        <input type="text" class="form-control" id="DepreciationMethod" name="depreciation_method">
    </div>
    <div class="col-md-4">
        <label for="inputDepreciationRate" class="form-label">Depreciation Rate</label>
        <input type="text" class="form-control" id="DepreciationRate" name="depreciation_rate">
    </div>
    <div class="col-md-2">
        <label for="inputUsefulLife" class="form-label">Useful Life</label>
        <input type="text" class="form-control" id="UsefulLife" name="useful_life">
    </div>
    <div class="col-md-6">
        <label for="inputDepreciationStartDate" class="form-label">Depreciation Start Date</label>
        <input type="date" class="form-control" id="DepreciationStartDate">
    </div>
    <div class="col-md-6">
        <label for="inputDisposalDate" class="form-label">Disposal Date</label>
        <input type="date" class="form-control" id="inputDisposalDate" name="disposal_date">
    </div>
    <div class="col-md-6">
        <label for="inputDisposalAmount" class="form-label">Disposal Amount</label>
        <input type="text" class="form-control" id="inputDisposalAmount" name="disposal_amount">
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
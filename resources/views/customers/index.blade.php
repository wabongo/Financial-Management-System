@extends('layouts.app')

@section('page-title', 'Customers')

@section('content')
<div class="container">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-hover table table-striped table-sm">
                    <thead>
                        <tr>
                            <th scope="col">Customer ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Contact Information</th>
                            <th scope="col">Balance</th>
                            <th scope="col">Payment Terms</th>
                            <th scope="col">Credit Limit</th>
                            <th scope="col">Payment History</th>
                            <th scope="col">Notes/Comments</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Dave Genge</td>
                            <td>dave@gmail.com<br>+254792647589<br>Juja</td>
                            <td>Ksh500</td>
                            <td>Net 30</td>
                            <td>Ksh1,000</td>
                            <td>...</td>
                            <td>...</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Jane Mwende</td>
                            <td>jane@gmail.com<br>+254791678564<br>Mlolongo</td>
                            <td>Ksh0</td>
                            <td>Due on receipt</td>
                            <td>N/A</td>
                            <td>...</td>
                            <td>...</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Larry Mbondo</td>
                            <td>larry@gmail.com<br>+25479545675<br>Shakahola</td>
                            <td>Ksh200</td>
                            <td>Net 15</td>
                            <td>Ksh500</td>
                            <td>...</td>
                            <td>...</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Alice Oloo</td>
                            <td>alice@gmail.com<br>+2547985763<br>Bondo</td>
                            <td>Ksh750</td>
                            <td>Net 30</td>
                            <td>Ksh2,000</td>
                            <td>...</td>
                            <td>...</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Robert Ruto</td>
                            <td>robert@gmail.com<br>+254791567490<br>Sugoi</td>
                            <td>Ksh1,200</td>
                            <td>Net 30</td>
                            <td>Ksh3,000</td>
                            <td>...</td>
                            <td>...</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a href="{{ route('customers.create') }}" class="btn btn-primary">New Account</a>
    </div>
</div>
</div>

<!-- Bootstrap core CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap core JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
@endsection
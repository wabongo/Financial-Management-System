@extends('layouts.app')

@section('page-title', 'Dashboard')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">

                <div class="card-header card shadow-lg">
                    Income Summary
                </div>
                <div class="card-body">
                    <!-- Display income summary data here -->
                    <p>Total Income: Ksh10,000</p>
                    <p>Expenses: Ksh5,000</p>
                    <p>Net Income: Ksh5,000</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card shadow-lg">
                    <div class="card-header card shadow-lg">
                        Expense Summary
                    </div>
                    <div class="card-body">

                        <!-- Display expense summary data here -->
                        <p>Total Expenses: Ksh5,000</p>
                        <p>Income: Ksh10,000</p>
                        <p>Net Income: Ksh5,000</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mb-3">
            <div class="card-body p-3">
                <div class="chart">
                    <canvas id="line-chart-gradient" class="chart-canvas" height="300px"></canvas>
                </div>
            </div>
        </div>
    </div>

    <!-- Include necessary scripts -->
    @push('scripts')
    <!-- Include Chart.js library -->

    <script src="../../assets/js/plugins/chartjs.min.js"></script>

    <!-- Include Bootstrap core JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>

    <!-- Custom JavaScript for chart rendering -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Get the canvas element
            var ctx = document.getElementById('chart').getContext('2d');

            // Chart configuration
            var chartConfig = {
                type: 'bar',
                data: {
                    labels: ['January', 'February', 'March', 'April', 'May', 'June'],
                    datasets: [{
                            label: 'Income',
                            data: [5000, 4000, 6000, 5500, 7000, 6500],
                            backgroundColor: 'rgba(54, 162, 235, 0.5)',
                            borderColor: 'rgba(54, 162, 235, 1)',
                            borderWidth: 1
                        },
                        {
                            label: 'Expenses',
                            data: [3000, 3500, 4000, 3800, 4200, 3900],
                            backgroundColor: 'rgba(255, 99, 132, 0.5)',
                            borderColor: 'rgba(255, 99, 132, 1)',
                            borderWidth: 1
                        }
                    ]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            };

            // Create and render the chart
            var incomeExpenseChart = new Chart(ctx, chartConfig);
        });
    </script>
    @endpush

    <!-- Include Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    @endsection
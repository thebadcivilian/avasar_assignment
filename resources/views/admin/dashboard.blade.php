@extends('layouts.admin_master')

@section('page')
    <style>
        .alert {
            padding: 10px;
            border-radius: 4px;
            margin-bottom: 20px;
            text-align: center;
            font-size: 12px;
        }

        .alert-success {
            background-color: #333;
            color: white;
        }

        .alert-danger {
            background-color: #f44336;
            color: white;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #f4f4f4;
        }
    </style>
    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Dashboard</h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboards</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col">
                    <div class="h-100">
                        <div class="row mb-3 pb-1">
                            <div class="col-12">
                                <div class="d-flex align-items-lg-center flex-lg-row flex-column">
                                    <div class="flex-grow-1">
                                        <h4 class="fs-16 mb-1">Good Morning, Admin!</h4>
                                        <p class="text-muted mb-0">Here's the details of your transactions:</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible alert-fixed">
                                <i class="las la-thumbs-up"></i>
                                {{ session('success') }}
                            </div>
                        @endif
                        @if (session('error'))
                            <div class="alert alert-danger alert-dismissible alert-fixed">
                                <i class="las la-thumbs-down"></i>
                                {{ session('error') }}
                            </div>
                        @endif

                        @if (!empty($notifications))
                            <div class="alert alert-warning">
                                <ul>
                                    @foreach ($notifications as $notification)
                                        <li>{{ $notification }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <div class="row">
                            <div class="col-md-4">
                                <div class="alert alert-success">
                                    Total Income: ${{ number_format($totalIncome, 2) }}
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="alert alert-danger">
                                    Total Expenses: ${{ number_format($totalExpenses, 2) }}
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="alert alert-info">
                                    Balance: ${{ number_format($balance, 2) }}
                                </div>
                            </div>
                        </div>

                        <!-- Monthly Report Table -->
                        <div class="row mt-4">
                            <div class="col-12">
                                <h5>Monthly Income and Expenses</h5>
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Month</th>
                                            <th>Income</th>
                                            <th>Expenses</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($monthlyIncome as $month => $income)
                                            <tr>
                                                <td>{{ $month }}</td>
                                                <td>${{ number_format($income, 2) }}</td>
                                                <td>${{ number_format($monthlyExpenses[$month] ?? 0, 2) }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <!-- Chart.js container -->
                        <div class="row mt-4">
                            <div class="col-12">
                                <canvas id="incomeExpenseChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const ctx = document.getElementById('incomeExpenseChart').getContext('2d');
                const incomeExpenseChart = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: @json(array_keys($monthlyIncome->toArray())),
                        datasets: [{
                                label: 'Income',
                                data: @json(array_values($monthlyIncome->toArray())),
                                borderColor: 'rgba(75, 192, 192, 1)',
                                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                                fill: false
                            },
                            {
                                label: 'Expenses',
                                data: @json(array_values($monthlyExpenses->toArray())),
                                borderColor: 'rgba(255, 99, 132, 1)',
                                backgroundColor: 'rgba(255, 99, 132, 0.2)',
                                fill: false
                            }
                        ]
                    },
                    options: {
                        responsive: true,
                        plugins: {
                            legend: {
                                position: 'top',
                            },
                            title: {
                                display: true,
                                text: 'Income and Expenses Over Time'
                            }
                        }
                    }
                });
            });
        </script>
    @endsection

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Report</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        body {
            margin: 20px;
            font-family: 'Arial', 'Helvetica Neue', sans-serif;
            background-color: #f9f9f9;
            color: #444;
            line-height: 1.6;
        }

        .report-title {
            text-align: center;
            margin-bottom: 30px;
        }

        .report-title h1 {
            font-size: 3rem;
            font-weight: bold;
            color: #2980b9;
            text-transform: uppercase;
        }

        .statistics {
            background-color: #fff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
        }

        h2 {
            border-bottom: 2px solid #2980b9;
            padding-bottom: 10px;
            font-weight: bold;
            color: #34495e;
            font-size: 2rem;
            margin-top: 20px;
        }

        h3 {
            font-weight: 600;
            color: #34495e;
            font-size: 1.5rem;
            margin-top: 15px;
        }

        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 15px;
            text-align: left;
            border: 1px solid #e1e1e1;
        }

        th {
            background-color: #2980b9;
            color: white;
            font-weight: bold;
            font-size: 1.1rem;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .footer {
            text-align: center;
            margin-top: 50px;
            font-size: 0.9rem;
            color: #777;
        }

        .icon {
            font-size: 1.5rem;
            margin-right: 10px;
            color: #2980b9;
        }

        .section {
            margin-bottom: 30px;
        }

        .highlight {
            background-color: #d9edf7;
            border-left: 5px solid #5bc0de;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        @media (max-width: 576px) {
            .report-title h1 {
                font-size: 2.5rem;
            }

            h2 {
                font-size: 1.8rem;
            }

            h3 {
                font-size: 1.3rem;
            }
        }
    </style>
</head>

<body>
    <div class="report-title">
        <h1><i class="fas fa-file-alt icon"></i>Report</h1>
    </div>

    <div class="container">
        <div class="section statistics">
            <h2><i class="fas fa-users icon"></i> Customer Overview</h2>
            <div class="highlight">
                <h3>Total Customers: <strong>{{ $totalCustomers }}</strong></h3>
                <h3>New Customers (Last 7 days): <strong>{{ $newCustomers }}</strong></h3>
            </div>
        </div>

        <div class="section statistics">
            <h2><i class="fas fa-calendar-check icon"></i> Appointment Statistics</h2>
            <div class="highlight">
                <h3>Total Appointments: <strong>{{ $totalAppointments }}</strong></h3>
                {{-- <h3>Peak Service Hours: <strong>{{ $peakServiceHours->hour ?? 'N/A' }}</strong> Hours with <strong>{{ $peakServiceHours->count ?? 0 }}</strong> appointments</h3> --}}
            </div>
        </div>

        <div class="section statistics">
            <h2><i class="fas fa-wrench icon"></i> Most Requested Services</h2>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th><i class="fas fa-wrench icon"></i> Service Name</th>
                        <th><i class="fas fa-list-alt icon"></i> Request Count</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($mostRequestedServices as $service)
                        <tr>
                            <td>{{ $service->services }}</td>
                            <td>{{ $service->count }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="footer">
        <p>Report generated on {{ date('Y-m-d') }}</p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('Admin/assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('Admin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('Admin/assets/vendor/chart.js/chart.umd.jss') }}"></script>
    <script src="{{ asset('Admin/assets/vendor/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset('Admin/assets/vendor/quill/quill.js') }}"></script>
    <script src="{{ asset('Admin/assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
    <script src="{{ asset('Admin/assets/vendor/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('Admin/assets/vendor/php-email-form/validate.js') }}"></script>

    <script src="{{ asset('Admin/assets/js/main.js') }}"></script>
</body>

</html>

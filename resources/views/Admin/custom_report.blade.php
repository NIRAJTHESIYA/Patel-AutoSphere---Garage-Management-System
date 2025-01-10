<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ ucfirst($table) }} Report</title>
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

        h2 {
            border-bottom: 2px solid #2980b9;
            padding-bottom: 10px;
            font-weight: bold;
            color: #34495e;
            font-size: 2rem;
            margin-top: 20px;
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
        }

        @media print {

            table,
            h2 {
                page-break-inside: avoid;
            }
        }
    </style>
</head>

<body>
    <div class="report-title">
        <h1><i class="fas fa-file-alt icon"></i>{{ ucfirst($table) }} Report</h1>
    </div>

    <div class="container">
        <div class="highlight">
            <h3>Total Count: <strong>{{ $count }}</strong></h3>
        </div>

        @if ($table == 'services')
            <h2>List of All Services</h2>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Service ID</th>
                        <th>Service Name</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data['servicesList'] as $service)
                        <tr>
                            <td>{{ $service->service_id }}</td>
                            <td>{{ $service->service_name }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <h2>Most Requested Services in Appointments</h2>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Service Name</th>
                        <th>Count</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data['servicesCount'] as $service)
                        <tr>
                            <td>{{ $service->services }}</td>
                            <td>{{ $service->service_count }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>

    <div class="footer">
        <p>Report generated on {{ date('Y-m-d') }}</p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment Bill</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 800px;
            margin: 0 auto;
            background-color: #ffffff;
            color: #333;
            padding: 20px;
            border: 1px solid #000;
        }

        .header {
            text-align: center;
            border-bottom: 2px solid #000;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }

        .header h1 {
            font-size: 24px;
            margin: 5px 0;
            color: #c60000;
        }

        .header p {
            margin: 0;
            font-size: 14px;
            color: #333;
        }

        .info {
            font-size: 14px;
            margin-bottom: 20px;
        }

        .info p {
            margin: 4px 0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        th,
        td {
            border: 1px solid #000;
            padding: 8px;
            text-align: left;
            font-size: 14px;
        }

        th {
            background-color: #f9c0c0;
            color: #000;
        }

        td {
            text-align: right;
        }

        td:first-child {
            text-align: left;
        }

        .total-amount {
            font-weight: bold;
            font-size: 16px;
            margin-top: 20px;
            text-align: right;
        }

        .footer {
            text-align: center;
            font-size: 12px;
            margin-top: 30px;
            border-top: 1px solid #000;
            padding-top: 10px;
        }

        .footer p {
            margin: 2px 0;
        }

        .footer p:last-child {
            font-style: italic;
            color: #666;
        }
    </style>
</head>

<body>
    <div class="header">
        <h1>Patel Car Care</h1>
        <p>Car & Bike Service</p>
        <p>Contact: +91 98765 43210 | Rajkot road, Mahuva</p>
    </div>

    <h2>Appointment Bill</h2>

    <div class="info">
        <p><strong>Date:</strong> {{ date('Y-m-d') }}</p>
        <p><strong>Car Number:</strong> {{ $car_number }}</p>
        <p><strong>Kilometers:</strong> {{ $kilometers }}</p>
    </div>

    <h3>Services</h3>
    <table>
        <thead>
            <tr>
                <th>Service</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($services as $index => $service)
                <tr>
                    <td>{{ $service }}</td>
                    <td>{{ $prices[$index] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="total-amount">
        <p><strong>Total Amount:</strong> {{ $total_amount }}</p>
    </div>

    <div class="footer">
        <p>If you have any questions, feel free to reach out to us.</p>
        <p>Best regards,<br>Patel Car Care</p>
    </div>
</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Appointment Bill</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
        }

        .container {
            width: 100%;
            max-width: 600px;
            margin: 30px auto;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.2);
            overflow: hidden;
            border: 1px solid #e0e0e0;
        }

        .header {
            background-color: #56bc6e;
            padding: 20px;
            text-align: center;
            color: #ffffff;
            border-bottom: 5px solid #116224;
        }

        .header h1 {
            font-size: 26px;
            margin: 0;
            font-weight: 600;
            letter-spacing: 1px;
        }

        .content {
            padding: 30px;
        }

        .content p {
            font-size: 16px;
            line-height: 1.8;
            color: #333;
            margin-bottom: 15px;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .table th,
        .table td {
            border: 1px solid #e0e0e0;
            padding: 15px;
            text-align: left;
            color: #333;
            font-size: 15px;
        }

        .table th {
            background-color: #92bfef;
            color: #ffffff;
            text-align: center;
            font-weight: bold;
        }

        .table td {
            background-color: #f1f1f1;
        }

        .table tr:hover td {
            background-color: #e0e0e0;
        }

        .footer {
            background-color: #f8f9fa;
            text-align: center;
            padding: 20px;
            font-size: 15px;
            color: #777;
            border-top: 1px solid #e0e0e0;
        }

        @media (max-width: 600px) {
            .header h1 {
                font-size: 22px;
            }

            .content p {
                font-size: 16px;
            }

            .table th,
            .table td {
                padding: 12px;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>Your Appointment Bill</h1>
        </div>
        <div class="content">
            <p>Dear Customer,</p>
            <p>Thank you for your recent visit. Please find your appointment bill details below:</p>

            <table class="table">
                <tr>
                    <th>Car Number</th>
                    <td>{{ $car_number }}</td>
                </tr>
                <tr>
                    <th>Kilometers Driven</th>
                    <td>{{ $kilometers }}</td>
                </tr>
                <tr>
                    <th>Services Rendered</th>
                    <td>
                        <ul>
                            @foreach ($services as $service)
                                <li>{{ $service }}</li>
                            @endforeach
                        </ul>
                    </td>
                </tr>
                <tr>
                    <th>Prices</th>
                    <td>
                        <ul>
                            @foreach ($prices as $price)
                                <li>₹{{ $price }}</li>
                            @endforeach
                        </ul>
                    </td>
                </tr>
                <tr>
                    <th>Total Amount</th>
                    <td>₹{{ $total_amount }}</td>
                </tr>
            </table>

            <p>If you have any questions, feel free to reach out to us.</p>
        </div>
        <div class="footer">
            <p>Best regards,<br>Patel Car Care</p>
        </div>
    </div>
</body>

</html>

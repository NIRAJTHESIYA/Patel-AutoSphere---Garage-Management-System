<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Appointment Request</title>
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
            background-color: #56bc6e; /* Green */
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

        .time-slot {
            display: inline-block;
            padding: 10px 15px;
            background-color: #56bc6e; /* Green background */
            color: #ffffff;
            border-radius: 5px;
            font-size: 14px;
            font-weight: bold;
            text-align: center;
            margin-top: 20px;
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
            <h1>New Appointment submitted</h1>
        </div>
        <div class="content">
            <p>A new Appointment has been submitted. Here are the details:</p>

            <table class="table">
                <tr>
                    <th>Name</th>
                    <td>{{ $appointment->name }}</td>
                </tr>
                <tr>
                    <th>Phone</th>
                    <td>{{ $appointment->phone }}</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>{{ $appointment->email }}</td>
                </tr>
                <tr>
                    <th>Vehicle Name</th>
                    <td>{{ $appointment->vehicle_name }}</td>
                </tr>
                <tr>
                    <th>Vehicle Model</th>
                    <td>{{ $appointment->vehicle_model }}</td>
                </tr>
                <tr>
                    <th>Vehicle Year</th>
                    <td>{{ $appointment->vehicle_year }}</td>
                </tr>
                <tr>
                    <th>Appointment Date</th>
                    <td>{{ $appointment->appointment_date }}</td>
                </tr>
                <tr>
                    <th>Selected Time Slot</th>
                    <td><div class="time-slot">{{ $appointment->appointment_time_slot }}</div></td>
                </tr>
                <tr>
                    <th>Services</th>
                    <td>{{ implode(', ', json_decode($appointment->services)) }}</td>
                </tr>
            </table>
        </div>
        <div class="footer">
            <p>Please review the appointment and respond promptly.</p>
        </div>
    </div>
</body>

</html>

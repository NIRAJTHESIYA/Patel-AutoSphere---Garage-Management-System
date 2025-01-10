<!DOCTYPE html>
<html>
<head>
    <title>Service Bill</title>
</head>
<body>
    <h2>Dear {{ $appointment->name }},</h2>

    <p>Thank you for using our services. Below are the details of your bill:</p>

    <h3>Bill Summary:</h3>
    <p><strong>Kilometers:</strong> {{ $appointmentBill->kilometers }}</p>

    <h3>Services:</h3>
    <table border="1" cellpadding="10">
        <tr>
            <th>Service</th>
            <th>Price</th>
        </tr>
        @foreach($services as $index => $service)
        <tr>
            <td>{{ $service }}</td>
            <td>{{ $prices[$index] }}</td>
        </tr>
        @endforeach
    </table>

    <h3>Total Amount:</h3>
    <p><strong>Total:</strong> {{ $totalAmount }}</p>

    <p>Thank you for choosing us!</p>

    <p>Best Regards,<br>Your Company</p>
</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OTP - Patel Car Care</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0px 3px 6px rgba(0, 0, 0, 0.16);
            overflow: hidden;
        }

        .header {
            background-color: #4CAF50;
            padding: 20px;
            text-align: center;
            color: #ffffff;
        }

        .header h1 {
            font-size: 24px;
            margin: 0;
        }

        .content {
            padding: 30px;
        }

        .content p {
            font-size: 16px;
            line-height: 1.5;
            color: #333;
        }

        .otp-code {
            font-size: 32px;
            font-weight: bold;
            text-align: center;
            color: #4CAF50;
            letter-spacing: 5px;
            margin: 20px 0;
        }

        .expiration {
            font-size: 14px;
            color: #888;
            text-align: center;
            margin-top: 10px;
        }

        .footer {
            background-color: #f4f4f4;
            text-align: center;
            padding: 20px;
            font-size: 12px;
            color: #777;
        }

        .footer a {
            color: #4CAF50;
            text-decoration: none;
        }

        @media (max-width: 600px) {
            .container {
                width: 100%;
            }

            .header h1 {
                font-size: 20px;
            }

            .content p {
                font-size: 14px;
            }

            .otp-code {
                font-size: 24px;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>Your OTP Code</h1>
        </div>
        <div class="content">
            <p>Dear Customer,</p>
            <p>Your One-Time Password (OTP) for verifying your account is:</p>

            <div class="otp-code">{{ $otp }}</div>

            <p>Please use this code within the next 2 minutes to complete your registration or verification process.</p>

            <div class="expiration">
                <p>If you didn’t request this OTP, please ignore this email.</p>
            </div>
        </div>
        <div class="footer">
            <p>Thank you for choosing Patel Car Care.</p>
            <p>Need help? Contact us at <a href="nirajthesiya0708@gmail.com">support@Patel Car Care.com</a>.</p>
        </div>
    </div>
</body>

</html>

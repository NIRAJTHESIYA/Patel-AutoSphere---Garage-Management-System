<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Reset</title>
    <style>
        /* General styles */
        body {
            font-family: 'Helvetica', Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .email-container {
            max-width: 600px;
            margin: 40px auto;
            background-color: #ffffff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            padding: 0;
        }
        .email-header {
            background-color: #4CAF50; /* Updated color */
            padding: 20px;
            color: #ffffff;
            text-align: center;
            font-size: 28px;
            font-weight: bold;
        }
        .email-body {
            padding: 20px;
            color: #333333;
            line-height: 1.6;
        }
        .email-body p {
            font-size: 16px;
            margin-bottom: 20px;
            text-align: center;
        }
        .email-body a {
            display: inline-block;
            padding: 15px 30px;
            background-color: #4CAF50; /* Updated color */
            color: #ffffff;
            text-decoration: none;
            font-size: 18px;
            font-weight: bold;
            border-radius: 50px;
            box-shadow: 0 4px 10px rgba(76, 175, 80, 0.3); /* Updated shadow */
            margin-top: 20px;
            transition: background-color 0.3s ease;
        }
        .email-body a:hover {
            background-color: #388E3C; /* Darker hover effect */
        }
        .email-footer {
            padding: 20px;
            text-align: center;
            font-size: 14px;
            color: #777777;
            background-color: #f4f4f4;
        }
        .email-footer p {
            margin: 0;
        }
        .fallback-link {
            font-size: 12px;
            color: #777777;
            text-align: center;
            margin-top: 10px;
        }

        /* Responsive styles */
        @media screen and (max-width: 600px) {
            .email-body a {
                font-size: 16px;
                padding: 12px 24px;
            }
            .email-body p {
                font-size: 14px;
            }
            .email-header {
                font-size: 24px;
            }
        }
    </style>
</head>
<body>
    <div class="email-container">
        <!-- Email header -->
        <div class="email-header">
            Password Reset
        </div>
        <!-- Email body -->
        <div class="email-body">
            <p>You have requested to reset your password. Please click the button below to reset your password:</p>
            <p>
                <a href="{{ $resetLink }}">Reset Password</a>
            </p>
            <p>If you did not request this, please ignore this email.</p>
            <p>Thank you!</p>
        </div>
        <!-- Email footer -->
        <div class="email-footer">
            <p>If the button above doesn't work, copy and paste the link below into your browser:</p>
            <p class="fallback-link">{{ $resetLink }}</p>
        </div>
    </div>
</body>
</html>

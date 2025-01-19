<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Successfully Created</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            background-color: #f9f9f9;
            margin: 0;
            padding: 20px;
        }
        .email-container {
            max-width: 600px;
            margin: 0 auto;
            background: #ffffff;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
        }
        .header {
            font-size: 18px;
            font-weight: bold;
            color: #333;
            margin-bottom: 20px;
        }
        .content {
            margin-bottom: 20px;
        }
        .content p {
            margin: 5px 0;
        }
        .account-details {
            background-color: #f5f5f5;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 20px;
        }
        .account-details p {
            margin: 8px 0;
            font-weight: bold;
        }
        .footer {
            font-size: 14px;
            color: #666;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <div class="header">
            Your Account Has Been Created!
        </div>
        <div class="content">
            <p>Dear {{ $user->name }},</p>
            <p>We’re excited to confirm that your account has been successfully created on <strong>Tarkiman AegisLabs Test<strong>. Below are your account details:</p>
        </div>
        <div class="account-details">
            <p><strong>Name:</strong> {{ $user->name }}</p>
            <p><strong>Email:</strong> {{ $user->email }}</p>
        </div>
        <div class="content">
            <p>You can now log in to your account using your registered email and password. If you have any issues or questions, please don't hesitate to contact our support team.</p>
        </div>
        <div class="footer">
            Thank you for joining us!<br>
            <strong>Tarkiman AegisLabs Test</strong><br>
            <a href="http://tarkiman.com">Contact Support</a> | <a href="http://tarkiman.com">Visit Website</a>
        </div>
    </div>
</body>
</html>

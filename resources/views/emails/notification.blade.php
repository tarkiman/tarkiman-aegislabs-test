<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New User Registration</title>
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
        .details {
            margin-bottom: 20px;
        }
        .details p {
            margin: 5px 0;
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
            New User Registration Notification
        </div>
        <div class="details">
            <p>Dear Admin,</p>
            <p>A new user has successfully registered on the platform. Below are the details:</p>
            <p><strong>User Details:</strong></p>
            <p>Name: <span style="color: #007BFF;">{{ $user->name }}</span></p>
            <p>Email: <span style="color: #007BFF;">{{ $user->email }}</span></p>
            <p>Registration Date: <span style="color: #007BFF;">{{ $user->created_at }}</span></p>
        </div>
        <div class="footer">
            Please log in to the admin dashboard for more details or to manage this user.<br>
            <strong>System Administrator</strong>
        </div>
    </div>
</body>
</html>
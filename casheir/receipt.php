<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Receipt</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
        }
        .receipt-container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .header img {
            width: 80px;
            height: auto;
        }
        .header h1 {
            margin: 10px 0 5px;
            font-size: 24px;
        }
        .details {
            margin-bottom: 20px;
            line-height: 1.6;
        }
        .details strong {
            display: inline-block;
            width: 150px;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
            color: #888;
        }
        .footer a {
            color: #007bff;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="receipt-container">
        <div class="header">
            <img src="../file_index/image/jhslogo.png" alt="School Logo">
            <h1>Receipt</h1>
            <p><strong>Down Payment Transaction</strong></p>
        </div>
        <div class="details">
            <p><strong>Student Name:</strong> <?php echo $student_name; ?></p>
            <p><strong>Amount Paid:</strong> <?php echo $amount; ?></p>
            <p><strong>Date:</strong> <?php echo $pay_dat; ?></p>
        </div>
        <div class="footer">
            <p>Thank you for your payment!</p>
            <p><a href="./">Go Back</a></p>
        </div>
    </div>
</body>
</html>

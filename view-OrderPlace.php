<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Confirmation</title>
    <style>
        body {
            background-color: #f8f9fa;
            color: #495057;
        }

        .container {
            margin-top: 50px;
            text-align: center;
        }

        h1 {
            color: #28a745;
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        p {
            font-size: 1.2rem;
            margin-bottom: 30px;
        }

        .btn-success {
            background-color: #28a745;
            border-color: #28a745;
            font-size: 1.2rem;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Thank you!</h1>
    <p>Your order has been placed successfully.</p>
    <form action="order.php" method="POST">
        <div class="order-button-container">
            <button class="btn btn-success" onclick="location.href='Product.php'">Place Another Order</button>
        </div>
    </form>
</div>

</body>
</html>

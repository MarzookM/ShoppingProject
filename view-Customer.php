<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Management</title>
    <!-- Bootstrap CSS link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa; /* Light grey background */
        }

        .header-container {
            background-color: #343a40; /* Dark grey header */
            color: #ffffff; /* White text */
            padding: 20px;
        }

        .table-container {
            margin-top: 20px;
        }

        .order-button-container {
            margin-top: 20px;
            text-align: center; /* Center the button */
        }

        .order-button {
            background-color: #007bff; /* Blue button */
            color: #ffffff; /* White text */
            padding: 15px 30px; /* Larger padding for a bigger button */
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .order-button:hover {
            background-color: #0056b3; /* Darker blue on hover */
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="row header-container">
            <div class="col">
                <h1>Customer</h1>
            </div>
            <div class="col-auto">
                <?php include "view-Customer-newform.php"; ?>
            </div>
        </div>

        <div class="table-responsive table-container">
            <table class="table">
                <!-- ... (unchanged) ... -->
            </table>
        </div>

        <div class="order-button-container">
            <form action="order.php" method="POST">
                <button class="order-button" onclick="location.href='order.php'">Order</button>
            </form>
        </div>
    </div>

    <!-- Bootstrap JS and jQuery scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>

</html>

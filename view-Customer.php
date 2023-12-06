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
        }

        .order-button {
            background-color: #007bff; /* Blue button */
            color: #ffffff; /* White text */
            padding: 10px 20px;
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
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Phone Number</th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // from control page
                    while ($Customers = $Customer->fetch_assoc()) {
                    ?>
                        <tr>
                            <td><?php echo $Customers['CustomerID']; ?></td>
                            <td><?php echo $Customers['CustomerName']; ?></td>
                            <td><?php echo $Customers['CustomerPhoneNumber']; ?></td>
                            <td>
                                <?php include "view-Customer-editform.php"; ?>
                            </td>
                            <td>
                                <form method="post" action="">
                                    <input type="hidden" name="cid" value="<?php echo $Customers['CustomerID']; ?>">
                                    <input type="hidden" name="actionType" value="Delete">
                                    <button type="submit" class="btn btn-primary" onclick="return confirm('Are you sure?');">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                            class="bi bi-trash" viewBox="0 0 16 16">
                                            <path
                                                d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z" />
                                            <path
                                                d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z" />
                                        </svg>
                                    </button>
                                </form>
                            </td>
                            <td>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
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

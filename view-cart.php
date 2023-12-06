<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Cart</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        body {
            background-color: #333; 
            color: white;
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <h1 class="mb-4">Your Cart</h1>

    <div class="table-responsive">
        <table class="table table-bordered table-dark">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Price</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $totalPrice = 0;
                while ($row = $CartProduct->fetch_assoc()) {
                    $finalPrice = $row['ProductPrice'] * $row['ProductQuantity'];
                    $totalPrice += $finalPrice; 
                ?>
                    <tr>
                        <td><?php echo $row['ProductName']; ?></td>
                        <td><?php echo $row['ProductQuantity']; ?></td>
                        <td><?php echo $finalPrice; ?></td>
                    </tr>
                <?php
                }
                ?>
                <tr>
                    <td colspan="2" style="text-align: right;"><strong>Total Price:</strong></td>
                    <td><strong><?php echo $totalPrice; ?></strong></td>
                </tr>
            </tbody>
        </table>
    </div>

  
    <div class="text-center mt-4">
        <a href="AddCustomer.php" class="btn btn-primary btn-lg">Go to Checkout</a>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add to Cart</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            margin-top: 50px;
        }
    </style>
</head>

<body>

    <div class="container">
        <h1>Add to Cart</h1>

        <?php
        include("addToCart.php");

        // Assuming you have a form with productId and quantity inputs
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['productId'], $_POST['quantity'])) {
            $productId = $_POST['productId'];
            $quantityToAdd = $_POST['quantity'];

            // Fetch the current quantity from the database
            $currentQuantity = getCurrentQuantity(get_db_connection(), $productId);

            if ($currentQuantity !== false) {
                // Calculate the new quantity
                $newQuantity = $currentQuantity + $quantityToAdd;

                // Update the quantity in the database
                updateProductQuantity(get_db_connection(), $productId, $newQuantity);

                // Display success message
                echo '<div class="alert alert-success" role="alert">
                        Added to Cart successfully!
                    </div>';
            } else {
                // Display error message
                echo '<div class="alert alert-danger" role="alert">
                        Product not found or an error occurred.
                    </div>';
            }
        } else {
            // Display invalid request message
            echo '<div class="alert alert-warning" role="alert">
                    Invalid request.
                </div>';
        }
        ?>

        <!-- Form for adding to cart -->
        <form action="" method="POST">
            <div class="form-group">
                <label for="productId">Product ID:</label>
                <input type="text" class="form-control" name="productId" required>
            </div>
            <div class="form-group">
                <label for="quantity">Quantity:</label>
                <input type="number" class="form-control" name="quantity" required>
            </div>
            <button type="submit" class="btn btn-primary">Add to Cart</button>
        </form>
    </div>

</body>

</html>

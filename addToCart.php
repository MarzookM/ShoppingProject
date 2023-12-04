<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['productId'], $_POST['quantity'])) {
    // Assuming you have a database connection named $con
    include("connect.php");

    $productId = $_POST['productId'];
    $quantity = $_POST['quantity'];

    // Update the quantity in the database (you can customize this as per your needs)
    $updateQuery = "UPDATE Product SET ProductQuantity = $quantity WHERE ProductID = $productId";
    mysqli_query($con, $updateQuery);

    // You can add more logic here, such as inserting into a cart table
    echo "Added to Cart successfully.";
} else {
    // Invalid request
    echo "Invalid request.";
}
?>

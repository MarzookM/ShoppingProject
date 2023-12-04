<?php
include("util-db.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['productId'], $_POST['quantity'])) {
    $productId = $_POST['productId'];
    $quantityToAdd = $_POST['quantity'];

    // Fetch the current quantity from the database
    $fetchQuery = "SELECT ProductQuantity FROM Product WHERE ProductID = $productId";
    $result = mysqli_query($conn, $fetchQuery);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $currentQuantity = $row['ProductQuantity'];

        // Calculate the new quantity
        $newQuantity = $currentQuantity + $quantityToAdd;

        // Update the quantity in the database
        $updateQuery = "UPDATE Product SET ProductQuantity = $newQuantity WHERE ProductID = $productId";
        mysqli_query($conn, $updateQuery);

        // You can add more logic here, such as inserting into a cart table
        echo "Added to Cart successfully.";
    } else {
        // Handle the case where the product is not found
        echo "Product not found.";
    }
} else {
    // Invalid request
    echo "Invalid request.";
}
?>

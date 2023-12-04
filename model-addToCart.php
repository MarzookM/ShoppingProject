<?php

// Include the file with your database connection logic
include("util-db.php");

// Function to fetch the current quantity of a product
function getCurrentQuantity($con, $productId)
{
    $fetchQuery = "SELECT ProductQuantity FROM Product WHERE ProductID = $productId";
    $result = mysqli_query($con, $fetchQuery);

    if (!$result) {
        die("Query failed: " . mysqli_error($con));
    }

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        return $row['ProductQuantity'];
    } else {
        return false;
    }
}

// Function to update the quantity of a product
function updateProductQuantity($con, $productId, $newQuantity)
{
    $updateQuery = "UPDATE Product SET ProductQuantity = $newQuantity WHERE ProductID = $productId";
    mysqli_query($con, $updateQuery);
}

// Check if the request method is POST and required parameters are set
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['productId'], $_POST['quantity'])) {
    $productId = $_POST['productId'];
    $quantityToAdd = $_POST['quantity'];

    // Fetch the current quantity from the database
    $currentQuantity = getCurrentQuantity($con, $productId);

    if ($currentQuantity !== false) {
        // Calculate the new quantity
        $newQuantity = $currentQuantity + $quantityToAdd;

        // Update the quantity in the database
        updateProductQuantity($con, $productId, $newQuantity);

        // You can add more logic here, such as inserting into a cart table
        echo "Added to Cart successfully.";
    } else {
        // Handle the case where the product is not found or an error occurred
        echo "Product not found or an error occurred.";
    }
} else {
    // Invalid request
    echo "Invalid request.";
}

?>

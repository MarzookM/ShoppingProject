<?php
include("util-db.php");

// Function to fetch the current quantity and cart status of a ProductProduce
function getProductProduceDetails($conn, $ProductProduceId)
{
    $fetchQuery = "SELECT ProductProduceQuantity, ProductProduceCart FROM ProductProduce WHERE ProductProduceID = $ProductProduceId";
    $result = mysqli_query($conn, $fetchQuery);

    if (!$result) {
        die("Query failed: " . mysqli_error($conn));
    }

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        return $row;
    } else {
        return false;
    }
}

// Function to update the quantity and cart status of a ProductProduce
function updateProductProduceDetails($conn, $ProductProduceId, $newQuantity, $newCartStatus)
{
    $updateQuery = "UPDATE ProductProduce SET ProductProduceQuantity = $newQuantity, ProductProduceCart = '$newCartStatus' WHERE ProductProduceID = $ProductProduceId";
    mysqli_query($conn, $updateQuery);
}

// Check if the request method is POST and required parameters are set
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['ProductProduceId'], $_POST['quantity'])) {
    $ProductProduceId = $_POST['ProductProduceId'];
    $quantityToAdd = $_POST['quantity'];

    // Fetch the current quantity and cart status from the database
    $ProductProduceDetails = getProductProduceDetails(get_db_connection(), $ProductProduceId);

    if ($ProductProduceDetails !== false) {
        // Calculate the new quantity
        $newQuantity = $ProductProduceDetails['ProductProduceQuantity'] + $quantityToAdd;

        // Set the new cart status
        $newCartStatus = 'y';

        // Update the quantity and cart status in the database
        updateProductProduceDetails(get_db_connection(), $ProductProduceId, $newQuantity, $newCartStatus);

        // You can add more logic here, such as inserting into a cart table
        echo "Added to Cart successfully.";

        // Redirect back to the previous page
        echo '<script>window.history.back();</script>';
        exit(); // Make sure to exit to prevent further execution
    } else {
        // Handle the case where the ProductProduce is not found or an error occurred
        echo "ProductProduce not found or an error occurred.";
    }
} else {
    // Invalid request
    echo "Invalid request.";
}
?>

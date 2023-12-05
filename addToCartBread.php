<?php
include("util-db.php");

// Function to fetch the current quantity and cart status of a ProductBread
function getProductBreadDetails($conn, $ProductBreadId)
{
    $fetchQuery = "SELECT ProductBreadQuantity, ProductBreadCart FROM ProductBread WHERE ProductBreadID = $ProductBreadId";
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

// Function to update the quantity and cart status of a ProductBread
function updateProductBreadDetails($conn, $ProductBreadId, $newQuantity, $newCartStatus)
{
    $updateQuery = "UPDATE ProductBread SET ProductBreadQuantity = $newQuantity, ProductBreadCart = '$newCartStatus' WHERE ProductBreadID = $ProductBreadId";
    mysqli_query($conn, $updateQuery);
}

// Check if the request method is POST and required parameters are set
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['ProductBreadId'], $_POST['quantity'])) {
    $ProductBreadId = $_POST['ProductBreadId'];
    $quantityToAdd = $_POST['quantity'];

    // Fetch the current quantity and cart status from the database
    $ProductBreadDetails = getProductBreadDetails(get_db_connection(), $ProductBreadId);

    if ($ProductBreadDetails !== false) {
        // Calculate the new quantity
        $newQuantity = $ProductBreadDetails['ProductBreadQuantity'] + $quantityToAdd;

        // Set the new cart status
        $newCartStatus = 'y';

        // Update the quantity and cart status in the database
        updateProductBreadDetails(get_db_connection(), $ProductBreadId, $newQuantity, $newCartStatus);

        // You can add more logic here, such as inserting into a cart table
        echo "Added to Cart successfully.";

        // Redirect back to the previous page
        echo '<script>window.history.back();</script>';
        exit(); // Make sure to exit to prevent further execution
    } else {
        // Handle the case where the ProductBread is not found or an error occurred
        echo "ProductBread not found or an error occurred.";
    }
} else {
    // Invalid request
    echo "Invalid request.";
}
?>

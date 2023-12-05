<?php
include("util-db.php");

// Function to fetch the current quantity and cart status of a ProductSpice
function getProductSpiceDetails($conn, $ProductSpiceId)
{
    $fetchQuery = "SELECT ProductSpiceQuantity, ProductSpiceCart FROM ProductSpice WHERE ProductSpiceID = $ProductSpiceId";
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

// Function to update the quantity and cart status of a ProductSpice
function updateProductSpiceDetails($conn, $ProductSpiceId, $newQuantity, $newCartStatus)
{
    $updateQuery = "UPDATE ProductSpice SET ProductSpiceQuantity = $newQuantity, ProductSpiceCart = '$newCartStatus' WHERE ProductSpiceID = $ProductSpiceId";
    mysqli_query($conn, $updateQuery);
}

// Check if the request method is POST and required parameters are set
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['ProductSpiceId'], $_POST['quantity'])) {
    $ProductSpiceId = $_POST['ProductSpiceId'];
    $quantityToAdd = $_POST['quantity'];

    // Fetch the current quantity and cart status from the database
    $ProductSpiceDetails = getProductSpiceDetails(get_db_connection(), $ProductSpiceId);

    if ($ProductSpiceDetails !== false) {
        // Calculate the new quantity
        $newQuantity = $ProductSpiceDetails['ProductSpiceQuantity'] + $quantityToAdd;

        // Set the new cart status
        $newCartStatus = 'y';

        // Update the quantity and cart status in the database
        updateProductSpiceDetails(get_db_connection(), $ProductSpiceId, $newQuantity, $newCartStatus);

        // You can add more logic here, such as inserting into a cart table
        echo "Added to Cart successfully.";

        // Redirect back to the previous page
        echo '<script>window.history.back();</script>';
        exit(); // Make sure to exit to prevent further execution
    } else {
        // Handle the case where the ProductSpice is not found or an error occurred
        echo "ProductSpice not found or an error occurred.";
    }
} else {
    // Invalid request
    echo "Invalid request.";
}
?>

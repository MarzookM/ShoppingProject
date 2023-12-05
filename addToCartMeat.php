<?php
include("util-db.php");

// Function to fetch the current quantity and cart status of a ProductMeat
function getProductMeatDetails($conn, $ProductMeatId)
{
    $fetchQuery = "SELECT ProductMeatQuantity, ProductMeatCart FROM ProductMeat WHERE ProductMeatID = $ProductMeatId";
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

// Function to update the quantity and cart status of a ProductMeat
function updateProductMeatDetails($conn, $ProductMeatId, $newQuantity, $newCartStatus)
{
    $updateQuery = "UPDATE ProductMeat SET ProductMeatQuantity = $newQuantity, ProductMeatCart = '$newCartStatus' WHERE ProductMeatID = $ProductMeatId";
    mysqli_query($conn, $updateQuery);
}

// Check if the request method is POST and required parameters are set
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['ProductMeatId'], $_POST['quantity'])) {
    $ProductMeatId = $_POST['ProductMeatId'];
    $quantityToAdd = $_POST['quantity'];

    // Fetch the current quantity and cart status from the database
    $ProductMeatDetails = getProductMeatDetails(get_db_connection(), $ProductMeatId);

    if ($ProductMeatDetails !== false) {
        // Calculate the new quantity
        $newQuantity = $ProductMeatDetails['ProductMeatQuantity'] + $quantityToAdd;

        // Set the new cart status
        $newCartStatus = 'y';

        // Update the quantity and cart status in the database
        updateProductMeatDetails(get_db_connection(), $ProductMeatId, $newQuantity, $newCartStatus);

        // You can add more logic here, such as inserting into a cart table
        echo "Added to Cart successfully.";

        // Redirect back to the previous page
        echo '<script>window.history.back();</script>';
        exit(); // Make sure to exit to prevent further execution
    } else {
        // Handle the case where the ProductMeat is not found or an error occurred
        echo "ProductMeat not found or an error occurred.";
    }
} else {
    // Invalid request
    echo "Invalid request.";
}
?>

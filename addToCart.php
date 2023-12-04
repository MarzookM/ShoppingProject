<?php
include("util-db.php");

// Function to fetch the current quantity of a product
function getCurrentQuantity($conn, $productId)
{
    $fetchQuery = "SELECT ProductQuantity FROM Product WHERE ProductID = $productId";
    $result = mysqli_query($conn, $fetchQuery);

    if (!$result) {
        die("Query failed: " . mysqli_error($conn));
    }

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        return $row['ProductQuantity'];
    } else {
        return false;
    }
}

// Function to update the quantity of a product
function updateProductQuantity($conn, $productId, $newQuantity)
{
    $updateQuery = "UPDATE Product SET ProductQuantity = $newQuantity WHERE ProductID = $productId";
    mysqli_query($conn, $updateQuery);
}

// Function to update the cart status of a product
function updateProductCartStatus($conn, $productId, $newCartStatus)
{
    // Assuming ProductCart is a column in a separate table
    $updateQuery = "UPDATE CartTable SET ProductCart = '$newCartStatus' WHERE ProductID = $productId";
    mysqli_query($conn, $updateQuery);
}

// Check if the request method is POST and required parameters are set
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

        // Set the new cart status (assuming ProductCart is a column in a separate table)
        $newCartStatus = 'y';

        // Update the cart status in the database
        updateProductCartStatus(get_db_connection(), $productId, $newCartStatus);

        // You can add more logic here, such as inserting into a cart table
        echo "Added to Cart successfully.";

        // Redirect back to the previous page
        echo '<script>window.history.back();</script>';
        exit(); // Make sure to exit to prevent further execution
    } else {
        // Handle the case where the product is not found or an error occurred
        echo "Product not found or an error occurred.";
    }
} else {
    // Invalid request
    echo "Invalid request.";
}
?>

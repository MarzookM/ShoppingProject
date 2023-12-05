<?php
include("util-db.php");

// Function to fetch the current quantity and cart status of a ProductDrink
function getProductDrinkDetails($conn, $ProductDrinkId)
{
    $fetchQuery = "SELECT ProductDrinkQuantity, ProductDrinkCart FROM ProductDrink WHERE ProductDrinkID = $ProductDrinkId";
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

// Function to update the quantity and cart status of a ProductDrink
function updateProductDrinkDetails($conn, $ProductDrinkId, $newQuantity, $newCartStatus)
{
    $updateQuery = "UPDATE ProductDrink SET ProductDrinkQuantity = $newQuantity, ProductDrinkCart = '$newCartStatus' WHERE ProductDrinkID = $ProductDrinkId";
    mysqli_query($conn, $updateQuery);
}

// Check if the request method is POST and required parameters are set
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['ProductDrinkId'], $_POST['quantity'])) {
    $ProductDrinkId = $_POST['ProductDrinkId'];
    $quantityToAdd = $_POST['quantity'];

    // Fetch the current quantity and cart status from the database
    $ProductDrinkDetails = getProductDrinkDetails(get_db_connection(), $ProductDrinkId);

    if ($ProductDrinkDetails !== false) {
        // Calculate the new quantity
        $newQuantity = $ProductDrinkDetails['ProductDrinkQuantity'] + $quantityToAdd;

        // Set the new cart status
        $newCartStatus = 'y';

        // Update the quantity and cart status in the database
        updateProductDrinkDetails(get_db_connection(), $ProductDrinkId, $newQuantity, $newCartStatus);

        // You can add more logic here, such as inserting into a cart table
        echo "Added to Cart successfully.";

        // Redirect back to the previous page
        echo '<script>window.history.back();</script>';
        exit(); // Make sure to exit to prevent further execution
    } else {
        // Handle the case where the ProductDrink is not found or an error occurred
        echo "ProductDrink not found or an error occurred.";
    }
} else {
    // Invalid request
    echo "Invalid request.";
}
?>

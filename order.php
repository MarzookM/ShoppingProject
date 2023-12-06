<?php
include("util-db.php");

// Function to update the quantity and cart status of all products
function updateAllProducts($conn)
{
    $updateQuery = "UPDATE Product SET ProductQuantity = 0, ProductCart = 'n'";
    mysqli_query($conn, $updateQuery);
}

// Check if the request method is POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Update all products
    updateAllProducts(get_db_connection());

    // Add more logic if needed

    echo "Order placed successfully.";
} else {
    // Invalid request
    echo "Invalid request.";
}
?>

<?php
include("util-db.php");

// Function to wipe all data from the Customer table
function deleteAllCustomers($conn)
{
    $deleteQuery = "TRUNCATE TABLE Customer";
    mysqli_query($conn, $deleteQuery);
}

// Function to update the quantity and cart status of all products
function updateAllProducts($conn)
{
    $updateQuery = "UPDATE Product SET ProductQuantity = 0, ProductCart = 'n'";
    mysqli_query($conn, $updateQuery);
}

// Check if the request method is POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Wipe all data from the Customer table
    deleteAllCustomers(get_db_connection());

    // Update all products
    updateAllProducts(get_db_connection());

    // Add more logic if needed

    echo "All customer data wiped and order placed successfully.";
} else {
    // Invalid request
    echo "Invalid request.";
}
?>

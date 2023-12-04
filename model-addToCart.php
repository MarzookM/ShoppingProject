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

// Initialize message variable
$message = '';

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

        // You can add more logic here, such as inserting into a cart table
        $message = "Added to Cart successfully";
    } else {
        // Handle the case where the product is not found or an error occurred
        $message = "Product not found or an error occurred";
    }
} else {
    // Invalid request
    $message = "Invalid request";
}
?>

<!-- Display the message -->
<h1>Product Page</h1>
<p><?php echo $message; ?></p>

<!-- Rest of your HTML code -->

// Function to update the quantity and cart status of a product
function updateProductDetails($conn, $productId, $newQuantity, $newCartStatus)
{
    $updateQuery = "UPDATE Product SET ProductQuantity = $newQuantity, ProductCart = '$newCartStatus' WHERE ProductID = $productId";
    mysqli_query($conn, $updateQuery);
}

// Check if the request method is POST and required parameters are set
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['productId'], $_POST['quantity'])) {
    $productId = $_POST['productId'];
    $quantityToAdd = $_POST['quantity'];

    // Fetch the current quantity and cart status from the database
    $productDetails = getProductDetails(get_db_connection(), $productId);

    if ($productDetails !== false) {
        // Calculate the new quantity
        $newQuantity = $productDetails['ProductQuantity'] + $quantityToAdd;

        // Set the new cart status
        $newCartStatus = 'y';

        // Update the quantity and cart status in the database
        updateProductDetails(get_db_connection(), $productId, $newQuantity, $newCartStatus);

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

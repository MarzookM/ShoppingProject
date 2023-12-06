<?php
include("util-db.php");


function getProductDetails($conn, $productId)
{
    $fetchQuery = "SELECT ProductQuantity, ProductCart FROM Product WHERE ProductID = $productId";
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


function updateProductDetails($conn, $productId, $newQuantity, $newCartStatus)
{
    $updateQuery = "UPDATE Product SET ProductQuantity = $newQuantity, ProductCart = '$newCartStatus' WHERE ProductID = $productId";
    mysqli_query($conn, $updateQuery);
}


if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['productId'], $_POST['quantity'])) {
    $productId = $_POST['productId'];
    $quantityToAdd = $_POST['quantity'];

    
    $productDetails = getProductDetails(get_db_connection(), $productId);

    if ($productDetails !== false) {
        
        $newQuantity = $productDetails['ProductQuantity'] + $quantityToAdd;

       
        $newCartStatus = 'y';

     
        updateProductDetails(get_db_connection(), $productId, $newQuantity, $newCartStatus);

       
        echo "Added to Cart successfully.";

   
        echo '<script>window.history.back();</script>';
        exit(); 
    } else {
       
        echo "Product not found or an error occurred.";
    }
} else {
    // Invalid request
    echo "Invalid request.";
}
?>

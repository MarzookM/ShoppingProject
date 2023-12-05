<?php
include("util-db.php");

// Function to fetch the current Quantitiy and cart status of a ProductMeat
function getProductMeatDetails($conn, $ProductMeatID)
{
    $fetchQuery = "SELECT ProductMeatQuantitiy, ProductMeatCart FROM ProductMeat WHERE ProductMeatID = $ProductMeatID";
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

// Function to update the Quantitiy and cart status of a ProductMeat
function updateProductMeatDetails($conn, $ProductMeatID, $newQuantitiy, $newCartStatus)
{
    $updateQuery = "UPDATE ProductMeat SET ProductMeatQuantitiy = $newQuantitiy, ProductMeatCart = '$newCartStatus' WHERE ProductMeatID = $ProductMeatID";
    mysqli_query($conn, $updateQuery);
}

// Check if the request method is POST and required parameters are set
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['ProductMeatID'], $_POST['Quantitiy'])) {
    $ProductMeatID = $_POST['ProductMeatID'];
    $QuantitiyToAdd = $_POST['Quantitiy'];

    // Fetch the current Quantitiy and cart status from the database
    $ProductMeatDetails = getProductMeatDetails(get_db_connection(), $ProductMeatID);

    if ($ProductMeatDetails !== false) {
        // Calculate the new Quantitiy
        $newQuantitiy = $ProductMeatDetails['ProductMeatQuantitiy'] + $QuantitiyToAdd;

        // Set the new cart status
        $newCartStatus = 'y';

        // Update the Quantitiy and cart status in the database
        updateProductMeatDetails(get_db_connection(), $ProductMeatID, $newQuantitiy, $newCartStatus);

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
    // InvalID request
    echo "InvalID request.";
}
?>

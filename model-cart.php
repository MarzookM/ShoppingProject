<?php
// Function to fetch cart items for a specific product type
function getCartItems($productType)
{
    $query = "SELECT * FROM Store JOIN $productType ON Store.${productType}ID = ${productType}.${productType}ID 
              WHERE ${productType}.${productType}Cart = 'y' AND ${productType}.${productType}Quantity > 0";
    
    $result = mysqli_query(get_db_connection(), $query);

    if (!$result) {
        die("Query failed: " . mysqli_error(get_db_connection()) . "<br>Query: " . $query);
    }

    return $result;
}
?>

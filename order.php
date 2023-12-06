<?php
include("util-db.php");
include("view-header.php");


function deleteAllCustomers($conn)
{
    $deleteQuery = "TRUNCATE TABLE Customer";
    mysqli_query($conn, $deleteQuery);
}


function updateAllProducts($conn)
{
    $updateQuery = "UPDATE Product SET ProductQuantity = 0, ProductCart = 'n'";
    mysqli_query($conn, $updateQuery);
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    deleteAllCustomers(get_db_connection());

 
    updateAllProducts(get_db_connection());

   


} else {
    
    echo "Invalid request.";
}

include("view-OrderPlace.php");
include("view-footer.php");

?>


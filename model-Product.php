<?php
function selectProduct(){
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT `ProductID`, `ProductName`, `ProductPrice`, `ProductQuantity`, 'ProductCart' FROM `Product`  "); 
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function getImageDataFromBlob($blobData)
{
    // Assuming you have a database connection object named $con
    // Replace 'your_table' and 'your_blob_column' with your actual table and column names
    $sql = "SELECT ProductImage FROM your_table WHERE your_blob_column = ?";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("s", $blobData);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        return $row['ProductImage'];
    } else {
        return null;
    }
}

?>

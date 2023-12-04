<?php
function selectProduct(){
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT `ProductID`, `ProductName`, `ProductPrice`, `ProductQuantity`, `ProductCart`, `ProductImage` FROM `Product`  "); 
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}


?>

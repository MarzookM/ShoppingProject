<?php
function selectProduct(){
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT `Product.ProductName`, `Product.ProductQuantity` FROM `Store` JOIN `Product` ON `Store.ProductID` = `Product.ProductID`
WHERE `Product.ProductCart` = 'y' AND `Product.ProductQuantity` > 0 "); 
        $stmt->execute();
        $result = $stmt->get_result()
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}



?>

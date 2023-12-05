<?php
function selectCartProducts(){
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("
            SELECT 
                Product.ProductName, 
                Product.ProductQuantity, 
                Product.ProductPrice, 
                (Product.ProductQuantity * Product.ProductPrice) AS FinalPrice 
            FROM 
                Store 
            JOIN 
                Product ON Store.ProductID = Product.ProductID 
            WHERE 
                Product.ProductCart = 'y' AND Product.ProductQuantity > 0"); 
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertProduct($cNumber){
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `Product` (`ProductQuantity`) VALUES (?)"); 
        $stmt->bind_param("ss", $cNumber);
        $success = $stmt->execute();
        $conn->close();
        return  $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function updateProduct($cNumber){
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update `Product` set `ProductQuantity` = ?" ); 
        $stmt->bind_param("ssi", $cNumber);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function deleteProduct($cid){
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from Product where ProductQuantity =?"); 
        $stmt->bind_param("i", $cid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>

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

function updateCartProductQuantity($productId, $newQuantity)
{
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE Product SET ProductQuantity = ? WHERE ProductID = ?");
        $stmt->bind_param("ii", $newQuantity, $productId);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>

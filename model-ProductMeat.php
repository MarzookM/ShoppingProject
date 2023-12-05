
<?php
function selectProductMeat(){
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT `ProductMeatID`, `ProductMeatName`, `ProductMeatPrice`, `ProductMeatQuantity`, `ProductMeatCart`, `ProductMeatImage` FROM `ProductMeat`"); 
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

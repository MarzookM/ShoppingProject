<?php
function selectProductProduce(){
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT `ProductProduceID`, `ProductProduceName`, `ProductProducePrice`, `ProductProduceQuantity`, `ProductProduceCart`, `ProductProduceImage` FROM `ProductProduce`  "); 
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

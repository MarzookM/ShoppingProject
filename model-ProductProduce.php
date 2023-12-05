<?php
function selectProductProduce(){
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT `ProductProduceID`, `ProductProduceName`, `ProductProducePrice`, `ProductProduceQuantitiy`, `ProductProduceCart`, `ProductProduceImage` FROM `ProductProduce`  "); 
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

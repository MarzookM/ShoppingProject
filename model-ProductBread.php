<?php
function selectProductBread(){
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT `ProductBreadID`, `ProductBreadName`, `ProductBreadPrice`, `ProductBreadQuantity`, `ProductBreadCart`, `ProductBreadImage` FROM `ProductBread`  "); 
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

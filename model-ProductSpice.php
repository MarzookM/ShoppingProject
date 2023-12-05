<?php
function selectProductSpice(){
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT `ProductSpiceID`, `ProductSpiceName`, `ProductSpicePrice`, `ProductSpiceQuantity`, `ProductSpiceCart`, `ProductSpiceImage` FROM `ProductSpice`  "); 
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

<?php
function selectProductDrink(){
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT `ProductDrink`, `ProductDrinkName`, `ProductDrinkPrice`, `ProductDrinkQuantity`, `ProductDrinkCart`, `ProductDrinkImage` FROM `ProductDrink`  "); 
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

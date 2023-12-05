<?php
function selectProductBread(){
    try {
        $conn = get_db_connection();
        
        $stmt = $conn->prepare("SELECT `ProductBreadID`, `ProductBreadName`, `ProductBreadPrice`, `ProductBreadQuantity`, `ProductBreadCart`, `ProductBreadImage` FROM `ProductBread`");

        if (!$stmt) {
            die("Error in prepare statement: " . $conn->error);
        }

        $stmt->execute();

        if ($stmt->error) {
            die("Error in execute statement: " . $stmt->error);
        }

        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        // Handle any other exceptions here
        $conn->close();
        throw $e;
    }
}
?>

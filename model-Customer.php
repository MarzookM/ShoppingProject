<?php
function selectCustomer(){
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT `CustomerID`, `CustomerName`, `CustomerPhoneNumber` FROM `Customer`  "); 
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function insertCustomer($cNumber, $cDesc){
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `Customer` (`CustomerPhoneNumber`, `CustomerName`) VALUES (?,?)"); 
        $stmt->bind_param("ss", $cNumber, $cDesc);
        $success = $stmt->execute();
        $conn->close();
        return  $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function updateCustomer($cNumber, $cDesc){
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update `Customer` set `CustomerPhoneNumber` = ?, `CustomerName` =?" ); 
        $stmt->bind_param("ssi", $cNumber, $cDesc;
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function deleteCustomer($cid){
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from Customer where CustomerID =?"); 
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

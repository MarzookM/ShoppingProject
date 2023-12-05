<?php
function insertCustomer($customerName, $customerID, $customerPhoneNumber) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO Customer (CustomerName, CustomerID, CustomerPhoneNumber) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $customerName, $customerID, $customerPhoneNumber);
        $success = $stmt->execute();

        if (!$success) {
            throw new Exception($stmt->error);
        }

        $conn->close();

        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>

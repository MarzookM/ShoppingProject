<?php
require_once("util-db.php");
require_once("model-addcustomer.php");
$pageTitle = "Add Customer";
include "view-header.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $customerName = $_POST["customerName"];
    $customerID = $_POST["customerID"];
    $customerPhoneNumber = $_POST["customerPhoneNumber"];

    // Call the insertCustomer function
    if (insertCustomer($customerName, $customerID, $customerPhoneNumber)) {
        echo '<div class="alert alert-success" role="alert">Customer added successfully.</div>';
    } else {
        echo '<div class="alert alert-danger" role="alert">Error adding customer.</div>';
    }
}

include "view-addcustomer.php";
include "view-footer.php";
?>

<?php
// This function basically adds the customer 
require_once("util-db.php");
require_once("model-addcustomer.php");
$pageTitle = "Add Customer";
include "view-header.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $customerName = $_POST["customerName"];
    $customerID = $_POST["customerID"];
    $customerPhoneNumber = $_POST["customerPhoneNumber"];

   
    if (insertCustomer($customerName, $customerID, $customerPhoneNumber)) {
        echo '<div class="alert alert-success" role="alert">Customer added successfully.</div>';
    } else {
        echo '<div class="alert alert-danger" role="alert">Error adding customer.</div>';
    }
}

include "view-addcustomer.php";
include "view-footer.php";
?>

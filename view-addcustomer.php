<?php
// Include model-addcustomer.php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Handle form submission
    $customerName = $_POST["customerName"];
    $customerID = $_POST["customerID"];
    $customerPhoneNumber = $_POST["customerPhoneNumber"];

    $success = insertCustomer($customerName, $customerID, $customerPhoneNumber);

    if ($success) {
        // Redirect to Customers.php
        header("Location: Customers.php");
        exit();
    }
}
?>
<!-- Your HTML form for adding a customer -->
<!-- Make sure to adjust the form structure based on your requirements -->
<form method="post" action="">
    <!-- Your form fields here -->
    <button type="submit" class="btn btn-primary">Add Customer</button>
</form>

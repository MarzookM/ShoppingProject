<?php
require_once("util-db.php"); // Include your database utility file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Process the form data
    $customerName = $_POST["customerName"];
    $customerID = $_POST["customerID"];
    $customerPhoneNumber = $_POST["customerPhoneNumber"];

    // Insert data into the Customer table
    insertCustomer($customerName, $customerID, $customerPhoneNumber);

    // Redirect to another page or display a success message
    // header("Location: success.php"); // Uncomment and replace with your desired redirection
    // exit();
}
?>

<!-- Your header code goes here -->

<div class="container mt-5">
    <h1>Add Customer</h1>
    <form method="post" action="">
        <!-- Your form fields go here -->
        <div class="form-group">
            <label for="customerName">Customer Name:</label>
            <input type="text" class="form-control" id="customerName" name="customerName" required>
        </div>
        <div class="form-group">
            <label for="customerID">Customer ID:</label>
            <input type="text" class="form-control" id="customerID" name="customerID" required>
        </div>
        <div class="form-group">
            <label for="customerPhoneNumber">Customer Phone Number:</label>
            <input type="text" class="form-control" id="customerPhoneNumber" name="customerPhoneNumber" required>
        </div>
        <button type="submit" class="btn btn-primary">Add Customer</button>
    </form>
</div>

<!-- Your footer code goes here -->

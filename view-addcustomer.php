<!-- Your HTML form for adding a customer -->
<!-- Make sure to adjust the form structure based on your requirements -->
<form method="post" action="">
    <div class="mb-3">
        <label for="customerName" class="form-label">Customer Name</label>
        <input type="text" class="form-control" id="customerName" name="customerName" required>
    </div>
    <div class="mb-3">
        <label for="customerID" class="form-label">Customer ID</label>
        <input type="text" class="form-control" id="customerID" name="customerID" required>
    </div>
    <div class="mb-3">
        <label for="customerPhoneNumber" class="form-label">Customer Phone Number</label>
        <input type="text" class="form-control" id="customerPhoneNumber" name="customerPhoneNumber" required>
    </div>
    <button type="submit" class="btn btn-primary">Add Customer</button>
</form>

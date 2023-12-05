<h1>Cart Products</h1>
<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Quantity</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $totalPrice = 0; // Initialize total price
            while ($row = $CartProduct->fetch_assoc()) {
                $finalPrice = $row['ProductPrice'] * $row['ProductQuantity'];
                $totalPrice += $finalPrice; // Accumulate total price
            ?>
                <tr>
                    <td><?php echo $row['ProductName']; ?></td>
                    <td><?php echo $row['ProductQuantity']; ?></td>
                    <td><?php echo $finalPrice; ?></td>
                </tr>
            <?php
            }
            ?>
            <tr>
                <td colspan="2" style="text-align: right;"><strong>Total Price:</strong></td>
                <td><strong><?php echo $totalPrice; ?></strong></td>
            </tr>
        </tbody>
    </table>
</div>

<!-- Centered "Go to Check Out" button -->
<div class="d-flex justify-content-center mt-4">
    <a href="AddCustomer.php" class="btn btn-primary">Go to Check Out</a>
</div>

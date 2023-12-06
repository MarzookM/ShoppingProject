<div class="container mt-5">
    <h1 class="mb-4">Your Cart</h1>

    <div class="table-responsive">
        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Price</th>
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

    <!-- Centered "Go to Checkout" button -->
    <div class="text-center mt-4">
        <a href="AddCustomer.php" class="btn btn-primary btn-lg">Go to Checkout</a>
    </div>
</div>

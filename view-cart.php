<h1>Cart Products</h1>
<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Quantity</th>
                <th>Price</th> <!-- Added Price column -->
            </tr>
        </thead>
        <tbody>
            <?php
            while ($row = $CartProduct->fetch_assoc()) {
                $finalPrice = $row['ProductPrice'] * $row['ProductQuantity'];
            ?>
                <tr>
                    <td><?php echo $row['ProductName']; ?></td>
                    <td><?php echo $row['ProductQuantity']; ?></td>
                    <td><?php echo $finalPrice; ?></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>

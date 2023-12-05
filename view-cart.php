<h1>Cart Products</h1>
<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Quantity</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($row = $CartProduct->fetch_assoc()) {
            ?>
                <tr>
                    <td><?php echo $row['ProductName']; ?></td>
                    <td><?php echo $row['ProductQuantity']; ?></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>

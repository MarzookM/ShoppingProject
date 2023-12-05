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
            while ($CartProduct = $CartProduct->fetch_assoc()) {
            ?>
                <tr>
                    <td><?php echo $CartProduct['ProductName']; ?></td>
                    <td><?php echo $CartProduct['ProductQuantity']; ?></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>

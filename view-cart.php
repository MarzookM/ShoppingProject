<h1>Cart Products</h1>
<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Edit Quantity</th> <!-- New column for Edit button -->
            </tr>
        </thead>
        <tbody>
            <?php
            $totalPrice = 0;
            $CartProduct->data_seek(0); // Reset pointer to the beginning of the result set
            while ($row = $CartProduct->fetch_assoc()) {
                $finalPrice = $row['ProductPrice'] * $row['ProductQuantity'];
                $totalPrice += $finalPrice;
            ?>
                <tr>
                    <td><?php echo $row['ProductName']; ?></td>
                    <td><?php echo $row['ProductQuantity']; ?></td>
                    <td><?php echo $finalPrice; ?></td>
                    <td>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editQuantityModal<?php echo $row['ProductID']; ?>">
                            Edit Quantity
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="editQuantityModal<?php echo $row['ProductID']; ?>" tabindex="-1" aria-labelledby="editQuantityModalLabel<?php echo $row['ProductID']; ?>" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="editQuantityModalLabel<?php echo $row['ProductID']; ?>">Edit Quantity for <?php echo $row['ProductName']; ?></h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <!-- Edit form -->
                                        <form method="post" action="">
                                            <label for="editQuantity">New Quantity:</label>
                                            <input type="number" name="editQuantity" id="editQuantity" value="<?php echo $row['ProductQuantity']; ?>" required>
                                            <input type="hidden" name="productId" value="<?php echo $row['ProductID']; ?>">
                                            <button type="submit" class="btn btn-primary">Save</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            <?php
            }
            ?>
            <tr>
                <td colspan="3" style="text-align: right;"><strong>Total Price:</strong></td>
                <td><strong><?php echo $totalPrice; ?></strong></td>
            </tr>
        </tbody>
    </table>
</div>

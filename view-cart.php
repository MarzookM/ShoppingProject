<div class="row">
    <div class="col">
        <h1>Cart Products</h1>
    </div>
</div>
<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Quantity</th>
                <th>Price</th>
                <th></th>
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
                    <td>
                        <!-- Add the edit form for cart product quantity here -->
                        <?php include "view-cart-editform.php"; ?>
                    </td>
                    <td><?php echo $finalPrice; ?></td>
                    <td>
                        <form method="post" action="">
                            <input type="hidden" name="cid" value="<?php echo $row['ProductID']; ?>">
                            <input type="hidden" name="actionType" value="Delete">
                            <button type="submit" class="btn btn-primary" onclick="return confirm('Are you sure?');">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
                                    <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
                                </svg>
                            </button>
                        </form>
                    </td>
                </tr>
                <?php
            }
            ?>
            <tr>
                <td colspan="3" style="text-align: right;"><strong>Total Price:</strong></td>
                <td><strong><?php echo $totalPrice; ?></strong></td>
                <td></td>
            </tr>
        </tbody>
    </table>
</div>

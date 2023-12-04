<h1>Products</h1>
<div class="table-responsive">
    <table class="table">
        <tbody>
            <?php
            // Assuming $Product is your fetched result from the control page
            while ($Products = $Product->fetch_assoc()) {
            ?>
                <tr>
                    <td>
                        <div class="card">
                            <?php echo '<img src="data:image;base64,' . base64_encode($Products['ProductImage']) . '" alt="Product Image" style="width:100px; height:100px;">'; ?>
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $Products['ProductName']; ?></h5>
                                <p class="card-text">Price: $<?php echo $Products['ProductPrice']; ?></p>
                                <form action="addToCart.php" method="POST">
                                    <input type="hidden" name="productId" value="<?php echo $Products['ProductID']; ?>">
                                    <label for="quantity">Quantity:</label>
                                    <select class="form-control" name="quantity">
                                        <?php
                                        // Display dropdown options based on the current quantity
                                        for ($i = 1; $i <= $Products['ProductQuantity']; $i++) {
                                            echo "<option value=\"$i\">$i</option>";
                                        }
                                        ?>
                                    </select>
                                    <button type="submit" class="btn btn-primary">Add to Cart</button>
                                </form>
                            </div>
                        </div>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>

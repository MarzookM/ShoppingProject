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
                                <div class="form-group">
                                    <label for="quantity">Quantity:</label>
                                    <select class="form-control" name="quantity">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <!-- Add more options as needed -->
                                    </select>
                                </div>
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

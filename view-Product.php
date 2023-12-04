<h1>Products</h1>
<div id="productCarousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <?php
        // Assuming $Product is your fetched result from the control page
        $firstCard = true;
        while ($Products = $Product->fetch_assoc()) {
        ?>
            <div class="carousel-item <?php echo ($firstCard) ? 'active' : ''; ?>">
                <div class="card">
                    <?php echo '<img src="data:image;base64,' . base64_encode($Products['ProductImage']) . '" alt="Product Image" class="card-img-top">'; ?>
                    <div class="card-body" style="height: 200px;"> <!-- Adjust the height as needed -->
                        <h5 class="card-title"><?php echo $Products['ProductName']; ?></h5>
                        <p class="card-text">Price: $<?php echo $Products['ProductPrice']; ?></p>
                        <form action="addToCart.php" method="POST">
                            <input type="hidden" name="productId" value="<?php echo $Products['ProductID']; ?>">
                            <label for="quantity">Quantity:</label>
                            <select class="form-control" name="quantity">
                                <?php
                                // Display dropdown options from 0 to 10
                                for ($i = 0; $i <= 10; $i++) {
                                    echo "<option value=\"$i\">$i</option>";
                                }
                                ?>
                            </select>
                            <button type="submit" class="btn btn-primary">Add to Cart</button>
                        </form>
                    </div>
                </div>
            </div>
        <?php
            $firstCard = false;
        }
        ?>
    </div>
    <a class="carousel-control-prev" href="#productCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#productCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

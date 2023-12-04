<h1>Products</h1>
<style>
    .row {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
    }

    .col-md-4 {
        flex: 0 0 30%; /* Adjust the width as needed */
        margin: 10px; /* Add margin between cards */
    }

    .card {
        width: 100%;
    }

    .card-img-top {
        width: 100%;
        height: 150px; /* Set your preferred height */
        object-fit: cover;
    }

    .card-body {
        height: 100px; /* Set your preferred height */
    }
</style>
<div class="row">
    <?php
    // Assuming $Product is your fetched result from the control page
    while ($Products = $Product->fetch_assoc()) {
    ?>
        <div class="col-md-4">
            <div class="card">
                <?php echo '<img src="data:image;base64,' . base64_encode($Products['ProductImage']) . '" alt="Product Image" class="card-img-top">'; ?>
                <div class="card-body">
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
    }
    ?>
</div>

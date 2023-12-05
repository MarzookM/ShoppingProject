<h1>ProductBreads</h1>
<style>
    .card-container {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        justify-content: space-around; /* or justify-content: space-between; */
    }

    .card {
        width: 300px; /* Adjust width as needed */
    }
</style>
<div class="card-container">
    <?php
    // Assuming $ProductBread is your fetched result from the control page
    while ($ProductBreads = $ProductBread->fetch_assoc()) {
    ?>
        <div class="card">
            <?php echo '<img src="data:image;base64,' . base64_encode($ProductBreads['ProductBreadImage']) . '" alt="ProductBread Image" class="card-img-top">'; ?>
            <div class="card-body">
                <h5 class="card-title"><?php echo $ProductBreads['ProductBreadName']; ?></h5>
                <p class="card-text">Price: $<?php echo $ProductBreads['ProductBreadPrice']; ?></p>
                <form action="addToCartBread.php" method="POST">
                    <input type="hidden" name="ProductBreadId" value="<?php echo $ProductBreads['ProductBreadID']; ?>">
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
    <?php
    }
    ?>
</div>

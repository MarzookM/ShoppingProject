<h1>ProductSpices</h1>
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
    // Assuming $ProductSpice is your fetched result from the control page
    while ($ProductSpices = $ProductSpice->fetch_assoc()) {
    ?>
        <div class="card">
            <?php echo '<img src="data:image;base64,' . base64_encode($ProductSpices['ProductSpiceImage']) . '" alt="ProductSpice Image" class="card-img-top">'; ?>
            <div class="card-body">
                <h5 class="card-title"><?php echo $ProductSpices['ProductSpiceName']; ?></h5>
                <p class="card-text">Price: $<?php echo $ProductSpices['ProductSpicePrice']; ?></p>
                <form action="addToCartSpice.php" method="POST">
                    <input type="hidden" name="ProductSpice" value="<?php echo $ProductSpices['ProductSpiceID']; ?>">
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

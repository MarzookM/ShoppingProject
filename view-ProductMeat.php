<h1>ProductMeats</h1>
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
    // Assuming $ProductMeat is your fetched result from the control page
    while ($ProductMeats = $ProductMeat->fetch_assoc()) {
    ?>
        <div class="card">
            <?php echo '<img src="data:image;base64,' . base64_encode($ProductMeats['ProductMeatImage']) . '" alt="ProductMeat Image" class="card-img-top">'; ?>
            <div class="card-body">
                <h5 class="card-title"><?php echo $ProductMeats['ProductMeatName']; ?></h5>
                <p class="card-text">Price: $<?php echo $ProductMeats['ProductMeatPrice']; ?></p>
                <form action="addToCart.php" method="POST">
                    <input type="hidden" name="ProductMeat" value="<?php echo $ProductMeats['ProductMeat']; ?>">
                    <label for="quantitiy">quantity:</label>
                    <select class="form-control" name="quantitiy">
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

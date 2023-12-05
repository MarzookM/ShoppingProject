<h1>ProductDrinks</h1>
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
    // Assuming $ProductDrink is your fetched result from the control page
    while ($ProductDrinks = $ProductDrink->fetch_assoc()) {
    ?>
        <div class="card">
            <?php echo '<img src="data:image;base64,' . base64_encode($ProductDrinks['ProductDrinkImage']) . '" alt="ProductDrink Image" class="card-img-top">'; ?>
            <div class="card-body">
                <h5 class="card-title"><?php echo $ProductDrinks['ProductDrinkName']; ?></h5>
                <p class="card-text">Price: $<?php echo $ProductDrinks['ProductDrinkPrice']; ?></p>
                <form action="addToCart.php" method="POST">
                    <input type="hidden" name="ProductDrink" value="<?php echo $ProductDrinks['ProductDrink']; ?>">
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

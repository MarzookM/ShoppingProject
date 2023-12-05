
    <h1>Your Shopping Cart</h1>

    <?php
    foreach ($cartItems as $productType => $items) {
        echo "<h2>$productType</h2>";

        if (mysqli_num_rows($items) > 0) {
            echo "<ul>";
            while ($item = mysqli_fetch_assoc($items)) {
                echo "<li>{$item["${productType}Name"]} - Quantity: {$item["${productType}Quantity"]}</li>";
            }
            echo "</ul>";
        } else {
            echo "<p>No items in your $productType cart.</p>";
        }
    }
    ?>




<h1>Shopping Cart</h1>

    <?php
    function displayTable($data, $category)
    {
        if (empty($data)) {
            echo "<p>Your $category cart is empty.</p>";
        } else {
            ?>
            <h2><?php echo $category; ?></h2>
            <table border="1">
                <thead>
                    <tr>
                        <th>Product Name</th>
                        <th>Quantity</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data as $item): ?>
                        <tr>
                            <td><?php echo $item['ProductName']; ?></td>
                            <td><?php echo $item['Quantity']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <?php
        }
    }

    displayTable($productBreadData, 'ProductBread');
    displayTable($productProduceData, 'ProductProduce');
    displayTable($productDrinkData, 'ProductDrink');
    displayTable($productMeatData, 'ProductMeat');
    displayTable($productSpiceData, 'ProductSpice');
    ?>

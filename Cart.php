<?php
include("util-db.php");
include("model-Cart.php");

// Get cart items for each product type
$productTypes = ["ProductBread", "ProductProduce", "ProductDrink", "ProductMeat", "ProductSpice"];
$cartItems = [];

foreach ($productTypes as $productType) {
    $cartItems[$productType] = getCartItems($productType);
}

// Include the view file
include("view-Cart.php");
?>

<?php
include("model-cart.php");

// Fetch cart items for each product type
$breadCart = getCartItems("ProductBread");
$spiceCart = getCartItems("ProductSpice");
$drinkCart = getCartItems("ProductDrink");
$meatCart = getCartItems("ProductMeat");
$produceCart = getCartItems("ProductProduce");

// Include the view to display the cart
include("view-cart.php");
?>

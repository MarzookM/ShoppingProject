<?php
require_once("util-db.php");
require_once("model-cart.php");
$pageTitle = "Shopping Cart";
include "header.php";

$productBreadData = getCartData("ProductBread", "ProductBreadCart", "ProductBreadQuantity");
$productProduceData = getCartData("ProductProduce", "ProductProduceCart", "ProductProduceQuantity");
$productDrinkData = getCartData("ProductDrink", "ProductDrinkCart", "ProductDrinkQuantity");
$productMeatData = getCartData("ProductMeat", "ProductMeatCart", "ProductMeatQuantity");
$productSpiceData = getCartData("ProductSpice", "ProductSpiceCart", "ProductSpiceQuantity");

include "view-cart.php";
include "footer.php";
?>

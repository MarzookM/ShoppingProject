<?php
require_once("util-db.php");
require_once("model-cart.php");
$pageTitle = "Customer";
include "view-header.php";
$CartProduct = selectCartProducts();
include "view-cart.php";
include "view-footer.php";
?>


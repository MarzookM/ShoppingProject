<?php
require_once("util-db.php");
require_once("model-ProductDrink.php");
$pageTitle = "Drinks";
include "view-header.php";
$ProductDrink = selectProductDrink();
include "view-ProductDrink.php";
include "view-footer.php";
?>

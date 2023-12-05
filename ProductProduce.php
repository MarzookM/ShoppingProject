<?php
require_once("util-db.php");
require_once("model-ProductProduce.php");
$pageTitle = "Drinks";
include "view-header.php";
$ProductProduce = selectProductProduce();
include "view-ProductProduce.php";
include "view-footer.php";
?>

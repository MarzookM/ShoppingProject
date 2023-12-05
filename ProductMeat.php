<?php
require_once("util-db.php");
require_once("model-ProductMeat.php");
$pageTitle = "Meats";
include "view-header.php";
$ProductMeat = selectProductMeat();
include "view-ProductMeat.php";
include "view-footer.php";
?>

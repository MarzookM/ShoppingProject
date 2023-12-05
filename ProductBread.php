<?php
require_once("util-db.php");
require_once("model-Product.php");
$pageTitle = "Grains";
include "view-header.php";
$ProductBread = selectProductBread();
include "view-Product.php";
include "view-footer.php";
?>

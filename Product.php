<?php

require_once("model-Product.php");
$pageTitle = "Customer";
include "view-header.php";
$Product = selectProduct();
include "view-Product.php";
include "view-footer.php";
?>

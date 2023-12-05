<?php
require_once("util-db.php");
require_once("model-ProductSpice.php");
$pageTitle = "Customer";
include "view-header.php";
$ProductSpice = selectProductSpice();
include "view-ProductSpice.php";
include "view-footer.php";
?>

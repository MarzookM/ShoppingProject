<?php
require_once("util-db.php");
require_once("model-cart.php"); // going to create 
$pageTitle = "Customer";
include "view-header.php";
$Cart = selectCart();
include "view-cart.php"; //going to create
include "view-footer.php";
?> 

<?php
require_once("util-db.php");
require_once("model-Cart.php");
$pageTitle = "Cart";
include "view-header.php";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
      if(insertCart($_POST['cNumber'], $_POST['cDesc'])){
        echo '<div class="alert alert-success" role="alert">Cart Added.</div>';
      }else{
        echo '<div class="alert alert-danger" role="alert">Error.</div>';
      }
      break;
    case "Edit":
      if(updateCart($_POST['cNumber'], $_POST['cDesc'],$_POST['cid'])){
        echo '<div class="alert alert-success" role="alert">Cart edited.</div>';
      }else{
        echo '<div class="alert alert-danger" role="alert">Error.</div>';
      }
      break;
    case "Delete":
     if(deleteCart($_POST['cid'])){
        echo '<div class="alert alert-success" role="alert">Course Deleted.</div>';
      }else{
        echo '<div class="alert alert-danger" role="alert">Error.</div>';
      }
      break;
    
  }
}

$Cart = selectCart();
include "view-Cart.php";
include "view-footer.php";
?>

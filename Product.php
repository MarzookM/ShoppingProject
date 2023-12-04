<?php
require_once("util-db.php");
require_once("model-Product.php");
$pageTitle = "Customer";
include "view-header.php";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
      if(insertProduct($_POST['cNumber'], $_POST['cDesc'])){
        echo '<div class="alert alert-success" role="alert">Product Added.</div>';
      }else{
        echo '<div class="alert alert-danger" role="alert">Error.</div>';
      }
      break;
    case "Edit":
      if(updateProduct($_POST['cDesc'], $_POST['cid'])){
        echo '<div class="alert alert-success" role="alert">Product edited.</div>';
      }else{
        echo '<div class="alert alert-danger" role="alert">Error.</div>';
      }
      break;
    case "Delete":
     if(deleteProduct($_POST['cid'])){
        echo '<div class="alert alert-success" role="alert">Course Deleted.</div>';
      }else{
        echo '<div class="alert alert-danger" role="alert">Error.</div>';
      }
      break;
    
  }
}

$Product = selectProduct();
include "view-Product.php";
include "view-footer.php";
?>

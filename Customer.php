<?php
require_once("util-db.php");
require_once("model-Customer.php"); // going to create 
$pageTitle = "Customer";
include "view-header.php";


if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
      if(insertCustomer($_POST['cNumber'], $_POST['cDesc'])){
        echo '<div class="alert alert-success" role="alert">Customer Added.</div>';
      }else{
        echo '<div class="alert alert-danger" role="alert">Error.</div>';
      }
      break;
    case "Edit":
      if(updateCustomer($_POST['cNumber'], $_POST['cDesc'],$_POST['cid'])){
        echo '<div class="alert alert-success" role="alert">Customer edited.</div>';
      }else{
        echo '<div class="alert alert-danger" role="alert">Error.</div>';
      }
      break;
    case "Delete":
     if(deleteCustomer($_POST['cid'])){
        echo '<div class="alert alert-success" role="alert">Customer Deleted.</div>';
      }else{
        echo '<div class="alert alert-danger" role="alert">Error.</div>';
      }
      break;
    
  }
}
$Customer = selectCustomer();
include "view-Customer.php"; //going to create
include "view-footer.php";
?> 

<?php
require_once("util-db.php");
require_once("model-cart.php");
$pageTitle = "Cart";
include "view-header.php";

if (isset($_POST['actionType'])) {
    switch ($_POST['actionType']) {
        case "Add":
            // Add your logic for adding to cart here
            break;
        case "Edit":
            if (updateCartProductQuantity($_POST['quantity'], $_POST['productId'])) {
                echo '<div class="alert alert-success" role="alert">Product quantity updated.</div>';
            } else {
                echo '<div class="alert alert-danger" role="alert">Error updating product quantity.</div>';
            }
            break;
        case "Delete":
            if (deleteCartProduct($_POST['productId'])) {
                echo '<div class="alert alert-success" role="alert">Product removed from cart.</div>';
            } else {
                echo '<div class="alert alert-danger" role="alert">Error removing product from cart.</div>';
            }
            break;
    }
}

$cartProducts = getCartProducts();
include "view-cart.php"; // Assuming this is where you display the cart
include "view-footer.php";
?>

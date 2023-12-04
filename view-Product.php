<h1>Products</h1>
<div class="table-responsive">
    <table class="table">
        <tbody>
            <?php
            // Assuming $Product is your fetched result from the control page
            while ($Products = $Product->fetch_assoc()) {
            ?>
                <tr>
                    <td>
                        <div class="card">
                            <?php echo '<img src="data:image;base64,' . base64_encode($Products['ProductImage']) . '" alt="Product Image" style="width:100px; height:100px;">'; ?>
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $Products['ProductName']; ?></h5>
                                <p class="card-text">Price: $<?php echo $Products['ProductPrice']; ?></p>
                                <form action="" method="POST">
                                    <input type="hidden" name="productId" value="<?php echo $Products['ProductID']; ?>">
                                    <input type="hidden" name="quantity" value="1"> <!-- Assuming default quantity is 1 -->
                                    <button type="submit" class="btn btn-primary">Add to Cart</button>
                                </form>
                            </div>
                        </div>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>

<?php
// Include addToCart.php logic here
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['productId'], $_POST['quantity'])) {
    include("addToCart.php");

    $productId = $_POST['productId'];
    $quantityToAdd = $_POST['quantity'];

    // Fetch the current quantity from the database
    $currentQuantity = getCurrentQuantity(get_db_connection(), $productId);

    if ($currentQuantity !== false) {
        // Calculate the new quantity
        $newQuantity = $currentQuantity + $quantityToAdd;

        // Update the quantity in the database
        updateProductQuantity(get_db_connection(), $productId, $newQuantity);

        // Display success message
        echo '<div class="alert alert-success" role="alert">
                Added to Cart successfully!
            </div>';
    } else {
        // Display error message
        echo '<div class="alert alert-danger" role="alert">
                Product not found or an error occurred.
            </div>';
    }
}
?>

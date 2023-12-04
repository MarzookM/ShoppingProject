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
                                    <label for="quantity">Quantity:</label>
                                    <select class="form-control" name="quantity">
                                        <?php
                                        // Display dropdown options from 0 to 10
                                        for ($i = 0; $i <= 10; $i++) {
                                            echo "<option value=\"$i\">$i</option>";
                                        }
                                        ?>
                                    </select>
                                    <button type="submit" class="btn btn-primary" name="addToCart">Add to Cart</button>
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
// Include the file with your database connection logic
include("util-db.php");

// Function to fetch the current quantity of a product
function getCurrentQuantity($con, $productId)
{
    $fetchQuery = "SELECT ProductQuantity FROM Product WHERE ProductID = $productId";
    $result = mysqli_query($con, $fetchQuery);

    if (!$result) {
        die("Query failed: " . mysqli_error($con));
    }

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        return $row['ProductQuantity'];
    } else {
        return false;
    }
}

// Function to update the quantity of a product
function updateProductQuantity($con, $productId, $newQuantity)
{
    $updateQuery = "UPDATE Product SET ProductQuantity = $newQuantity WHERE ProductID = $productId";
    mysqli_query($con, $updateQuery);
}

// Check if the request method is POST and the "addToCart" button is clicked
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['addToCart'])) {
    $productId = $_POST['productId'];
    $quantityToAdd = $_POST['quantity'];

    // Fetch the current quantity from the database
    $currentQuantity = getCurrentQuantity($con, $productId);

    if ($currentQuantity !== false) {
        // Calculate the new quantity
        $newQuantity = $currentQuantity + $quantityToAdd;

        // Update the quantity in the database
        updateProductQuantity($con, $productId, $newQuantity);

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

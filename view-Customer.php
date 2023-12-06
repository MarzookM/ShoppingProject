<div class="container mt-5">
    <div class="row mb-3">
        <div class="col">
            <h1>Customer</h1>
        </div>
        <div class="col-auto">
            <?php include "view-Customer-newform.php"; ?>
        </div>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Phone Number</th>
                    <th>Edit</th>
                    <th>Delete</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php while ($Customers = $Customer->fetch_assoc()) { ?>
                    <tr>
                        <td><?php echo $Customers['CustomerID']; ?></td>
                        <td><?php echo $Customers['CustomerName']; ?></td>
                        <td><?php echo $Customers['CustomerPhoneNumber']; ?></td>
                        <td>
                            <?php include "view-Customer-editform.php"; ?>
                        </td>
                        <td>
                            <form method="post" action="">
                                <input type="hidden" name="cid" value="<?php echo $Customers['CustomerID']; ?>">
                                <input type="hidden" name="actionType" value="Delete">
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?');">
                                    <i class="bi bi-trash"></i> Delete
                                </button>
                            </form>
                        </td>
                        <td></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <form action="order.php" method="POST">
        <div class="order-button-container">
            <button class="btn btn-success" onclick="location.href='order.php'">Order</button>
        </div>
    </form>
</div>

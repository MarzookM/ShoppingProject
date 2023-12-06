<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Page</title>
    <style>
        body {
            background-color: #FAF9F6; 

        }

        .card-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: space-around;
        }

        .card {
            width: 300px;
            background-color: Grey; 
            color: Black;
            text-align: center;
            border-radius: 10px;
            overflow: hidden;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 0 20px rgba(255, 255, 255, 0.5);
        }

        .card-img {
            width: 100%;
            height: auto;
        }

        .card-body {
            padding: 15px;
        }

        .card-title {
            font-size: 1.5rem;
            margin-bottom: 10px;
        }

        .card-text {
            margin-bottom: 15px;
        }

        .quantity-select {
            margin-bottom: 15px;
        }

        .add-to-cart-btn {
            background-color: Green; 
            color: white;
            border: none;
            padding: 8px 15px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .add-to-cart-btn:hover {
            background-color: #218838; 
        }
    </style>
</head>
<body>
    <div class="card-container">
        <?php
        while ($Products = $Product->fetch_assoc()) {
        ?>
            <div class="card">
                <?php echo '<img src="data:image;base64,' . base64_encode($Products['ProductImage']) . '" alt="Product Image" class="card-img">'; ?>
                <div class="card-body">
                    <h5 class="card-title"><?php echo $Products['ProductName']; ?></h5>
                    <p class="card-text">Price: $<?php echo $Products['ProductPrice']; ?></p>
                    <form action="addToCart.php" method="POST">
                        <input type="hidden" name="productId" value="<?php echo $Products['ProductID']; ?>">
                        <div class="quantity-select">
                            <label for="quantity">Quantity:</label>
                            <select class="form-control" name="quantity">
                                <?php
                                for ($i = 0; $i <= 10; $i++) {
                                    echo "<option value=\"$i\">$i</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <button type="submit" class="add-to-cart-btn">Add to Cart</button>
                    </form>
                </div>
            </div>
        <?php
        }
        ?>
    </div>

</body>
</html>

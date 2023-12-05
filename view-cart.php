<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Cart</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .cart {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ccc;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<div class="cart">
    <h2>View Cart</h2>

    <!-- Display Product Bread Cart -->
    <h3>Product Bread</h3>
    <table>
        <tr>
            <th>Name</th>
            <th>Quantity</th>
        </tr>
        <?php
        while ($row = mysqli_fetch_assoc($breadCart)) {
            echo "<tr><td>{$row['ProductBreadName']}</td><td>{$row['ProductBreadQuantity']}</td></tr>";
        }
        ?>
    </table>

    <!-- Add similar sections for other product types -->

</div>

</body>
</html>

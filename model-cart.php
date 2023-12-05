<?php


function getCartData($table, $cartColumn, $quantityColumn)
{
    $conn = get_db_connection();

    $query = "SELECT
        $table.$tableName AS ProductName,
        $table.$quantityColumn AS Quantity
    FROM Store
    JOIN $table ON Store.${table}ID = ${table}.${table}ID
    WHERE $table.$cartColumn = 'y' AND $table.$quantityColumn > 0";

    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("Query failed: " . mysqli_error($conn));
    }

    $data = mysqli_fetch_all($result, MYSQLI_ASSOC);

    mysqli_close($conn);

    return $data;
}

$productBreadData = getCartData("ProductBread", "ProductBreadCart", "ProductBreadQuantity");
$productProduceData = getCartData("ProductProduce", "ProductProduceCart", "ProductProduceQuantity");
$productDrinkData = getCartData("ProductDrink", "ProductDrinkCart", "ProductDrinkQuantity");
$productMeatData = getCartData("ProductMeat", "ProductMeatCart", "ProductMeatQuantity");
$productSpiceData = getCartData("ProductSpice", "ProductSpiceCart", "ProductSpiceQuantity");

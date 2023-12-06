<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=$pageTitle?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            margin: 0;
            padding: 0;
        }

        .big-nav-bar {
            background-color: darkblue;
            color: yellow;
            text-align: center;
            margin-left: 55px;
            padding: 30px 15px;
            width: 100%;
        }

        .small-nav-bar {
            background-color: grey;
            padding: 15px 0;
            text-align: center;
        }

        .big-nav-bar span {
            font-size: 50px;
            font-weight: bold;
            margin-right: auto;
            display: inline-block;
        }

        .big-nav-bar a,
        .small-nav-bar a {
            color: white;
            text-decoration: none;
            margin-right: 20px;
            font-size: 18px;
            transition: all 0.3s ease;
        }

        .big-nav-bar a.cart-icon {
            float: right;
        }

        .big-nav-bar a:hover,
        .small-nav-bar a:hover {
            transform: scale(1.1);
        }

        .big-nav-bar a[href="cart.php"] {
            font-size: 24px;
        }

        .small-nav-bar a {
            display: inline-block;
            margin: 0 10px;
        }

        .small-nav-bar a:hover {
            transform: scale(1.1);
        }
    </style>
</head>
<body>

<div class="big-nav-bar">
    <span>MIS-MART</span>
    <a href="cart.php" class="cart-icon">Cart</a>
</div>

<div class="small-nav-bar">
    <a href="index.php">Home</a>
    <a href="Product.php">Product</a>
    <a href="about.php">About Us</a>
</div>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <!-- Your navigation content goes here -->
</nav>

</body>
</html>

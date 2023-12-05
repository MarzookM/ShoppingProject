<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=$pageTitle?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        .big-nav-bar {
            background-color: darkblue;
            color: yellow;
            text-align: center;
            padding: 30px 0;
        }

        .small-nav-bar {
            background-color: grey;
            padding: 10px 0; /* Adjusted padding */
            text-align: center;
        }

        .small-nav-bar a {
            display: inline-block;
            margin: 0 10px; /* Adjusted margin to create space between icons */
            text-align: center;
            text-decoration: none;
            position: relative;
            padding: 10px; /* Added padding */
        }

        .small-nav-bar a:hover {
            transform: scale(1.1);
        }

        .small-nav-bar a::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            border: 2px solid white; /* Added border around each icon */
            border-radius: 8px; /* Added border radius for a rounded look */
            box-sizing: border-box;
        }
    </style>
</head>
<body>

<!-- Big Nav Bar -->
<div class="big-nav-bar">
    <span style="font-size: 50px; font-weight: bold;">MIS-MART</span>
    <a href="cart.php" style="float: right;">Cart</a>
</div>

<!-- Small Nav Bar -->
<div class="small-nav-bar">
    <a href="index.php">Home</a>
    <a href="Product.php">Product</a>
    <a href="about.php">About Us</a>
</div>

<!-- Rest of your content goes here -->

<!-- Your existing navigation code -->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <!-- ... Your existing code ... -->
</nav>

<!-- Bootstrap JS and other scripts go here -->

</body>
</html>

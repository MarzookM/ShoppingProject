<!doctype html>
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
      padding: 15px 0;
    }

    .small-nav-bar {
      background-color: grey;
      padding: 10px 0;
    }

    .big-nav-bar a,
    .small-nav-bar a {
      color: white;
      text-decoration: none;
      margin-right: 20px;
      font-size: 18px;
    }

    .big-nav-bar a:hover,
    .small-nav-bar a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <div class="container">
    <!-- Big Nav Bar -->
    <div class="big-nav-bar">
      <span style="font-size: 36px; font-weight: bold;">MIS-MART</span>
      <a href="cart.php" style="float: right; font-size: 18px;">Cart</a>
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

  </div>

  <!-- Bootstrap JS and other scripts go here -->

</body>
</html>

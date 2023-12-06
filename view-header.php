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
            padding: 25px 0;
            text-align: center;
        }
        .big-nav-bar a,
        .small-nav-bar a {
            color: white;
            text-decoration: none;
            margin-right: 20px;
            font-size: 18px;
            transition: all 0.3s ease; 
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
            margin: 0 70px; 
        }

        .small-nav-bar a:hover {
            transform: scale(1.1); 
        }
    </style>
</head>
<body>


<div class="big-nav-bar">
    <span style="font-size: 50px; font-weight: bold; left-margin: 15px;">MIS-MART</span>
    <a href="cart.php" style="float: right;">Cart</a>
</div>


<div class="small-nav-bar">
    <a href="index.php">Home</a>
    <a href="Product.php">Product</a>
    <a href="about.php">About Us</a>
</div>




<nav class="navbar navbar-expand-lg bg-body-tertiary">
 
</nav>



</body>
</html>

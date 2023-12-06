<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        body {
            background-color: #4CC9F0; 

        form {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
        }

        h1 {
            text-align: center;
            color: #333;
        }
    </style>
</head>

<body>

    <div class="container">
        

       
        <form method="post" action="">
            <div class="mb-3">
                <label for="customerName" class="form-label">Customer Name</label>
                <input type="text" class="form-control" id="customerName" name="customerName" required>
            </div>
            <div class="mb-3">
                <label for="customerID" class="form-label">Customer ID</label>
                <input type="text" class="form-control" id="customerID" name="customerID" required>
            </div>
            <div class="mb-3">
                <label for="customerPhoneNumber" class="form-label">Customer Phone Number</label>
                <input type="text" class="form-control" id="customerPhoneNumber" name="customerPhoneNumber" required>
            </div>
            <button type="submit" class="btn btn-primary">Add Customer</button>
            <a href="Customer.php" class="btn btn-success" style="float: right;">Next</a>
        </form>
    </div>

  
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>

</html>

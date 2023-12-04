<h1>Product</h1>
<div class = "table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Price</th>
      <th>Quantity</th>
      <th>Cart</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
<?php                 //from control page
while($Products = $Product ->fetch_assoc())
  {
?>
<tr> 
  <td><?php echo $Products['ProductID']; ?></td>
  <td><?php echo $Products['ProductName']; ?></td>  
  <td><?php echo $Products['ProductPrice']; ?></td>
  <td><?php echo $Products['ProductQuantity']; ?></td>  
  <td><?php echo $Products['ProductCart']; ?></td>
 
</tr>
<?php
    
  }
?>
      
    </tbody>


      
    </thead>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Listing</title>
</head>
<body>
<a href="shoppingcart.php">View Cart</a>
<h1>Product</h1>
<table witdh="400" border="0" cellpadding="5" cellspacing="1" bgcolor="#CCCCCC">
  <tr>
    <td>Description</td>
    <td>Size</td>
    <td>Price</td>
  </tr>
<?php
  $product = array("id"=>"1", "description"=>"Coke Can", "size"=>"330ml", "price"=>"16.00");

  foreach ($product as $key => $value) {
    echo "$key = $value <br />\n";
  }


  $products = array(
    array("id"=>"10", "description"=>"Coke Can", "size"=>"330ml", "price"=>"16.00"),
    array("id"=>"15", "description"=>"Coke 8oz", "size"=>"237ml", "price"=>"8.00"),
    array("id"=>"20", "description"=>"Diet Coke Can", "size"=>"330ml", "price"=>"18.00"),
    array("id"=>"25", "description"=>"Diet Coke 8oz", "size"=>"237ml", "price"=>"9.00")
  );

  $size = sizeof($products);

  for($i = 0; $i < $size; $i++) {
    echo "<tr bgcolor=\"#FFFFFF\">";
    echo "<td>".$products[$i]['description']."</td>";
    echo "<td>".$products[$i]['size']."</td>";
    echo "<td>$".$products[$i]['price']."</td>";
    echo "<td><a href=\"addtocart.php?id=".$products[$i]['id']."\">Add to Cart</a></td>";
    echo "</tr>";

  }
?>
</table>

    
</body>
</html>
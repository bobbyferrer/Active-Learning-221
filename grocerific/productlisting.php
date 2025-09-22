<?php
  require_once('grocerificdb.inc.php');
  $products = getProducts();
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grocerific</title>
</head>
<body>

<a href="shoppingcart.php">View Cart</a><br>
<h1>Products</h1>
<table width="400" border="0" cellspacing="0" cellpadding="3">
<tr>
    <td>Description</td>
    <td>Size</td>
    <td>Price</td>
</tr>
<?php
  $size = sizeof($products);
for($i = 0; $i < $size; $i++) {
 if($i % 2 == 0) {
     $color = "#FFFFFF";
 } else {
     $color = "#E0E0E0";
 }

 echo "<tr bgcolor=\"$color\">";
 echo "<td>" . $products[$i]['description'] . "</td>";
 echo "<td>" . $products[$i]['size'] . "</td>";
 echo "<td>" . $products[$i]['price'] . "</td>";
 echo "</tr>";
}  
?>
</table>
    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grocerific</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f4f4f4;
        }
        h1 {
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
        a {
            color: #3498db;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
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


//   $products = array(
//     array("id"=>"10", "description"=>"Coke Can", "size"=>"330ml", "price"=>"16.00"),
//     array("id"=>"15", "description"=>"Coke 8oz", "size"=>"237ml", "price"=>"8.00"),
//     array("id"=>"20", "description"=>"Diet Coke Can", "size"=>"330ml", "price"=>"18.00"),
//     array("id"=>"25", "description"=>"Diet Coke 8oz", "size"=>"237ml", "price"=>"9.00")
//   );

  $products = [
    ["id"=>10, "description"=>"Coke Can", "size"=>"330ml", "price"=>"16.00"],
    ['id'=>15, 'description'=>'Coke 8oz', 'size'=>'237ml', 'price'=>8.00],
    ['id'=>20, 'description'=>'Diet Coke Can', 'size'=>'330ml', 'price'=>18.00],
    ['id'=>25, 'description'=>'Diet Coke 8oz', 'size'=>'237ml', 'price'=>9.00]
  ];

  foreach ($products as $product) {
    echo '<tr>';
    echo "<td>{$product['description']}</td>";
    echo "<td>{$product['size']}</td>";
    echo "<td>{$product['price']}</td>";
    echo '<tr>';
  }

  
?>
</table>


    
</body>
</html>
<?php


require_once('grocerificdb.inc.php');

$products = getProductByID(15);

echo $products['price'] . "<br>"; // 8
echo $products['description'] . "<br>"; // Coke 8oz 
$products = getProductByID(40);
if($products === FALSE) {
    echo "Product with ID 40 nit found";
}


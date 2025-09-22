<?php

function getProductByID($id) {
    $products = getProducts();

    $size = sizeof($products);

    for($i = 0; $i < $size; $i++) {
       $product = $products[$i];
       if($product['id'] == $id) {
           return $product;
       }
    }
    return false;
}


function getProducts() {
    $products = [
        [
            'id' => 10,
            'description' => 'Cake Can',
            'size' => '330ml',
            'price' => 16.00
        ],
        [
            'id' => 15,
            'description' => 'Coke 8oz',
            'size' => '237',
            'price' => 8.00
        ],
        [
            'id' => 20,
            'description' => 'Coke 12ox',
            'size' => '355',
            'price' => 11.00
        ]
    ];

    return $products;
    
}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    <?php
    /*
     $cutomer = array(
        'Mattew' => array('mattew@gmail.com', 25, 'M'),
        'Mark' => array('mark@gmail.com', 28, 'M'),
        'Luke' => array('luke@gmail.com', 30, 'M'),
                        
     
     
     );

     while(list($name, $record) = each($cutomers)){
        echo "Name: $name <br>";
        foreach($record as $data) {
            echo '-' . $data. '<br>';
        }

        echo'<br>';

     } */
    ?>


<?php 
    $customers = array(
        'Matthew' => array('matthew@gmail.com', 25, 'M'),
        'Mark'    => array('mark@gmail.com', 28, 'M'),
        'Luke'    => array('luke@gmail.com', 30, 'M'),
    );

    // Use foreach instead of each()
    foreach ($customers as $name => $record) {
        echo "Name: $name <br>";
        foreach ($record as $data) {
            echo '-' . $data . '<br>';
        }
        echo '<br>';
}
  ?>


<?php
// Sample array
$fruits = array("banana", "apple", "cherry", "mango");

// -----------------------------
// print_r()
// -----------------------------
// Displays human-readable information about arrays
print_r($fruits);
echo "<br><br>";

// -----------------------------
// count() / sizeof()
// -----------------------------
// Both return the number of elements in the array
echo "Total fruits (count): " . count($fruits) . "<br>";
echo "Total fruits (sizeof): " . sizeof($fruits) . "<br><br>";

// -----------------------------
// sort()
// -----------------------------
// Sorts an array by values in ascending order (resets keys)
sort($fruits);
echo "Sorted fruits (sort): ";
print_r($fruits);
echo "<br><br>";

// Reset sample array with key-value pairs
$prices = array(
    "banana" => 20,
    "apple" => 35,
    "cherry" => 25,
    "mango" => 30
);

// -----------------------------
// asort()
// -----------------------------
// Sort associative array by VALUES ascending (keeps keys)
asort($prices);
echo "Sorted by value ascending (asort): ";
print_r($prices);
echo "<br><br>";

// -----------------------------
// ksort()
// -----------------------------
// Sort associative array by KEYS ascending
ksort($prices);
echo "Sorted by key ascending (ksort): ";
print_r($prices);
echo "<br><br>";

// -----------------------------
// arsort()
// -----------------------------
// Sort associative array by VALUES descending (keeps keys)
arsort($prices);
echo "Sorted by value descending (arsort): ";
print_r($prices);
echo "<br><br>";

// -----------------------------
// krsort()
// -----------------------------
// Sort associative array by KEYS descending
krsort($prices);
echo "Sorted by key descending (krsort): ";
print_r($prices);
echo "<br><br>";

// -----------------------------
// shuffle()
// -----------------------------
// Randomly shuffle elements in an array (keys reset)
shuffle($fruits);
echo "Shuffled fruits (shuffle): ";
print_r($fruits);
echo "<br><br>";

// -----------------------------
// array_walk()
// -----------------------------
// Apply a user-defined function to every element in the array
function showFruit($value, $key) {
    echo "Fruit #$key is $value <br>";
}

array_walk($fruits, "showFruit");

?>

</body>
</html>
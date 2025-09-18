<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Null</title>
</head>
<body>

<?php
  $var = 0;
//   Evelauates to true because $var is empty
  if(empty($var)){    
      echo "$var is either 0, empty, or not set<br>";
  }

//   Evalautes to true because $var is set
  if(isset($var)) {
    echo "$var is set even though it is empty<br>";
  }

//   evalautes as false because $var is not null
  if(is_null($var)) {
    echo "$var is null<br>";
  } else {
      echo "Not null<br>";
  }


  ?>

    
</body>
</html>
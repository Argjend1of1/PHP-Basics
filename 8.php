<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
</body>
</html>
<?php
  //associative arrays = Arrays made of key => value pairs
  //countries => capitals, id => username, item => price
  $capitals = array("USA"=>"Washington D.C",//key=usa, value = Washington D.C
                    "Japan"=> "Kyoto",
                    "South Korea"=> "Seoul",
                    "India"=> "New Delhi");
  //echo $capitals["Japan"];//seeing the value of a key
  //$capitals["USA"] = "Las Vegas"; changing a value on a key
  //$capitals["China"] = "Beijing";//adding an element to an array
  //array_pop($capitals);
  //array_shift($capitals);
  
  //displaying both keys and values of an associative array
  foreach($capitals as $key => $value){
    echo "{$key} / {$value}<br>";
  }
  echo "<br>";
  //displaying only keys of an associative array
  $keys = array_keys($capitals);
  foreach($keys as $key)
  {
    echo $key . "<br>";
  }
  echo "<br>";
  //displaying only values of an associative array
  $values = array_values($capitals);
  foreach($values as $value)
  {
    echo $value . "<br>";
  }
  echo "<br>";
  //flipping values of keys and arrays
  $flipped = array_flip($capitals);
  foreach($flipped as $key => $value)
  {
    echo "{$key} / {$value} <br>";
  }
  //$capitals = array_reverse($capitals);
  //echo count($capitals);
?>
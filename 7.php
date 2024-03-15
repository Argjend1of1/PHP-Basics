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
  //arrays
  $foods  = array("apple", "orange", "banana", "coconut");
  //$foods[0] = "pineapple";
  //array_push($foods, "kiwi", "strawberry");
  //array_pop($foods);//pop last element
  //array_pop($foods);
  //array_shift($foods);//shift first elemenent from array
  $reversedfoods = array_reverse($foods);//sepse smunesh drejtperdrejt me
  //ba reverse array, per ate arsyje duhet me kriju nje array te ri
  //echo count($foods);//menyra e numerimit te elementeve ne varg

  //nese don secilin element me ba automatikisht n'menyre me te shpejte e
  //perdor foreach,sepse perndryshe te nevojitet me ba ne menyre manuale
  foreach($foods as $food){
    echo $food . "<br>";
  }
  foreach($reversedfoods as $food)
  {
    echo $food . "<br>";
  }
?>
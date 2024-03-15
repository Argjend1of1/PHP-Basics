<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="9.php" method="post">
  <label for="country">Country: </label>
  <input type="text" name="country" placeholder="Enter Here...">
  <br><input type="submit" value="Submit" id="">
  </form>
</body>
</html>
<?php
  $capitals = array("USA"=>"Washington D.C",
                     "Japan"=> "Kyoto",
                     "South Korea"=> "Seoul",
                     "India"=> "New Delhi");
  $capital = $capitals[$_POST["country"]];
  //Dmth elementin qe osht assigned i pari(key) e merr edhe munesh 
  //elementin e dyte(value) me shfaq nbaz tkerkeses qe e bon 
  echo "The capital is: {$capital}";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="1.php" method = "get">
    <label for="quantity">Quantity:</label><br>
    <input type="number" name="quantity">
    <input type="submit" value = "Calculate Total">
  </form>
</body>
</html>

<?php
   //$_GET, $_POST = special variables perdoren per me mor te dhena nga nje
   //html form, edhe dergohet ne file permes action attribute ne form:
   //<form action="some_file.php" method = "get">
   //menyra e funksionimit te GET eshte 
   //qe e identifikon varesisht nga emri apo nese don diqka ma unike id 
   //edhe e merr qat username, password apo qkado ama qka osht nje e met 
   //e get eshte qe te dhenat qe ti i jep qe munen me kan sensitive i 
   //shfaq ne url, ka limit te karaktereve, por ka edhe perparesi, e 
   //lejon bookmarking me values, munet mu ba cache, e perdorshme per 
   //search page jo per info sensitive
   //POST funskionon ne menyre qe te dhenat ruhet ne body te HTTP request,
   //siguri me e larte ska limit te dhenave, por ka edhe mangesi qe per 
   //GET ishin perparesi si, bookmarking nuk lejohet, GET requests nuk 
   //ruhen dhe e perdorim per raste kur jepim info sensitive,
   //pra si perfundim use GET for non-sensitive info, 
   //use POST for sensitive info
   $item = "Pizza";
   $price = 5.99;
   $quantity = $_GET["quantity"];
   $total = $quantity * $price;
   echo "You have ordered {$quantity} {$item}/s<br>";
   echo"Your total is \${$total}";
   //psh nket rast mujm get me perdor se skemi nevoj per security sepse 
   //nuk kemi sensitive info
?>

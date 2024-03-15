
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="2.php" method="post">
    <label for="radius">Radius: </label><br>
    <input type="text" name="radius" placeholder="Enter here... ">
    <input type="submit" value="Calculate">
  </form>
</body>
</html>
<?php
  //Kerkesa e detyres eshte useri me jep rrezen edhe na me llogarit per 
  //qat rreze perimetrin, syprinen edhe vellimin
  $radius = $_POST["radius"];//["qetu e vendos name or ID varesisht qysh e bon identify"]
  
  $Circumference = 2 * pi() * $radius;//perimetri
  $Circumference = round($Circumference, 3);// menyra qysh e bon round number ne vlera te caktuara
  
  $Area = pi() * $radius * $radius;//syprina
  $Area = round($Area, 3);

  $Volume = 4 / 3 * pi() * pow($radius, 3);//vellimi
  $Volume = round($Volume, 3);

  echo "Circumference of the circle with the radius 
  you have given is: {$Circumference} cm<br>";

  echo "Area of the circle with the radius 
  you have given is: {$Area} cm^2<br>"; 
  
  echo "Volume of the circle with the radius 
  you have given is: {$Volume} cm^3";
?>
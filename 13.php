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
  //function is written code once and reused when needed, duhet me shkru 
  //(); pas funksionit si psh. add();, subtract(); etj.
  function hypotenuse($a, $b)
  {
    $c = sqrt($a ** 2 + $b ** 2);//rrenja e (a^2 + b^2), per hipotenuz
    return $c;
  }
  echo hypotenuse(3,4);
?>
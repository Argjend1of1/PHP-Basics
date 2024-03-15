<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="5.php" method="post">
    <label for="">Enter a number to count down from:</label><br>
    <input type="text" name="counter"><br>
    <input type="submit" name="" id="">
  </form>
</body>
</html>
<?php
  //for loops
  $counter = $_POST["counter"];
  echo "Number counting:<br>";
  for($i = $counter;$i > 0; $i--)
  {
    echo "{$i} <br>";
  }
?>
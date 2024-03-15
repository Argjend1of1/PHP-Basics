<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="12.php" method="post">
    <input type="checkbox" name="pizza">
    <label for="pizza">Pizza</label><br>
    <input type="checkbox" name="hamburger" >
    <label for="hamburger">Hamburger</label><br>
    <input type="checkbox" name="hotdog">
    <label for="hotdog">Hotdog</label><br>
    <input type="checkbox" name="taco">
    <label for="taco">Taco</label><br>
    <input type="submit" name="submit">
  </form>
</body>
</html>

<?php
if(isset($_POST["submit"]))
{
  if(isset($_POST["pizza"]))
  {
    echo "You like pizza!<br>";
  }
  if(isset($_POST["hamburger"]))
  {
    echo "You like hamburgers!<br>";
  }
  if(isset($_POST["hotdog"]))
  {
    echo "You like hotdogs!<br>";
  }
  if(isset($_POST["taco"]))
  {
    echo "You like tacos!<br>";
  }
}
?>

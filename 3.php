<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="3.php" method="post">
    <label for="hours">Hours a week: </label><br>
    <input type="text" name="hours"><br>
    <label for="dollars">Dollars per hour: </label><br>
    <input type="text" name="dollars"><br>
    <input type="submit" value="calculate">
  </form>
</body>
</html>
<?php
  //duhet mja calculate rrogen dikujt + OT
  $hours = $_POST["hours"];
  $dollars = $_POST["dollars"];
  $wage = null;
  if($hours<=40 && $hours>=0)
  {
    $wage = $hours * $dollars;
  }
  elseif($hours >=40)
  {
    $overtime = 3/2 * $dollars;//sepse overtime ora osht 1/2 me e madhe
    $wage = ($dollars * 40) + (($hours - 40) * $overtime);
  }
  else
  {
    $wage = 0;
  }
  echo "Your wage is: \${$wage}<br>";
  echo "NOTE: <br>If you work more than 40 hours a week the calculations 
  of<br> the overtime hours has been made with 1.5 of the regular wage<br> 
  as thats how it works in USA. "
?>
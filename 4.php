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
  //switch statements
  $date = date("l");//current real date this way
  //$date = "Tuesday";
  switch($date)
  { 
    case "Monday": echo "I hate Mondays";break;
    case "Tuesday": echo "TACOOO TUUUESDAYYY!";break;
    case "Wednesday": echo "Middle of weekdays!";break;
    case "Thursday": echo"BOORING!";break;
    case "Friday": echo"GOOD DAY!";break;
    case "Saturday": echo"Deadline Day!";break;
    case "Sunday": echo"Close to the repeat!";break;
    default: echo"Shit u said not a date!";
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="10.php" method="post">
    <label for="username">Username:  </label><br>
    <input type="text" name="username" placeholder="Enter your email..."><br><br>
    <label for="password">Password:  </label><br>
    <input type="password" name="password" placeholder="Enter your password..."><br><br>
    <input type="submit" name="login" value="Log in">
  </form>
</body>
</html>
<?php
  //isset() = Returns TRUE if variable is declared, FALSE if it is NOT declared
  //empty() = Return TRUE e is not declared, FALSE if it is declared
  
  //Shembulli qe e kemi kriju ni login me kqyr a jem tu interact me 
  //butonin log in, edhe a jemi tu i fill fields tkrijume
  foreach($_POST as $key => $value){
    echo "{$key} = {$value} <br>";
  }
  //Pra e kemi ba permes associates arrays ku (username passed as key) dhe
  //(password as value), maje men qet menyr efikase edhe jo zor
  
  
  if(isset($_POST["login"])){
    $username = $_POST["username"];
    $password = $_POST["password"];
    if(empty($username && $password))
    {
      echo "Fill in the empty fields!";
    }
    else
    {
      echo "Hello {$username}";
    }

  }
?>
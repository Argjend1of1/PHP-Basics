<?php
  //sessions stores user info on the server, session starts kur useri 
  //shkon te ni webpage per here te pare edhe krejt searches qe bahen prej
  //ni useri ruhen te dhenat perkohesisht, pra krijohet nje ID per qat 
  //session edhe krejt searches qe bahen me ID(login credentials) ruhet 
  //ne cookie te browser i klientit, ama munet mu pass edhe ne URL.
  //Session eshte Supet Global Variable
  session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="17.php" method="post">
    Username: <br>
    <input type="text" name="username"><br>
    Password: <br>
    <input type="password" name="password"><br>
    <input type="submit" name="login" value="Login">
  </form>
</body>
</html>
<?php 
  //kemi kriju ni login form edhe kur e prekum login me na qu te homepage
  //qe nrast tonin osht 18.php
  if(isset($_POST["login"]))
  {
    if(!empty($_POST["username"])  && !empty($_POST["password"]))
    {
      //duhet qata tek post user and pass mi rujt te session per me kry 
      //qat funksion qe e ka session
      $_SESSION["username"] = $_POST["username"];
      $_SESSION["password"] = $_POST["password"];
      header("Location: 18.php");
      //redirected to the homepage psh nfacebook kur i jepim te dhenat, 
      //qeshtu ndodh ama normal dut me dit qysh osht password edhe user
      //qe nuk osht e jepme nket kod
    }
    else
    {  
      echo "Missing username/password <br>";
    }
  }
?>
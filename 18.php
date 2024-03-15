<?php
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
  This is the homepage<br>
  <form action="18.php" method="post">
    <input type="submit" name="logout" value="Logout">
  </form>
</body>
</html>
<?php
  //ktu tash masi jem logged in, me kriju ni button me mujt me logout
  //qe fillimisht duhet mi shkatrru qato te dhena qe jon kerku me qato
  //login credentials
  echo $_SESSION["username"] . "<br>";
  echo $_SESSION["password"] . "<br>";
  if(isset($_POST["logout"]))
  {
    session_destroy();//qellimi i ksaj eshte qe mi fshi krejt te dhenat 
    //qe jon ba per qat session, ama nuk fshihet session ID(login credentials) 
    // ato mbesin te njejta krejt qka fshihet eshte te dhenat qe jane 
    //kerku nqat session me qat session id
    header("location: 17.php");
  }
?>
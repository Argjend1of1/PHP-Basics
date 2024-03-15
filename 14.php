<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="14.php" method="post">
    Username:<br>
    <input type="text" name="username"><br>
    Age:<br>
    <input type="text" name="age"><br>
    Email:<br>
    <input type="text" name="email"><br>
    <input type="submit" name="login" value="Login">
  </form>
</body>
</html>

<?php
 //filter and sanitizing important nese user puts some malicious input
  if(isset($_POST["login"]))
  {
    $username = filter_input(INPUT_POST, "username", 
    FILTER_SANITIZE_SPECIAL_CHARS);
    echo "Hello {$username}<br>";

    //me ket filter pavaresisht qa shkrun i mer veq numbers
    $age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT);
    $age = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT);
    if(empty($age))
    {
     echo "Age not valid!<br>";
    }
    else
    {
     echo"You are {$age} years old<br>";
    }
    //works like this jo me isset, sepse e kthen veq 'You are years old'.
    //njejt edhe per email 

    
    //pavaresisht qa shkrun i mer veq eligible parts for email
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
    echo "Your email is: {$email}<br>";
  }
  /*When to Use FILTER_SANITIZE_SPECIAL_CHARS
  Displaying User Input: When you want to display user input on a webpage, 
  especially if it might contain HTML or special characters, it's a good 
  practice to sanitize it with FILTER_SANITIZE_SPECIAL_CHARS. This prevents
  any malicious script injection.

  Avoiding XSS: Cross-Site Scripting (XSS) attacks can be mitigated by 
  sanitizing user inputs. If a user tries to inject scripts into your page 
  through form fields, using this filter can neutralize those attempts.*/
?>
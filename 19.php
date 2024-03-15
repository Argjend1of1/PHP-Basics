<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <!-- PHP_SELF eshte path qe munesh me pa nqet kod kur e prek login
       edhe qellimi qe e bonem kshtu eshte qe nese e ndrrojm emrin ne 
       ne menyre automatike mu ba change pa pas nevoj me ardh te form action
       me ndrru manualisht, veq url e ndrron edhe n'rregull je 
       In PHP, htmlspecialchars() is a function used for escaping HTML characters. When you have user input, such as form data submitted by a user, it's important to sanitize this input before displaying it back to the user. One common vulnerability is called Cross-Site Scripting (XSS), where an attacker tries to inject malicious scripts into your website through user input.
       By using htmlspecialchars($_SERVER["PHP_SELF"]), you are ensuring that any HTML code that might be injected into $_SERVER["PHP_SELF"] is rendered harmless. This function converts special characters to HTML entities. For example, < becomes &lt;, > becomes &gt;, & becomes &amp;, and so on.-->
  <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
    Username: <br>
    <input type="text" name="username"><br>
    Password: <br>
    <input type="password" name="password"><br>
    <input type="submit" name="login" value="Login">
  </form>
</body>
</html>

<?php
  //$_SERVER = SGB(Super Global Variable) i permban krejt headers, paths 
  //dhe scripts, hyrjet ne kete array krijohen nga web server, edhe na
  //tregon krejt qka duhet me dit, rreth webpage environment, icasemi permes
  //associative arrays (key=>value) 
  if($_SERVER["REQUEST_METHOD"] == "POST")
  {
    echo"Hello";
  }
  //Consider a form that collects user data. You might want 
  //to process that data only when the form is submitted, not when the 
  //user first loads the page. So, by checking $_SERVER["REQUEST_METHOD"]
  // == "POST", you ensure that the code inside the if block is executed 
  //only when the form is submitted via POST.
  if(isset($_POST["login"]))
  {
    foreach($_SERVER as $key => $value)
    {
      echo "{$key} = {$value} <br>";
    }
  } 
  //it's important to note that both methods can be used depending on your
  //specific needs. If you have a form with multiple submit buttons or 
  //actions, you might use isset($_POST["login"]) to differentiate 
  //between the buttons. But for the general case of checking if a form 
  //was submitted via POST, $_SERVER["REQUEST_METHOD"] == "POST" is the 
  //preferred method for the reasons mentioned above.
?>
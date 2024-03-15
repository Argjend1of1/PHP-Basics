<?php
  //hashing = used to hide data from 3rd parties,sh. passwords i transform
  //ne shkronja, numra dhe simbole, permes nje procesi matematikor, 
  //ngajshem si encryption
  $password = "pizza123";

  $hash = password_hash($password, PASSWORD_DEFAULT);

  if(password_verify("pizza123", $hash))
  {
    echo"You are logged in!";
  }
  else
  {
    echo "Incorrect Password";
  }
?>
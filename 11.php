<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="11.php" method="post">
  <input type="radio" name="bank" value="visa">
  <label for="visa">Visa</label><br>
  <input type="radio" name="bank" value="mastercard">
  <label for="MasterCard">MasterCard</label><br>
  <input type="radio" name="bank" value="americanexpress">
  <label for="americanexpress" >American Express</label><br>
  <input type="submit" name="submit" value="Confirm"><br>
  </form>
</body>
</html>
<?php
  //Detyra eshte qe selection qe e bon useri me shfaq se cilin e ka ba 
  //mujm me cases:
    if(isset($_POST["submit"]))//nese e prekum submit button se nese jo, sen nuk nevojitet me ndodh
    {
      if(isset($_POST["bank"]))//tash sigurohemi qe radio button is set
      {
        $bank = $_POST["bank"];//nese po atehere duhet me rujt dikun qata
        // qe osht ba set edhe tash e bajm switch neper cases
        switch($bank)
        {
          case "visa": echo"Visa!";break;
          case "mastercard": echo"MasterCard!";break;
          case "americanexpress": echo"AmericaExpress!";break;
        }
      }
      else
      {
        echo"Please Select a Card!";
      }
    }
    //edhe me if/else
    /*if(isset($_POST["submit"]))
    {
      $bank = null;//duhet me deklaru niher si null se nese nuk e bon 
      //select ta qet warning qe osht undefined.
      if(isset($_POST["bank"]))
      {
        $bank = $_POST["bank"];
        if($bank == "visa")
        {
          echo"You have selected Visa!";
        }
        elseif($bank == "mastercard")
        {
          echo"You have selected MasterCard!";
        }
        elseif($bank == "americanexpress")
        {
          echo"You have selected American Express!";
        }
        else
        {
          echo"Please select a Card!";
        }
      }
    }*/
?>
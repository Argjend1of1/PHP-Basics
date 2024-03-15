<?php
   //cookies are used to store information about a user or their 
   //interactions with a website, psh kur bahem login per me rujt nexttime, 
   //preferencat e posts ose video qe i shohim me kan similar nsene qe 
   //i kemi kqyr perpara etj.
   setcookie("fav_food", "pizza", time() +3600 * 2, "/");
   setcookie("fav_film", "Maze_Runner", time() + 3600, "/");
   setcookie("fav_game", "FIFA", time() + 86400, "/");

   /*
   foreach($_COOKIE as $key => $value)
   {
    echo "{$key} = {$value} <br>";
   }*/
   if(isset($_COOKIE["fav_food"]))
   {
    echo "BUY SOME {$_COOKIE["fav_food"]} !!!";
   }
   else
   {
    echo "I dont know your fav food";
   }
?>
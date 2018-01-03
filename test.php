<?php

// add 1 day to the current time for expiry time
   $expiryTime = time()+60*60*24;
   // create a persistent cookie
   $name = "Username";
   $value = "GranitGashi";
   setcookie($name, $value, $expiryTime);
   //setcookie("user", "", time() - 3600);
?>

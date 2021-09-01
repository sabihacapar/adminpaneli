<?php 
session_start();

  $_SESSION["girisKontrol"]=0;
  unset( $_SESSION["email"]);

  session_destroy();
   header("Location:login.php?info=cikisbasarili");


?>

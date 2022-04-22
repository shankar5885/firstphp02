<?php
   session_start();
   unset($_SESSION["username"]);
   unset($_SESSION["password"]);
   
   echo 'You have cleaned session';
   //header('Refresh: 2; URL = index.php');
   //header('Location: '.index.php);
   header("Location: http://localhost:8080/");
?>
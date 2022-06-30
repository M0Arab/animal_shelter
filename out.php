<?php
   session_start();
   unset($_SESSION["ID"]);
   unset($_SESSION["Gebruiks_naam"]);
   unset($_SESSION["Wachtwoord"]);
   
   echo 'You have cleaned session';
   header('Refresh: 2; URL = index.html');
?>
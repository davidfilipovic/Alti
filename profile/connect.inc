<?php

   function db_connect() {
     $host ="localhost";
     $user ="root";
     $password ="";
     $db = "AltiDB"; 

     global $connection;
     $connection = 
        mysql_connect($host, $user, $password) or
        die("Niste se povezali na bazu");
     mysql_select_db($db) or die("Nije pronadjena baza");

     mysql_query("SET NAMES UTF8") or die("Bezuspesno UTF8 kodiranje");
   }

   function db_disconnect() {
      global $connection;
      mysql_close($connection);
   }
?>
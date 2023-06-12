<?php
   $db_servername = "localhost:3308";
   $db_username = "root";
   $db_password = ""; 
   $db_name = "destinatii";
   $sitetitle = "Travel Goals";
   //create connection
   $conn = new mysqli($db_servername, $db_username, $db_password, $db_name);
   //check connection
   if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
   }
   
?>
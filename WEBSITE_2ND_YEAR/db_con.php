<?php

   define("HOSTNAME", "localhost");
   define("USERNAME", "root");
   define("PASSWORD", "");
   define("DATABASE", "checklist_db");  

   $connection = mysqli_connect(HOSTNAME,USERNAME,PASSWORD,DATABASE);

   if(!$connection) {
   	die("Connection Failed");
   }  
?>
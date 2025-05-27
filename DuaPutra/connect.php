<?php
   $host = "localhost";
   $username = "root";
   $password = "";
   $db_name = "db_duaputra";

   $db = mysqli_connect($host, $username, $password, $db_name);

   if($db->connect_error){
      die("error");
   }
?>
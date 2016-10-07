<?php
  $host = "localhost";
  $user = "root";
  $password = "";
  $database = "estore";

  try {
    $connect = mysqli_connect($host,$user,$password,$database);
  } catch (Exception $e) {
    echo "Error";
  }
  
?>

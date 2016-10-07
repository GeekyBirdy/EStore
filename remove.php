<?php

  require('connect.php');
  $query = "UPDATE `items` SET `cart`=0 WHERE `id`=".$_GET['id'];
  $result = mysqli_query($connect,$query);
  header('location: cart.php');
  
?>

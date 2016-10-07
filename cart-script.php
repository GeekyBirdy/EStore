<?php

  require('connect.php');
  $action = $_GET['action'];

  $query = "UPDATE `items` SET `cart`=1 WHERE `id`=".$_GET['id'];
  $result = mysqli_query($connect,$query);

  header('location: cart.php');

?>

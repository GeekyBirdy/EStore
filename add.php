<?php

  function message($id){
    require('connect.php');
    $query = "SELECT `cart` FROM `items` WHERE `id`=".$id;
    $result = mysqli_query($connect,$query);
    while ($row = mysqli_fetch_array($result)) {
      if ($row['cart']==0) {
        return "Add to cart!";
      }
      else{
        return "Added!";
      }
    }
  }

?>

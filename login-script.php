<?php
    require('connect.php');

    $email = "";
    $password = "";

    if(isset($_POST['search'])){
      $data[0] = $_POST['email'];
      $data[0] = mysql_real_escape_string($data[0]);
      $data[0] = strip_tags($data[0]);
      $data[1] = $_POST['password'];
      $data[1] = mysql_real_escape_string($data[1]);
      $data[1] = strip_tags($data[1]);
      $data[1] = md5($data[1]);
      $search_Query = "SELECT * FROM `persons` WHERE email = '$data[0]'";
      $search_Result = mysqli_query($connect,$search_Query);

      if($search_Result){
        if(mysqli_num_rows($search_Result)){
          while ($row = mysqli_fetch_array($search_Result)) {
            $password = $row['password'];
            $email = $row['email'];
            if($data[1] === $password){
              session_start();
              $_SESSION['email'] = $email;
              header('location: home.php');
            }
            else{
              header('location: error.php');
            }
          }
        }
        else{
          header('location: error.php');
        }
      }
      else{
        echo "Result Error";
      }
    }// End of Search
?>

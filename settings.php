<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>E-Store</title>
    <!-- CSS Files -->
    <link rel="stylesheet" href="estore.css" >
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Font Awsome files -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
    <!--JS files-->
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"   integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>

  <body>
    <?php

      require('connect.php');
      session_start();
      $email = $_SESSION['email'];

      if (isset($_POST['change'])) {
        $search_Query = "SELECT * FROM `persons` WHERE email = '$email'";
        $search_Result = mysqli_query($connect,$search_Query);

        if ($search_Result) {
          if (mysqli_num_rows($search_Result)) {
            while ($row = mysqli_fetch_array($search_Result)) {
              $password = $row['password'];
              $oldpass = $_POST['oldpass'];
              $oldpass = mysql_real_escape_string($oldpass);
              $oldpass = strip_tags($oldpass);
              $oldpass = md5($oldpass);
              $newpass = $_POST['newpass'];
              $newpass = mysql_real_escape_string($newpass);
              $newpass = strip_tags($newpass);
              $retype = $_POST['retype'];
              $retype = mysql_real_escape_string($retype);
              $retype = strip_tags($retype);

              if ($password !== $oldpass) {
                echo "<script type='text/javascript'>alert('Please enter the correct password.');</script>";
              }
              elseif ($newpass !== $retype) {
                echo "<script type='text/javascript'>alert('The new password is not the same.');</script>";
              }
              else {
                $newpass = md5($newpass);
                $query = "UPDATE `persons` SET `password` = '$newpass' WHERE `persons`.`email` = '$email'";
                $update_Result = mysqli_query($connect, $query);
                echo "<script type='text/javascript'>alert('Password Changed.');</script>";
              }
            }
          }
        }
      }
    ?>

    <!-- NavBar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <!-- For Collapsing -->
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="home.php">E-Store</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="cart.php"><i class="fa fa-shopping-cart"></i> Cart</a></li>
            <li><a href="settings.php"><i class="fa fa-cog"></i> Settings</a></li>
            <li><a href="logout.php"><i class="fa fa-sign-out"></i> Log Out</a></li>
          </ul>
        </div>
      </div>
    </nav>  <!-- End of Navbar -->

    <!-- Settings Page -->
    <div class="container">
      <div class="row">
        <div class="col-md-5 col-md-offset-4">
          <h3>Change Password</h3>
          <form class="form-group" action="" method="post">
            <input type="password" placeholder="Old Password" class="form-control" name="oldpass" required="true"><br>
            <input type="password" placeholder="New Password" class="form-control" name="newpass" required="true"><br>
            <input type="password" placeholder="Re-type New Password" class="form-control" name="retype" required="true"><br>
            <input type="submit" class="btn btn-primary" name="change" value="Change">
          </form>
        </div>
      </div>
    </div> <!-- End of container  -->

  </body>
</html>

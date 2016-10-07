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

      session_start();

      //Sending mail to customer
      $to = $_SESSION['email'];
      $subject = "Confirmation from E-Store";
      $message = "Your Order has been confirmed. You will get your items soon.";
      mail($to,$subject,$message);

      //Sending mail to Owner
      $to = "geekybirdy001@gmail.com";
      $subject = "Purchase from E-Store";
      $message = "Email Id of the customer: ".$_SESSION['email']."<br>Item Id: ".$_GET['itemsid'];
      mail($to,$subject,$message);
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
            <li><a href="index.php"><i class="fa fa-sign-out"></i> Log Out</a></li>
          </ul>
        </div>
      </div>
    </nav>  <!-- End of Navbar -->

    <!-- Cart Page -->
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-md-offset-4">
          <p class="text-center">
            Thank you for ordering from E-Store. The order shall be delivered to you shortly.
          </p><br>
          <p class="text-center">
            Order some more electronic items <a href="home.php">here.</a>
          </p>
        </div>
      </div>
    </div> <!-- End of container  -->

  </body>
</html>

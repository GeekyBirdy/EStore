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

    <!-- PHP Session -->
    <?php
      session_start();
      if (isset($_SESSION['email'])) {
        header('location: home.php');
      }

    ?><!-- End of PHP Session -->

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
          <a class="navbar-brand" href="index.php">E-Store</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="signup.php"><i class="fa fa-user-plus"></i> Sign Up</a></li>
            <li><a href="#myModal" data-toggle="modal"><i class="fa fa-sign-in"></i> Login</a></li>
            <li><a href="aboutus.php"><i class="fa fa-folder-open-o"></i> About Us</a></li>
            <li><a href="contactus.php"><i class="fa fa-mobile"></i> Contact Us</a></li>
          </ul>
        </div>
      </div>
    </nav>  <!-- End of Navbar -->

    <!-- Index Page -->
    <div class="container-fluid">
      <!-- First Row -->
      <div class="row">
        <div class="col-md-4"><!-- First Mobile Display -->
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">Nexus 6P(Silver, 64 GB)</h4>
            </div>
            <div class="panel-body">
              <center><img class="text-center" src="https://doxz7msmg7sxx.cloudfront.net/media/catalog/product/cache/21/image/992x558/9df78eab33525d08d6e5fb8d27136e95/n/e/nexus-intro-phone-1_1.jpg" alt="nexus 6p"></center>
              <span class="help-block">5.7 inch Quad HD Display, 3GB RAM|64GB ROM, 12.3MP Primary Camera|8MP Front, Android Marshmallow</span>
              <span class="price"><i class="fa fa-inr"></i><b>37,999</b></span>
              <button class="btn btn-block btn-primary" data-toggle="modal" data-target="#myModal">Order Now!</button>
            </div>
          </div>
        </div>

        <div class="col-md-4"><!-- Second Mobile Display -->
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">Samsung Galaxy S7 Edge(Black Onyx, 32 GB)</h4>
            </div>
            <div class="panel-body">
              <center><img class="text-center" src="http://store.virginmedia.com/content/dam/eSales/mobile/responsive/Samsung/Zoom/s7-edge-black-comp.png" alt="Samsung Galaxy S7 Edge"></center>
              <span class="help-block">5.5 inch Quad HD Display, 4GB RAM|32GB ROM, 12MP Primary Camera|5MP Front, Android Marshmallow</span>
              <span class="price"><i class="fa fa-inr"></i><b>50,900</b></span>
              <button class="btn btn-block btn-primary" data-toggle="modal" data-target="#myModal">Order Now!</button>
            </div>
          </div>
        </div>

        <div class="col-md-4"><!-- Third Mobile Display -->
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">Apple iPhone 6S(Rose Gold, 16 GB)</h4>
            </div>
            <div class="panel-body">
              <center><img class="text-center" src="http://store.storeimages.cdn-apple.com/4973/as-images.apple.com/is/image/AppleInc/aos/published/images/i/ph/iphone6s/plus/iphone6s-plus-rosegold-select-2015?wid=1200&hei=630&fmt=jpeg&qlt=95&op_sharpen=0&resMode=bicub&op_usm=0.5,0.5,0,0&iccEmbed=0&layer=comp&.v=i5llT1" alt="Apple 6S"></center>
              <span class="help-block">4.7 inch Retina Display, 2GB RAM|16GB ROM, 12MP Primary Camera|5MP Front, iOS</span>
              <span class="price"><i class="fa fa-inr"></i><b>47,499</b></span>
              <button class="btn btn-block btn-primary" data-toggle="modal" data-target="#myModal">Order Now!</button>
            </div>
          </div>
        </div>
      </div>

      <!-- Second Row -->
      <div class="row">
        <div class="col-md-4">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">Sony Xperia Z3+(White, 32 GB)</h4>
            </div>
            <div class="panel-body">
              <center><img class="text-center" src="http://abbelectronics.us/mobile%20listing/images/Z3+/3.jpg" alt="Sony Xperia Z3+"></center>
              <span class="help-block">5.2 inch Full HD Display, 3GB RAM|32GB ROM, 20.7MP Primary Camera|5MP Front, Android Lollipop  </span>
              <span class="price"><i class="fa fa-inr"></i><b>52,990</b></span>
              <button class="btn btn-block btn-primary" data-toggle="modal" data-target="#myModal">Order Now!</button>
            </div>
          </div>
        </div>

        <div class="col-md-4">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">HTC 10(Topaz Gold, 32 GB)</h4>
              </div>
              <div class="panel-body">
                <center><img class="text-center" src="https://www.rayashop.com/media/catalog/product/cache/1/small_image/9df78eab33525d08d6e5fb8d27136e95/h/t/htc-10-topaz-gold-3_2.jpg" alt="HTC 10"></center>
                <span class="help-block">5.5 inch Full HD Display, 4GB RAM|32GB ROM, 12MP Primary Camera|5MP Front, Android Marshmallow</span>
                <span class="price"><i class="fa fa-inr"></i><b>45,999</b></span>
                <button class="btn btn-block btn-primary" data-toggle="modal" data-target="#myModal">Order Now!</button>
              </div>
            </div>
        </div>

        <div class="col-md-4">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">Moto X Force(Black, 32 GB)</h4>
            </div>
            <div class="panel-body">
              <center><img class="text-center" src="http://cdn2.gsmarena.com/vv/pics/motorola/motorola-moto-x-force4.jpg" alt="Moto X Force"></center>
              <span class="help-block">5.4 inch Quad HD Display, 3GB RAM|32GB ROM, 21MP+5MP Dual Rear Cameras|5MP Front, Android Lollipop</span>
              <span class="price"><i class="fa fa-inr"></i><b>34,999</b></span>
              <button class="btn btn-block btn-primary" data-toggle="modal" data-target="#myModal">Order Now!</button>
            </div>
          </div>
        </div>

      </div> <!-- End of container -->
    </div> <!-- End of container  -->

    <!-- Footer -->
    <footer>
      <div class="row">
        <div class="col-md-4">
          <h3>Information</h3>
          <a href="aboutus.php" class="link">About Us</a><br>
          <a href="contactus.php">Contact Us</a>
        </div>

        <div class="col-md-4">
          <h3>My Account</h3>
          <a href="#myModal" data-toggle="modal">Login</a><br>
          <a href="signup.php">Sign Up</a>
        </div>

        <div class="col-md-4">
          <h3>Contact Us</h3>
          <p>Contact: +91-123-000000</p>
        </div>
      </div>
    </footer>

    <!--Modal -->
    <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" name="button" class="close" data-dismiss="modal">x</button>
            <h4 class="modal-title">LOGIN</h4>
          </div>
          <div class="modal-body">
            <h5>Don't have an account?<a href="signup.php"> Register</a></h5>
            <form class="form-group" action="login-script.php" method="post">
              <input type="email" class="form-control" placeholder="Email" name="email" required="true"><br>
              <input type="password" class="form-control" placeholder="Password" name="password" required="true">
              <a href="login-script.php"><input type="submit" class="btn btn-primary" name="search" value="Login"></a><br>
            </form>
            <a href="#">Forgot Password?</a>
          </div>
        </div>
      </div>
    </div> <!-- End of Modal -->

  </body>
</html>

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

    <!-- Contact Us Page -->
    <div class="container">
      <div class="row">
        <div class="col-md-9">
          <h3><b>LIVE SUPPORT</b></h3>
          <h4>24 hours | 7 days a week | 365 days a year Live Technical Support</h4>
          <p>
            This is a demo information. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.
          </p>
        </div>
        <div class="col-md-3">
          <img src="https://www.net2phoneoffice.com/images/Girl_on_the_Phone.png" alt="Girl in phone" />
        </div>
      </div>

      <div class="row">
        <div class="col-md-8">
          <h3><b>CONTACT US</b></h3>
          <form class="form-group" action="contact-script.php" method="post">
            <label for="name" class="control-label">Name</label>
            <input type="name" class="form-control">
            <label for="email" class="control-label">Email</label>
            <input type="email" class="form-control">
            <label for="text" class="control-label">Message</label>
            <textarea rows="4" class="form-control"></textarea>
            <a href="contact-script.php"><input type="submit" name="submit" class="btn btn-primary" value="Submit"></a>
          </form>
        </div>
        <div class="col-md-4">
          <h3><b>Company Information</b></h3>
          <p>
            500 Lorem Ipsum Dolor Sit,
          </p>
          <p>
            22-56-2-9 Sit Amet, Lorem,
          </p>
          <p>
            USA
          </p>
          <p>
            Phone:(00) 222 666 444
          </p>
          <p>
            Fax: (000) 000 00 00 0
          </p>
          <p>
            Email: info@mycompany.com
          </p>
          <p>
            Follow on: Facebook, Twitter
          </p>
        </div>
      </div>
    </div>

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
            <form class="form-group" action="" method="post">
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

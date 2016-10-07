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

      $host = "localhost";
      $user = "root";
      $password = "";
      $database = "estore";

      $id = 1;
      $email = "";
      $password = "";

      try {
        $connect = mysqli_connect($host,$user,$password,$database);
      } catch (Exception $e) {
        echo "Error";
      }

      if(isset($_POST['search'])){
        $data[0] = $_POST['email'];
        $data[1] = $_POST['password'];
        $search_Query = "SELECT * FROM `persons` WHERE email = '$data[0]'";
        $search_Result = mysqli_query($connect,$search_Query);

        if($search_Result){
          if(mysqli_num_rows($search_Result)){
            while ($row = mysqli_fetch_array($search_Result)) {
              $password = $row['password'];
              $email = $row['email'];
              if($data[1] === $password){
                session_start();
                $_SESSION['user'] = $email;
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

    <!-- About Us Page -->
    <div class="container">
    <div class="row">
      <div class="col-md-4">
        <h3>WHO WE ARE</h3><br>
        <img src="http://www.manjushreeindia.com/images/abt.jpg" alt="About Us" />
        <p>
          E-store is an American electronic commerce company with headquarters in Washington. It is the largest Internet-based retailer in the United States. E- Store started as an online blog, but soon diversified, selling mobile phones. E- Store also sells certain low-end products like USB cables and other accessories. E- Store has separate retail websites for United States, United Kingdom, Ireland, France, Canada, Germany, Italy, Spain, the Netherlands, Australia, Brazil, Japan, China, India and Mexico. E-Store also offers international shipping to certain other countries for some of its products.
        </p>
      </div>

      <div class="col-md-4">
        <h3>OUR HISTORY</h3><br>
        <p>1998-</p>
        <p>
          The company was founded in 1998, spurred by what Velos called his "Initiating framework", which described his efforts as an initiate to participate in the Internet business boom during that time. In 1998, Velos left his employment as president of Ofcol and Co. and moved to Seattle. He began to work on a business plan for what would eventually become E- Store.
        </p>
        <p>
          2002-
        </p>
        <p>
          In January 2002, E- store has received a funding of $12 million from Venture Partners and Indo-US Venture Partners.
        </p>
        <p>
          2008-
        </p>
        <p>
          In July 2008, the company raised a further $45 million from Bessemer Venture Partners, along with existing investors Venture Partners and Indo-US Venture Partners.
        </p>
        <p>
          2015-
        </p>
        <p>
          E- Store received its 3rd round of funding of $133 million on Feb-2015. The 3rd round of funding was led by Fcom with all the current institutional investors, including Kalaari Capital, Venture Partners, Bessemer Venture Partners all participating.
        </p>
      </div>

      <div class="col-md-4">
        <h3>OPPURTUNITIES</h3><br>
        <h4><b>Available Roles</b></h4>
        <ol>
          <li>Jr./Sr. Web Developer [Full Time Role + also available as a 6 Months Internship]</li>
          <li>Business Apprentice [6 Months Internship]</li>
          <li>Manager at backend operations [Full Time Role + also available as a 6 Months Internship]</li>
        </ol>
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

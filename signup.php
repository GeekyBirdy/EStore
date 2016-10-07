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

      $id = 1;
      $reg_email = "/^[a-z0-9]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
      $reg_phone = "/^[789][0-9]{9}$/";

      require('connect.php');

      function getPosts(){
        $post = array();
        $post[0] = $_POST['name'];
        $post[0] = mysql_real_escape_string($post[0]);
        $post[0] = strip_tags($post[0]);
        $post[1] = $_POST['email'];
        $post[1] = mysql_real_escape_string($post[1]);
        $post[1] = strip_tags($post[1]);
        $post[2] = $_POST['password'];
        $post[2] = mysql_real_escape_string($post[2]);
        $post[2] = strip_tags($post[2]);
        $post[3] = $_POST['number'];
        $post[3] = mysql_real_escape_string($post[3]);
        $post[3] = strip_tags($post[3]);
        $post[4] = $_POST['address'];
        $post[4] = mysql_real_escape_string($post[4]);
        $post[4] = strip_tags($post[4]);
        $post[5] = $_POST['city'];
        $post[5] = mysql_real_escape_string($post[5]);
        $post[5] = strip_tags($post[5]);
        return $post;
      }

      if(isset($_POST['insert'])){
        $data = getPosts();
        $data[2] = md5($data[2]);

        //Check if e-mail is already registered
        $search_Query = "SELECT * FROM `persons` WHERE email = '$data[1]'";
        $search_Result = mysqli_query($connect,$search_Query);

        if(mysqli_num_rows($search_Result)){
          echo "<script type='text/javascript'>alert('E-mail already registered. Please Login.');</script>";
        }
        elseif (!preg_match($reg_email,$data[1])) {
          echo "<script type='text/javascript'>alert('Enter a valid E-mail.');</script>";
        }
        elseif (!preg_match($reg_phone,$data[3])) {
          echo "<script type='text/javascript'>alert('Enter a valid mobile number.');</script>";
        }
        else {
          $insert_Query = "INSERT INTO `persons`(`id`,`name`, `email`, `password`, `contact`, `address`, `city`) VALUES ('$id','$data[0]','$data[1]','$data[2]','$data[3]','$data[4]','$data[5]')";
          try {
            $insert_Result = mysqli_query($connect, $insert_Query);

            if($insert_Result){
              if(mysqli_affected_rows($connect) > 0){
                echo "Details Submitted.";
                session_start();
                $_SESSION['email'] = $data[1];
                header('location: home.php');
              }
              else{
                echo "Details Not Submitted.";
              }
            }
          } catch (Exception $e) {
            echo "Error Insert: ".$e->getMessage();
          }
        }

      } // End of Insert

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

    <!-- Sign Up Page -->
    <div class="row">
      <div class="col-md-6">
        <img src="http://images.anandtech.com/doci/10333/nokia_e7.jpg" alt="Futuristic mobile" class="img-responsive" />
      </div>

      <div class="col-md-6 sign">
        <h3>SIGN UP</h3>
        <form class="form-group" action="" method="post">
          <input type="name" placeholder="Name" class="form-control" name="name" required="true"><br>
          <input type="email" placeholder="Email" class="form-control" name="email" required="true"><br>
          <input type="password" placeholder="Password" class="form-control" name="password" required="true"><br>
          <input type="number" placeholder="Contact" class="form-control" name="number" required="true"><br>
          <input type="text" placeholder="City" class="form-control" name="city" required="true"><br>
          <input type="text" placeholder="Address" class="form-control" name="address" required="true"><br>
          <input type="submit" class="btn btn-primary" class="form-control" value="Submit" name="insert">
        </form>
      </div>

    </div><!-- End of Sign Up Page -->

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

<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Contact Us</title>
  <style>
  .centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
.form-conatiner{
    padding: 20px;
    border: 1px solid #fff;
    -webkit-box-shadow: 0px 0px 31px 8px rgba(93,160,232,1);
-moz-box-shadow: 0px 0px 31px 8px rgba(93,160,232,1);
box-shadow: 0px 0px 31px 8px rgba(93,160,232,1);
}
  </style>
  <meta charset="utf-8">
  <link rel="shortcut icon" href="icon1.ico" type="image/x-icon">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="preloader.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/a3b90de71b.js"></script>
</head>
<body onload="myFunc()">
  <div id="loader"></div>

  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><img src="icon1.ico"></a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="home.php">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Service <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="cleaning.php">Cleaning</a></li>
          <li><a href="electric.php">Electric</a></li>
          <li><a href="plumber.php">Plumbing & Water</a></li>
          <li><a href="salon.php">Personal care</a></li>
        </ul>
      </li>
      <li><a href="about.php">About Us</a></li>
      <li class="active"><a href="cntt.php">Contact Us</a></li>
      <li><a href="explore.php"><span class="glyphicon glyphicon-shopping-cart"></span> Nearby</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
    <?php
      if(!isset($_SESSION['loggedinuser'])&&!isset($_SESSION['loggedin']))
      {
      echo "<li><a href='loging-emp.php'><span class='glyphicon glyphicon-user'></span> Employ</a></li>";
      echo "<li><a href='login-user.php'><span class='glyphicon glyphicon-log-in'></span> User</a></li>";
      }
      else
      {
        if(isset($_SESSION['loggedin']))
        {
          echo "<li><a href='profile-emp.php'><span class='glyphicon glyphicon-user'></span> Profile</a></li>";
          echo "<li><a href='logout.php'><span class='glyphicon glyphicon-log-in'></span> Logout</a></li>";
        }
        else
        {
          echo "<li><a href='profile.php'><span class='glyphicon glyphicon-user'></span> Profile</a></li>";
          echo "<li><a href='logout.php'><span class='glyphicon glyphicon-log-in'></span> Logout</a></li>";
        }
      }
      ?>
    </ul>
  </div>
</nav>
<h1 style="text-align: center;color:rgb(82, 81, 78)">Get In Touch</h1>
<div class="container">
    <div class="row">
        <img src="pp (27).jpg" width="100%" height="400px">
        <div class="centered"><h1 style="color: rgb(173, 172, 170);font-size: 50px;text-align: center">We would love to hear from you!</h1></div>
    </div>
</div>
<br>
<h1 style="text-align: center">How to contact?</h1>
<div class="contianer">
    <p style="font-size: 25px;text-align: center">In case of any query ,please feel free to contact us.</p>
    <p style="font-size: 25px;text-align:center">The contact no.of the customer care is given at the bottom of the page.You can also email us at the provided ID.Further you can use our 
    helpline portal to contact us which is generally answered very quickly.Please leave your email id also so that we can contact you back.</p>
</div>
<br>
<div class="container">
    <h3 style="text-align: center;color: brown">Contact No.:+91 9876543210 +91 9012345678</h3>
    <br>
    <h3 style="text-align: center;color: brown">Mail us at: help.customer@gmail.com</h3>
</div>
<br>
<h1 style="text-align: center;color:indigo">Our Helpline Portal</h1>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4 col-sm-4 col-xs-12"></div>
        <div class="col-md-4 col-sm-4 col-xs-12">
                <form class="form-conatiner" action="help.php" method="POST">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Email address</label>
                          <input type="email" class="form-control" name="mailid" placeholder="Email" required>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Query</label>
                          <textarea type="text" class="form-control" name="complaint" rows="6" placeholder="Query" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-success btn-block">Submit</button>
                      </form>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12"></div>
    </div>
</div>
<br>
<br>
<!--footer-->
<div style="background-color: rgb(57, 54, 58)">
        <footer class="page-footer font-small blue pt-4">
          <div class="container-fluid text-center text-md-left">
            <div class="row">
              <div class="col-md-6 mt-md-0 mt-3">      
                <h5 class="text-uppercase" style="color: gainsboro">Diensten</h5>
                <p style="color: ivory">Our main aim is to make your easier if you are moving to new city.</p>
              </div>
              <hr class="clearfix w-100 d-md-none pb-3">
              <div class="col-md-3 mb-md-0 mb-3">
                <h5 class="text-uppercase" style="color: gainsboro">Follow us on</h5>
                <ul class="list-unstyled">
                  <li>
                    <a href="#!">Facebook</a>
                  </li>
                  <li>
                    <a href="#!">Twitter</a>
                  </li>
                  <li>
                    <a href="#!">Instagram</a>
                  </li>
                  <li>
                    <a href="#!">Google+</a>
                  </li>
                </ul>
              </div>
              <div class="col-md-3 mb-md-0 mb-3">
                <h5 class="text-uppercase" style="color: gainsboro">Write us at</i></h5>
                <ul class="list-unstyled">
                  <li>
                      <i class='far fa-comment-alt' style='font-size:24px;color: mistyrose'></i>
                  </li>
                  <li>
                    <a href="#!">service.complaint@gmail.com</a>
                  </li>
                  <li>
                    <a href="#!">care.customer@gmail.com</a>
                  </li>
                  <li>
                    <a href="#!">help.customer@gmail.com</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright text-center py-3" style="color: grey">© 2019 Copyright:
            <a href="https://mdbootstrap.com/education/bootstrap/"> TINNODEV</a>
          </div>
        </footer>
        </div>
        <script>
        var preloader=document.getElementById('loader');
        function myFunc(){
          preloader.style.display='none';
        }
        </script>
        </body>
        </html>

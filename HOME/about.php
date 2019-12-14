<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>About Us</title>
  <style>
  .centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
  </style>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="preloader.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="shortcut icon" href="icon1.ico" type="image/x-icon">
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
        <li class="active"><a href="about.php">About Us</a></li>
        <li><a href="cntt.php">Contact Us</a></li>
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
<h1 style="text-align: center;color:rgb(82, 81, 78)">Understand Us Better</h1>
<div class="container">
    <div class="row">
        <img src="pp (22).jpg" width="100%" height="400px">
        <div class="centered"><h1 style="color: rgb(46, 45, 44);font-size: 50px;text-align: center">Making Living Easier</h1></div>
    </div>
</div>
<h1 style="text-align: center">About Us</h1>
<div class="container">
    <p style="text-align: center;font-size: 25px;">Linen provides needy and handy services to the people who are new to a location .One who does not know much about the location 
    and is in need of some help.He can just use the website and can make his work done without creating much fuss.The main focus is to make your life easy and smooth going.
We also aim at promoting individual labours in the city.They just need to register with us.</p></div>
<br>
<h1 style="text-align: center;color:rgb(82,81,78)">Still have some ?.Here are some FAQs!</h1>
<div class="container">
        <p style="text-align: center;font-size: 30px;">How do I get started?</p>
        <p style="text-align: center;font-size: 25px;color: crimson">You just need to register with us by creating an account.You can find the link in the top right corner.</p>
        <p style="text-align: center;font-size: 30px;">How can I book the service?</p>
        <p style="text-align: center;font-size: 25px;color: crimson">After logging in.Click on service tab.Select the service you want.Select the right manfor you.And just ping him.</p>
        <p style="text-align: center;font-size: 30px;">What are payments option avaible?</p>
        <p style="text-align: center;font-size: 25px;color: crimson">Currently user can have COD,GooglePay or PayTM.</p>
        <p style="text-align: center;font-size: 30px;">How much time will it take to reach the destination?</p>
        <p style="text-align: center;font-size: 25px;color: crimson">It depends on the person you hire and the traffic at that time.</p>
    </div>
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

<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Plumber</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="icon1.ico" type="image/x-icon">
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
      <li class="active"><a href="home.php">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Service <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="cleaning.php">Cleaning</a></li>
          <li><a href="electric.php">Electric</a></li>
          <li><a href="plumber.php">Plumbing & Water</a></li>
          <li><a href="salon.php">Personal care</a></li>
        </ul>
      </li>
      <li><a href="about.php">About Us</a></li>
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
    <img src="plumber.jpg" class="center-block">

<h1 style="text-align: center;font-size: 40px"> PLUMBER SERVICES</h1>
<hr style="height: 0.4cm ">
<img src="plum.jpg" class="center-block">
<br>
<h2 style="text-align: center;font-size: 30px"> BATHROOM CLEANING</h2>
<hr style="height: 0.4cm;width: 40% ">
<p class="text-center">
    <i><b>"Treat me well and keep me clean i won't tell anyone what i have seen"</b></i><br>-Commode<br>
    Hey commode we'll not upset you because we know the consequences.<br> We offer you city's best cleaning-<br>
    <b>
            Drain cleaning | 
            Faucet repair and installation | 
            Leak repair | 
            Shower repair<br>
            Sink repair | 
            Bathroom water pipe relocation | 
            Clogged toilet repair | 
            Running toilet repair<br>
            Showerhead repair and replacement
    </b>

</p>
      <hr style="height: 0.4cm ">
      <img src="kp.jpg" class="center-block" >
      <h3 style="text-align: center"> KITCHEN PLUMBING</h3>
      <p class="text-center">
            <i><b>"Happiness is a small house, with a big kitchen"
                    </b></i><br>-Alfred Hitchcock<br>
            Big kitchen multiple issues. NO thats not true.We'll get those leaking pipes repaired<br> Get them repaired-<br>
            <b style="font-size: 17px">
                    Dishwasher repair and installation | 
                    Faucet repair and installation
                   <br>  Garbage disposal repair and installation | 
                   Blocked drain clearing<br>
                   Water supply lines repair and installation
            </b>
          </p>
      
    
      <hr style="height: 0.4cm ">
      <img src="pool.jpg" class="center-block">
      <h3 style="text-align: center"> OUTDOOR PLUMBING</h3>
      <p class="text-center">
            <i><b>"Happiness is a small house, with a big kitchen"
                    </b></i><br>-Hitchcock<br>
            We promise we'll elevate your pool experience and beautify your garden.<br> Get them repaired-<br>
            <b style="font-size: 17px">
                    Pool plumbing | Frozen pipe repair | Gas supply fitting <br> Irrigation system repair and installation
            </b>
          </p>
          <hr style="height: 0.4cm ">
          <h3 style="text-align: center"> OTHER COMMON ISSUES</h3>
          <p class="text-center">
                       <b>Water heater repairs and replacement | 
                                Tankless water heater installation and repair | 
                                Sewer repair <br>cleaning and replacement | 
                                Sump pumps repair, cleaning and replacement <br>
                                Camera inspection | 
                                High-power water jetting | 
                                Back flow prevention & testing<br>
                                Floor drain repair and installation | 
                                Water saving equipment installation
                </b>
              </p>
              <br>
              <br>
              <h2 style="text-align: center">Price list</h2>
              <div class="row">
                  
                    <div class="col-md-2"><h4 style="text-align: center">Work-Type</h4></div>
                    <div class="col-md-6"><h4 style="text-align: center">Work included</h4></div>
                    <div class="col-md-4"><h4 style="text-align: center">Labour charges</h4></div>
              </div>
              <div class="row">
                    <div class="col-md-2"><h4 style="text-align: center">Light</h4></div>
                  <div class="col-md-6"><h4 style="text-align: center">Drain cleaning , Faucet repair and installation , Leak repair , 
            Shower repair, Dishwasher repair and installation , 
                    Faucet repair and installation ,Pool plumbing , Frozen pipe repair , Gas supply fitting, Tankless water heater installation and repair , 
                                Sewer repair </h4></div>
                  <div class="col-md-4"><h4 style="text-align: center">Rs. 150</h4></div>
              </div>
              <div class="row">
                    <div class="col-md-2"><h4 style="text-align: center">Medium</h4></div>
                  <div class="col-md-6"><h4 style="text-align: center">cleaning and replacement , 
                                Sump pumps repair, cleaning and replacement <br>
                                Camera inspection , 
                                High-power water jetting , 
                                Back flow prevention & testing,Irrigation system repair and installation ,Garbage disposal repair and installation , 
                   Blocked drain clearing ,Sink repair , Bathroom water pipe relocation , Clogged toilet repair , Running toilet repair</h4></div>
                  <div class="col-md-4"><h4 style="text-align: center">Rs. 200</h4></div>
              </div>
              <div class="row">
                    <div class="col-md-2"><h4 style="text-align: center">Heavy</h4></div>
                  <div class="col-md-6"><h4 style="text-align: center"> Floor drain repair and installation , 
                                Water saving equipment installation, Showerhead repair and replacement</h4></div>
                  <div class="col-md-4"><h4 style="text-align: center">Rs. 350</h4></div>
              </div>
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
</div>
<script>
var preloader=document.getElementById('loader');
function myFunc(){
  preloader.style.display='none';
}
</script>
</body>
</html>

<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Electrician</title>
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
     <!--Navbar
     <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
           
            <a class="navbar-brand" href="#"><img src="icon1.ico"></a>
          
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#">Home</a>
              </li>
           
              <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                      Services
                    </a>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="plumber.php">Plumber</a>
                      <a class="dropdown-item" href="carpenter.php">Carpenter</a>
                      <a class="dropdown-item" href="electrician.php">Electrician</a>
                      <a class="dropdown-item" href="doctor.php">Doctor</a>
                      <a class="dropdown-item" href="salon.php">Personal</a>

                    </div>
                  </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link 2</a>
              </li>
          
              
            </ul>
          </nav>
        -->
    <img class="center-block" src="bck.jpg">

    <p class="text-center"><b>Its not about the quality of appliances <br>but sometimes its about the Professionals
    <br> - Ayush Srivastav</p></b>

<h1 style="text-align: center;font-size: 40px"> ELECTRICAL SERVICES</h1>
<hr style="height: 0.4cm ">


<img src="socket.jpg" class="center-block">
<br>
<h3 style="text-align: center">Minor Fixes</h3>
<p class="text-center">
    <i><b>"Too many minor mistakes will eventually lead you to major one"</b></i><br>-Havells<br>
    Hey there dont worry we are here for you.<br> Get them repaired-<br>
    <b>
        FUSE | SWITCHES | FAN | BULBS <br> ROUTERS | HEATER | IRON etc.
    </b>

</p>
      <hr style="height: 0.4cm ">
      <img src="wiring.png" class="center-block">
      <h3 style="text-align: center">House Wiring</h3>
      <p class="text-center" >
            <i><b>"A thin wire can lead you to a thick problem. Deal with then efficiently"</b></i><br>-Finolex<br>
            Hey there dont worry we are here for you.<br> Get them repaired-<br>
            <b style="font-size: 15px">
                FULL HOUSE WIRING | MINOR WIRING | OUTDOOR WIRING | SHORT CIRCUIT <br> LIGHTING | EVENT LIGHTINING etc.
            </b>
          </p>
</div>
      
    
      <hr style="height: 0.4cm ">

<img src="huge.jfif" class="center-block">
<h3 style="text-align: center">Big appliances</h3>
<p class="text-center" style="font-size:20px">
        <i><b>"A good technician is one who return for every penny invested"</b></i><br>-UrbanClap<br>
        Dont't worry we'll provide you city best technicians for appliances that matters for you the most.<br> Get them repaired-<br>
        <b style="font-size: 15px">
            AC REPAIR | COOLER | REFRIGERATOR | WASHING MACHINE <br> EXHAUST | MOTOR | INVERTER | MIXER <br> MICROWAVE | TOASTER | GEYSER .
        </b>
    </p>

    <hr style="height: 0.4cm ">

<img src="lap.jfif" class="center-block">
<h3 style="text-align: center">Laptop And Dekstops</h3>
<p class="text-center" style="font-size:20px">
        <i><b>"For a middle class family laptops are investements."</b></i><br>-Dell<br>
        Dont't worry we know as a young develpers how it feels to see you Laptop running out of condition<br> Get them repaired-<br>
        <b style="font-size: 15px">
            CPU  | UPS | ADAPTER | HDD <br> INTERNAL ISSUE | VIRUS | ANTIVIRUS INSTALLATION | WINDOWS INSTLL. <br> BACKUP ISSUE | DISPLAY | MOUSE/KEYBOARD .
        </b>
    </p>

    <hr style="height: 0.4cm ">

<img src="mob.jpg" class="center-block">
<h3 style="text-align: center">Smartphones And Accessories</h3>
<p class="text-center" style="font-size:20px">
        <i><b>" 21st century human can't think straight with smartphone"</b></i><br>-Dell<br>
        Dont't worry we won't let you go mad running around unskilled technicians.<br> Get them repaired-<br>
        <b style="font-size: 15px">
            DISPLAY  , BATTERY , CHARGER , ACCESSORIES <br> MICROPHONE , SPEAKER , LAGGING PHONE , TOUCH RESPONSE
        </b>
    </p>
    <hr style="height: 0.4cm ">
    <h2 style="text-align: center">Price list</h2>
              <div class="row">
                  
                    <div class="col-md-2"><h4 style="text-align: center">Work-Type</h5></div>
                    <div class="col-md-6"><h4 style="text-align: center">Work included</h5></div>
                    <div class="col-md-4"><h4 style="text-align: center">Labour charges</h5></div>
              </div>
              <div class="row">
                    <div class="col-md-2"><h5 style="text-align: center">Light</h5></div>
                  <div class="col-md-6"><h5 style="text-align: center">FUSE , SWITCHES , FAN , BULBS , FULL HOUSE WIRING , MINOR WIRING , OUTDOOR WIRING 
                  AC REPAIR , COOLER , REFRIGERATOR , WASHING MACHINE , CPU  , UPS , ADAPTER , HDD ,DISPLAY  , BATTERY , CHARGER , ACCESSORIES</h5></div>
                  <div class="col-md-4"><h5 style="text-align: center">Rs. 150</h5></div>
              </div>
              <div class="row">
                    <div class="col-md-2"><h5 style="text-align: center">Medium</h5></div>
                  <div class="col-md-6"><h5 style="text-align: center"> MICROPHONE , SPEAKER , LAGGING PHONE , TOUCH RESPONSE, INTERNAL ISSUE , VIRUS , ANTIVIRUS INSTALLATION , WINDOWS INSTLL. 
                  EXHAUST , MOTOR , INVERTER , MIXER ,ROUTERS , HEATER , IRON </h5></div>
                  <div class="col-md-4"><h5 style="text-align: center">Rs. 200</h5></div>
              </div>
              <div class="row">
                    <div class="col-md-2"><h5 style="text-align: center">Heavy</h5></div>
                  <div class="col-md-6"><h5 style="text-align: center">  BACKUP ISSUE , DISPLAY , MOUSE/KEYBOARD . </h5></div>
                  <div class="col-md-4"><h5 style="text-align: center">Rs. 350</h5></div>
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
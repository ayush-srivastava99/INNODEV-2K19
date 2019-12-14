<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home-Diensten</title>
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
      <a class="navbar-brand" href="home.php"><img src="icon1.ico"></a>
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
<div class="container" style="height: 100">
      <center> 
            <h1 class="text-success">WE LIVE TO MAKE YOUR LIVING EASIER</h1> 
            <div id="myCarousel" class="carousel slide" data-ride="carousel"> 
                <!-- Indicators -->
                <ol class="carousel-indicators"> 
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li> 
                    <li data-target="#myCarousel" data-slide-to="1"></li> 
                    <li data-target="#myCarousel" data-slide-to="2"></li> 
                </ol> 
                <!-- Wrapper for slides -->
                <div class="carousel-inner" style="height: 500px;width:100%"> 
                    <div class="item active"> 
                        <img src= "p (1)1.jpg" alt="Oops! Connection problem" width="100%" height="500px"> 
                        <div class="carousel-caption">
                          <p>Thank you</p>
                          <h3>Hello world</h3>

                        </div>
                    </div> 
                    <div class="item"> 
                        <img src= "p (2)2.jpg" width="100%" height="500px" alt="Oops! Connection problem">
                        <div class="carousel-caption">
                          <h3>Hello world2</h3>
                        </div> 
                    </div> 
                    <div class="item"> 
                        <img src= "p (3).jpg" width="100%" height="500px" alt="Oops! Connection problem">
                        <div class="carousel-caption">
                          <h3>Hello world3</h3>
                        </div> 
                    </div> 
                </div> 
               
                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev"> 
                    <span class="glyphicon glyphicon-chevron-left"></span> 
                    <span class="sr-only">Previous</span> 
                </a> 
                <a class="right carousel-control" href="#myCarousel" data-slide="next"> 
                    <span class="glyphicon glyphicon-chevron-right"></span> 
                    <span class="sr-only">Next</span> 
                </a> 
          </div> 
      </center>
      </div> 
      <br>
      <div class="container" style="background-color: rgb(211, 198, 198);width: 95%;padding-top: 10px;">
        <div class="row" style="background-color: rgb(211, 198, 198);">
            <div class="col-md-2 "><i class='fas fa-ambulance' style='font-size:48px;color:red;margin-left: 25px;'></i>
              <br>
              <label style="margin-left:20px ">Healthcare</label>
              </div>
            <div class="col-md-2 "><i class='fas fa-car-battery' style='font-size:48px;color:red;margin-left: 35px;'></i><br>
            <label style="margin-left:20px">Electric Repair</label></div>
              <div class="col-md-2 "><i class='fas fa-home' style='font-size:48px;color:red;margin-left:40px'></i><br>
              <label style="margin-left:20px;">House Cleaning</label>
              </div>
                <div class="col-md-2 "><i class='fas fa-tools' style='font-size:48px;color:red;margin-left:25px;'></i><br>
                <label style="margin-left:20px">Bath Fixes</label></div>
                  <div class="col-md-2 "><i class='fas fa-cut' style='font-size:48px;color:red;margin-left:40px;'></i><br>
                  <label style="margin-left:20px">Salon & Makeup</label></div>
                    <div class="col-md-2 "><i class='fas fa-shopping-basket' style='font-size:48px;color:red;margin-left:25px'></i><br>
                    <label style="margin-left:20px">Shopping</label></div>
        </div>
        </div>
      <br>
      <br>
      <a href="electric.php"><h1 style="text-align: center">Electric services</h1></a>
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <img src="pp (13).jpg" alt="Oops! Connection problem" width="100%" height="200px"><br>
            <p>New Connections</p>
          </div>
          <div class="col-md-3 col-sm-6">
              <img src="pp (8).jpg" alt="Oops! Connection problem" width="100%" height="200px"><br>
              <p>Ac service and repair</p>
            </div>
            <div class="col-md-3 col-sm-6">
                <img src="pp (9).jpg" alt="Oops! Connection problem" width="100%" height="200px"><br>
                <p>Pole problems</p>
              </div>
              <div class="col-md-3 col-sm-6">
                  <img src="pp (2).jpg" alt="Oops! Connection problem" width="100%" height="200px"><br>
                  <p>Meter problems</p>
                </div>
        </div>
      </div>
      <br>
      <a href="salon.php"><h1 style="text-align: center">Personal Care</h1></a>
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <img src="pp (6).jpg" alt="Oops! Connection problem" width="100%" height="200px"><br>
            <p>Salon Booking</p>
          </div>
          <div class="col-md-3 col-sm-6">
              <img src="pp (15).jpg" alt="Oops! Connection problem" width="100%" height="200px"><br>
              <p>nearby Barbers</p>
            </div>
            <div class="col-md-3 col-sm-6">
                <img src="pp (18).jpg" alt="Oops! Connection problem" width="100%" height="200px"><br>
                <p>Hair designing</p>
              </div>
              <div class="col-md-3 col-sm-6">
                  <img src="pp (19).jpg" alt="Oops! Connection problem" width="100%" height="200px"><br>
                  <p>Other treatments</p>
                </div>
        </div>
      </div>
      <br>
      <a href="plumber.php"><h1 style="text-align: center">Bath Fixes</h1></a>
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <img src="pp (14).jpg" alt="Oops! Connection problem" width="100%" height="200px"><br>
            <p>Faucets repairing</p>
          </div>
          <div class="col-md-3 col-sm-6">
              <img src="pp (5).jpg" alt="Oops! Connection problem" width="100%" height="200px"><br>
              <p>New fittings</p>
            </div>
            <div class="col-md-3 col-sm-6">
                <img src="pp (21).jpg" alt="Oops! Connection problem" width="100%" height="200px"><br>
                <p>Tiling and leakages</p>
              </div>
              <div class="col-md-3 col-sm-6">
                  <img src="pp (7).jpg" alt="Oops! Connection problem" width="100%" height="200px"><br>
                  <p>Other washroom solutions</p>
                </div>
        </div>
      </div>
      <br>
      <a href="electric.php"><h1 style="text-align: center">Cleaning Services</h1></a>
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <img src="pp (12).jpg" alt="Oops! Connection problem" width="100%" height="200px"><br>
            <p>Daily maids</p>
          </div>
          <div class="col-md-3 col-sm-6">
              <img src="pp (11).jpg" alt="Oops! Connection problem" width="100%" height="200px"><br>
              <p>Workers for functions</p>
            </div>
            <div class="col-md-3 col-sm-6">
                <img src="pp (16).jpg" alt="Oops! Connection problem" width="100%" height="200px"><br>
                <p>Rigorous cleaning of furnitures</p>
              </div>
              <div class="col-md-3 col-sm-6">
                  <img src="pp (20).jpg" alt="Oops! Connection problem" width="100%" height="200px"><br>
                  <p>Pesticides & Insecticides</p>
                </div>
        </div>
      </div>
      <br>
      <a href="explore.php"><h1 style="text-align: center">Explore Surroundings</h1></a>
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <img src="pp (10).jpg" alt="Oops! Connection problem" width="100%" height="200px"><br>
            <p>Local Makets</p>
          </div>
          <div class="col-md-3 col-sm-6">
              <img src="pp (4).jpg" alt="Oops! Connection problem" width="100%" height="200px"><br>
              <p>Food Outlets</p>
            </div>
            <div class="col-md-3 col-sm-6">
                <img src="pp (3).jpg" alt="Oops! Connection problem" width="100%" height="200px"><br>
                <p>Fuel Substations</p>
              </div>
              <div class="col-md-3 col-sm-6">
                  <img src="pp (1).jpg" alt="Oops! Connection problem" width="100%" height="200px"><br>
                  <p>Other Spots</p>
                </div>
        </div>
      </div>
      <br>
  <!--FOOTER-->
      <div style="background-color: rgb(57, 54, 58)">
<footer class="page-footer font-small blue pt-4">

 
  <div class="container-fluid text-center text-md-left">

 
    <div class="row">

   
      <div class="col-md-6 mt-md-0 mt-3">

      
        <h5 class="text-uppercase" style="color: gainsboro">Diensten</h5>
        <p style="color: ivory">Our main aim is to make your living easier if you are moving to new city.</p>

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

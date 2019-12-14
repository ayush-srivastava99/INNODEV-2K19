<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Salon</title>
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


    <img class="center-block" src="salon1.jpg"> 
    <h3 class="text-center">Where we love to exceed your expectations <br>You deserve nothing but the best.
    <br> - kURBANkLAP</h3>

<h1 style="text-align: center;font-size: 40px"> PERSONAL CARE</h1>
<hr style="height: 0.4cm ">

      <hr style="height: 0.4cm ">

<img src="bridal.jpg" class="center-block">
<h3 style="text-align: center">Bridal Makeup</h3>
<p class="text-center" style="font-size:20px">
        <i>“The most beautiful makeup of a woman is passion. But cosmetics are easier to buy.”</i> <br>
        ― Yves Saint Laurent<br>
        With more than 100s of world best Bridal Makeup Artists <br> we promise your wedding day will be the Best Reflection of The Real You.<br>
        Differnt Offered Style-<b><br>
        HD Makeup | Airbrush Makeup |  Matte Makeup |   Mineral Makeup <br>
        Natural Makeup | Shimmer Makeup | Smokey Makeup</b>
    </p>


    <hr style="height: 0.4cm ">

<img src="wax.png" class="center-block">
<h3 style="text-align: center">Waxing And Threading</h3>
<p class="text-center" style="font-size:20px">
        <b><i>"Pain while doing waxing is Worse than a breaup"</i></b><br>
        - Ayush <br>
        Don't worry MISS Pretty , our professionals wont hurt you<br>
        Manicures And Padicures offered-<br>
        <b>
                Soft wax |
                Hard Wax |
                Fruit Wax | <br>
                Sugar wax |
                Chocolate Wax

    </b>
    </p>
    <hr style="height: 0.4cm ">


    <hr>


<h2 style="text-align: center">Price list</h2>
              <div class="row">
                  
                    <div class="col-md-2"><h4 style="text-align: center">Work-Type</h4></div>
                    <div class="col-md-6"><h4 style="text-align: center">Work included</h4></div>
                    <div class="col-md-4"><h4 style="text-align: center">Labour charges</h4></div>
              </div>
              <div class="row">
                    <div class="col-md-2"><h4 style="text-align: center">Light</h4></div>
                  <div class="col-md-6"><h4 style="text-align: center">Swedish massage ,  Hot stone massage ,  Aromatherapy massage , Deep tissue massage
                  Afro Fade , Undercut Comb Over Pomp 
                  HD Makeup , Airbrush Makeup ,  Matte Makeup ,   Mineral Makeup ,Soft wax 
                Hard Wax</h4></div>
                  <div class="col-md-4"><h4 style="text-align: center">Rs. 250</h4></div>
              </div>
              <div class="row">
                    <div class="col-md-2"><h4 style="text-align: center">Medium</h4></div>
                  <div class="col-md-6"><h4 style="text-align: center">  American  , Gel manicure , Paraffin , Natural Makeup , Shimmer Makeup , Smokey Makeup 
                  Sports massage , Trigger point massage , Reflexology , Shiatsu massage</h4></div>
                  <div class="col-md-4"><h4 style="text-align: center">Rs. 350</h4></div>
              </div>
              <div class="row">
                    <div class="col-md-2"><h4 style="text-align: center">Heavy</h4></div>
                  <div class="col-md-6"><h4 style="text-align: center">  Thai massage , Prenatal massage , Couple’s massage , Chair massage</h4></div>
                  <div class="col-md-4"><h4 style="text-align: center">Rs. 500</h4></div>
              </div>
<!--footer-->
<br><br>
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

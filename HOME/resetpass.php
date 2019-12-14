<?php
session_start();
$_SESSION["type"]=$_GET['link'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Reset Password</title>
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
        <li><a href="surrounding.php"><span class="glyphicon glyphicon-shopping-cart"></span> Nearby</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="loging-emp.php"><span class="glyphicon glyphicon-user"></span> Employ</a>
        </li>
        <li><a href="login-user.php"><span class="glyphicon glyphicon-log-in"></span> User</a>
        </li>
      </ul>
    </div>
  </nav>
    <div class="container">
        <h2 style="text-align:center">Enter your username to get started</h2>
        <br><br><br>
        <div class="col-md-6 col-md-offset-3">
        <form action="reset.php" method="POST">
            <input type="text" class="form-control" name="uname" placeholder="Username">
            <br>
            <br>
            <button type="submit" class="btn btn-primary btn-block">Submit</button>
        </form>
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

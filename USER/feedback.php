<?php
session_start();
if(!isset($_SESSION['loggedinuser']))
{
    echo "<script type='text/javascript'>alert('You need to login first');
    window.location='login-user.php';
    </script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<style>
.slidecontainer {
  width: 100%;
}

.slider {
  -webkit-appearance: none;
  width: 30%;
  height: 15px;
  border-radius: 5px;
  background: #d3d3d3;
  outline: none;
  opacity: 0.7;
  -webkit-transition: .2s;
  transition: opacity .2s;
}

.slider:hover {
  opacity: 1;
}

.slider::-webkit-slider-thumb {
  -webkit-appearance: none;
  appearance: none;
  width: 25px;
  height: 25px;
  border-radius: 50%;
  background: blue;
  cursor: pointer;
}

.slider::-moz-range-thumb {
  width: 25px;
  height: 25px;
  border-radius: 50%;
  background: #4CAF50;
  cursor: pointer;
}
</style>
  <title>Profile-User</title>
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
      <a class="navbar-brand" href="#">Lenin</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Profile</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Service <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Cleaning</a></li>
          <li><a href="#">Electric</a></li>
          <li><a href="#">Plumbing & Water</a></li>
          <li><a href="#">Personal care</a></li>
        </ul>
      </li>
      <li><a href="#">Booking</a></li>
      <li><a href="#">About Us</a></li>
      <li><a href="#">Contact Us</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span>Nearby</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><?php echo $_SESSION['uname']; ?></a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Logout</a>
      </li>
    </ul>
  </div>
</nav>
<h1 style="text-align: center">Welcome back,<p><?php echo $_SESSION['name']; ?></p></h1>
<div class="row" style="border: 1px solid black;margin-left:10px;margin-right:10px;">
  <h1 style="text-align: center">Available feedback</h1>
  <div class="col-md-2" style="text-align: center;font-size:20px;">Service Id</div>
<div class="col-md-2"style="text-align: center;font-size:20px;">Date & Time</div>
<div class="col-md-2" style="text-align: center;font-size:20px;">Worker</div>
<div class="col-md-2"style="text-align: center;font-size:20px;">Work-type</div>
<div class="col-md-2" style="text-align: center;font-size:20px;">Location</div>
<div class="col-md-2" style="text-align: center;font-size:20px;">Status</div>
<br><br>
<?php
$con=mysqli_connect('localhost','diens','user');
mysqli_select_db($con,'dien');
$unname=$_SESSION['uname'];
$query="SELECT * from Booking where username='$unname' AND userfeed='No'";
$result=mysqli_query($con,$query);
$count=0;
while($row=mysqli_fetch_array($result))
{
    $id=$row[0];
    $date=$row[3];
    $loc=$row[4];
    $wor=$row[5];
    $wt=$row[7];
    $st=$row[9];
      $count=$count+1;
    echo "<div class='col-md-2' style='text-align: center;font-size:20px;'>".$id."</div>";
    echo "<div class='col-md-2'style='text-align: center;font-size:20px;'>".$date."</div>";
    echo "<div class='col-md-2' style='text-align: center;font-size:20px;''>".$wor."</div>";
    echo "<div class='col-md-2'style='text-align: center;font-size:20px;'>".$wt."</div>";
    echo "<div class='col-md-2' style='text-align: center;font-size:20px;''>".$loc."</div>";
    echo "<div class='col-md-2' style='text-align: center;font-size:20px;'>".$st."</div>"; 
    echo "<br><br>";
    echo "<form action='verify.php' method='POST'>";
    echo "<div class='col-md-3'><input type='number' class='form-control' maxlength='4' name='otp' placeholder='OTP'></div>";
    echo "<input type='hidden' name='wid' value='".$id."'>";
    echo "<div class='col-md-3'><button type='submit' class='btn btn-success btn-block'>VERIFY</button></div>";
    echo "</form>";
    echo "<form action='cancel-user.php' method='POST'>";
      echo "<input type='hidden' name='wid' value='".$id."'>";
      echo "<div class='col-md-6'><button type='submit' class='btn btn-success btn-block'>CANCEL BOOKING</button></div>";
      echo "</form>";
      echo "<br><br><br>";
    
    echo "<br>";


}
if($count==0)
{
  echo "<br><br>";
$txt="No ongoing booking";
echo "<h1 style='text-align:center'>".$txt."</h1>";
}
?>
<br>
</div>
<br>
<br>
<div class="row" style="border: 1px solid black;margin-left:10px;margin-right:10px;">
<br>
<h1 style="text-align: center">Your Past Booking</h1>
<br>
<div class="col-md-2" style="text-align: center;font-size:20px;">Service Id</div>
<div class="col-md-2"style="text-align: center;font-size:20px;">Date & Time</div>
<div class="col-md-2" style="text-align: center;font-size:20px;">Worker</div>
<div class="col-md-2"style="text-align: center;font-size:20px;">Work-type</div>
<div class="col-md-2" style="text-align: center;font-size:20px;">Location</div>
<div class="col-md-2" style="text-align: center;font-size:20px;">Status</div>
<?php
$con=mysqli_connect('localhost','diens','user');
mysqli_select_db($con,'dien');
$unname=$_SESSION['uname'];
$query="SELECT * from Booking where username='$unname'";
$result=mysqli_query($con,$query);
$count=0;
while($row=mysqli_fetch_array($result))
{
    
    $id=$row[0];
    $date=$row[3];
    $loc=$row[4];
    $wor=$row[5];
    $wt=$row[7];
    $st=$row[9];
    if($st!="Pending"&&$st!="Ongoing"&&$st!="Onway")
    {
      $count=$count+1;
    echo "<div class='col-md-2' style='text-align: center;font-size:20px;'>".$id."</div>";
    echo "<div class='col-md-2'style='text-align: center;font-size:20px;'>".$date."</div>";
    echo "<div class='col-md-2' style='text-align: center;font-size:20px;''>".$wor."</div>";
    echo "<div class='col-md-2'style='text-align: center;font-size:20px;'>".$wt."</div>";
    echo "<div class='col-md-2' style='text-align: center;font-size:20px;''>".$loc."</div>";
    echo "<div class='col-md-2' style='text-align: center;font-size:20px;'>".$st."</div>"; 
    echo "<br>";
    }


}
if($count==0)
{
$txt="No bookings found";
echo "<br><br>";
echo "<h1 style='text-align:center'>".$txt."</h1>";
}
?>
<br><br><br>
</div>
<br>
<br><br><br><br><br><br>
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

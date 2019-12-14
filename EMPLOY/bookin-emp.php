<?php
session_start();
if(!isset($_SESSION['loggedin']))
{
    echo "<script type='text/javascript'>alert('You need to login first');
    window.location='loging-emp.php';
    </script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Profile-Emp</title>
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
      <li class="active"><a href="profile-emp.php">Profile</a></li>
      <li><a href="bookin-emp.php">Booking</a></li>
      <li><a href="about.php">About Us</a></li>
      <li><a href="cntt.php">Contact Us</a></li>
      <li><a href="appoint-emp.php">Appoitment</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><?php echo $_SESSION['uname']; ?></a></li>
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a>
      </li>
    </ul>
  </div>
</nav>
<h1 style="text-align: center">Welcome back,<p><?php echo $_SESSION['name']; ?></p></h1>
<div class="row" style="border: 1px solid black;margin-left:10px;margin-right:10px;">
  <h1 style="text-align: center">Ongoing Booking</h1>
  <div class="col-md-1" style="text-align: center;font-size:20px;">Service Id</div>
  <div class="col-md-1" style="text-align: center;font-size:20px;">Contact</div>
<div class="col-md-2"style="text-align: center;font-size:20px;">Date & Time</div>
<div class="col-md-2" style="text-align: center;font-size:20px;">user</div>
<div class="col-md-2"style="text-align: center;font-size:20px;">Work-type</div>
<div class="col-md-2" style="text-align: center;font-size:20px;">Location</div>
<div class="col-md-2" style="text-align: center;font-size:20px;">Status</div>
<br><br>
<?php
$con=mysqli_connect('localhost','diens','user');
mysqli_select_db($con,'dien');
$unname=$_SESSION['uname'];
$query="SELECT * from Booking where Worker='$unname'";
$result=mysqli_query($con,$query);
$count=0;
while($row=mysqli_fetch_array($result))
{
    $id=$row[0];
    $date=$row[3];
    $loc=$row[4];
    $user=$row[1];
    $wt=$row[7];
    $ucon=$row[2];
    $st=$row[9];
    $otp=$row[8];
    if($st=="Pending")
    {
      $count=$count+1;
    echo "<div class='col-md-1' style='text-align: center;font-size:20px;'>".$id."</div>";
    echo "<div class='col-md-1' style='text-align: center;font-size:20px;'>".$ucon."</div>";
    echo "<div class='col-md-2'style='text-align: center;font-size:20px;'>".$date."</div>";
    echo "<div class='col-md-2' style='text-align: center;font-size:20px;''>".$user."</div>";
    echo "<div class='col-md-2'style='text-align: center;font-size:20px;'>".$wt."</div>";
    echo "<div class='col-md-2' style='text-align: center;font-size:20px;''>".$loc."</div>";
    echo "<div class='col-md-2' style='text-align: center;font-size:20px;'>".$st."</div>"; 
    echo "<br><br>";
    echo "<form action='4map.php' method='POST'>";
      echo "<input type='hidden' name='wid' value='".$id."'>";
      echo "<div class='col-md-3'><button type='submit' class='btn btn-success btn-block'>SHOW IN MAP</button></div>";
      echo "</form>";

    echo "<form action='accept.php' method='POST'>";
      echo "<input type='hidden' name='wid' value='".$id."'>";
      echo "<div class='col-md-6'><button type='submit' class='btn btn-success btn-block'>ACCEPT BOOKING</button></div>";
      echo "</form>";
      echo "<form action='cancel-emp.php' method='POST'>";
      echo "<input type='hidden' name='wid' value='".$id."'>";
      echo "<div class='col-md-3'><button type='submit' class='btn btn-primary btn-block'>CANCEL BOOKING</button></div>";
      echo "</form>";
      echo "<br><br><br>";
    }
    if($st=="Onway")
    {
      $count=$count+1;
    echo "<div class='col-md-1' style='text-align: center;font-size:20px;'>".$id."</div>";
    echo "<div class='col-md-1' style='text-align: center;font-size:20px;'>".$ucon."</div>";
    echo "<div class='col-md-2'style='text-align: center;font-size:20px;'>".$date."</div>";
    echo "<div class='col-md-2' style='text-align: center;font-size:20px;''>".$user."</div>";
    echo "<div class='col-md-2'style='text-align: center;font-size:20px;'>".$wt."</div>";
    echo "<div class='col-md-2' style='text-align: center;font-size:20px;''>".$loc."</div>";
    echo "<div class='col-md-2' style='text-align: center;font-size:20px;'>".$st."</div>"; 
    echo "<br><br>";
    echo "<div class='col-md-4' style='text-align:right;font-size:20px;'>OTP:</div>";
    echo "<div class='col-md-4' style='font-size:20px;'>".$otp."</div>";
      echo "<br><br><br>";
    }
    if($st=="Ongoing")
    {
      $count=$count+1;
    echo "<div class='col-md-1' style='text-align: center;font-size:20px;'>".$id."</div>";
    echo "<div class='col-md-1' style='text-align: center;font-size:20px;'>".$ucon."</div>";
    echo "<div class='col-md-2'style='text-align: center;font-size:20px;'>".$date."</div>";
    echo "<div class='col-md-2' style='text-align: center;font-size:20px;''>".$user."</div>";
    echo "<div class='col-md-2'style='text-align: center;font-size:20px;'>".$wt."</div>";
    echo "<div class='col-md-2' style='text-align: center;font-size:20px;''>".$loc."</div>";
    echo "<div class='col-md-2' style='text-align: center;font-size:20px;'>".$st."</div>"; 
    echo "<br><br><br>";
    }
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
<h1 style="text-align: center">Your past booking</h1>
<br>
<div class="col-md-2" style="text-align: center;font-size:20px;">Service Id</div>
<div class="col-md-2"style="text-align: center;font-size:20px;">Date & Time</div>
<div class="col-md-2" style="text-align: center;font-size:20px;">User</div>
<div class="col-md-2"style="text-align: center;font-size:20px;">Work-type</div>
<div class="col-md-2" style="text-align: center;font-size:20px;">Location</div>
<div class="col-md-2" style="text-align: center;font-size:20px;">Status</div>
<?php
$con=mysqli_connect('localhost','diens','user');
mysqli_select_db($con,'dien');
$unname=$_SESSION['uname'];
$query="SELECT * from Booking where Worker='$unname'";
$result=mysqli_query($con,$query);
$count=0;
while($row=mysqli_fetch_array($result))
{
    
    $id=$row[0];
    $date=$row[3];
    $loc=$row[4];
    $user=$row[1];
    $wt=$row[7];
    $st=$row[9];
    if($st!="Pending"&&$st!="Ongoing"&&$st!="Onway")
    {
      $count=$count+1;
    echo "<div class='col-md-2' style='text-align: center;font-size:20px;'>".$id."</div>";
    echo "<div class='col-md-2'style='text-align: center;font-size:20px;'>".$date."</div>";
    echo "<div class='col-md-2' style='text-align: center;font-size:20px;''>".$user."</div>";
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
            <p style="color: ivory">Our main aim is to make your life easier if you are moving to new city.</p>
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

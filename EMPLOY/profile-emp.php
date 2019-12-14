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
<br>
<?php
$con=mysqli_connect('localhost','diens','user');
  mysqli_select_db($con,'dien');
  $uname=$_SESSION['uname'];
  $s="select * from available where Worker='$uname'";

  $result = mysqli_query($con, $s);

  if($row=mysqli_fetch_array($result))
  {
      $st=$row['status'];
      $wid=$row['Worker'];
      echo "<form action='update.php' method='POST'>";
      echo "<div class='container' style='border:1px solid black'>";
      echo "<div class='col-md-3'><h3 style='text-align:center'>Current Status:</h3></div>";
      echo "<div class='col-md-3'><h3>".$st."</h3></div>";
      echo "<div class='col-md-3'>
      <select class='form-control' name='stat' required style='margin:20px;'>
        <option>Not Available</option>
        <option>Engaged</option>
        <option>Free</option>
      </select>
    </div>";
    echo "<input type='hidden' name='wid' value='".$wid."'>";
    echo "<div class='col-md-3'><input type='submit' style='margin:20px;padding:5px;'></div>";
    echo "</div>";
    echo "</form>";
      
  }
  else
  {
    echo "<h2 style='text-align:center'>Your account is not yet verified</h2>";
  }
  ?>
  <br><br><br>
<div class="container" style="border: 1px solid black;background-color: rgb(250, 225, 237)">
  <div class="col-md-6">
      <?php
      $con=mysqli_connect('localhost','diens','user');
mysqli_select_db($con,'dien');
$nname=$_SESSION['uname'];
$query="SELECT * FROM emp_regis where uname='$nname'";
$query_run=mysqli_query($con,$query);
while($row=mysqli_fetch_array($query_run))
{
    echo '<img src="data:image/jpeg;base64,'.base64_encode($row[9]).'"alt="" height="400px" width="400px" style="border-radius:50%;margin-top:20px;">';
}
?>

  </div>
  <div class="col-md-6">
    <br>
    <h2 style="text-align:center;text-decoration: underline;">CHECK YOUR INFO</h2>
    <br>
    <h2 style="text-align:center">Name:<?php echo $_SESSION['name'] ?></h2>
    <br>
    <h2 style="text-align:center">Username:<?php echo $_SESSION['uname'] ?></h2>
    <br>
    <h2 style="text-align:center">E-mail:<?php echo $_SESSION['mailid'] ?></h2>
    <br>
    <h2 style="text-align:center">Contact:<?php echo $_SESSION['mob'] ?></h2>
    <br>
    <h2 style="text-align:center">Your rating:<?php echo $_SESSION['rat'] ?></h2>
    <br>
    <br>
    <br>
  </div>
  <br>
  <br>
  <br>
</div>
<br><br>
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

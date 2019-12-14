<?php
session_start();
if(!isset($_SESSION['loggedinadmin']))
{
    echo "<script type='text/javascript'>alert('You need to login first');
    window.location='login-user.php';
    </script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Admin-Employes</title>
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
      <a class="navbar-brand" href="#">ADMIN</a>
    </div>
    <ul class="nav navbar-nav">
      <li ><a href="adminbooking.php">Booking</a></li>
      <li ><a href="adminquery.php">Query</a></li>
      <li><a href="adminrating.php">Rating</a></li>
      <li><a href="adminavailable.php">Available</a></li>
      <li class="active"><a href="admin-emp.php">Employes</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><?php echo $_SESSION['uname']; ?></a></li>
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a>
      </li>
    </ul>
  </div>
</nav>
<h1 style="text-align: center">EMPLOYES</h1>
<br>
<div class="row" style="border: 1px solid black;margin-left:10px;margin-right:10px;">
  <h1 style="text-align: center">All EMPLOYES</h1>
  <br><br>
  <div class="col-md-1" style="text-align: center;font-size:20px;">Employ Id</div>
  <div class="col-md-1" style="text-align: center;font-size:20px;">Worker name</div>
<div class="col-md-2"style="text-align: center;font-size:20px;">Worker username</div>
<div class="col-md-1"style="text-align: center;font-size:20px;">Experience</div>
<div class="col-md-1"style="text-align: center;font-size:20px;">Contact</div>
<div class="col-md-1"style="text-align: center;font-size:20px;">Field</div>
<div class="col-md-2"style="text-align: center;font-size:20px;">Email</div>
<div class="col-md-1"style="text-align: center;font-size:20px;">City</div>
<div class="col-md-2"style="text-align: center;font-size:20px;">Speciality</div>
<br><br>
<?php
$con=mysqli_connect('localhost','diens','user');
mysqli_select_db($con,'dien');
$unname=$_SESSION['uname'];
$query="SELECT * from emp_regis";
$result=mysqli_query($con,$query);
$count=0;
while($row=mysqli_fetch_array($result))
{
    $id=$row[0];
    $wor=$row[1];
    $spec=$row[11];
    $city=$row[5];
    $mail=$row[8];
    $field=$row[6];
    $exp=$row[7];
    $wuname=$row[2];
    $cont=$row[4];
      echo "<div class='col-md-1' style='text-align: center;font-size:20px;'>".$id."</div>";
      echo "<div class='col-md-1' style='text-align: center;font-size:20px;'>".$wor."</div>";
    echo "<div class='col-md-2'style='text-align: center;font-size:20px;'>".$wuname."</div>";
    echo "<div class='col-md-1'style='text-align: center;font-size:20px;'>".$exp."</div>";
    echo "<div class='col-md-1'style='text-align: center;font-size:20px;'>".$cont."</div>";
    echo "<div class='col-md-1'style='text-align: center;font-size:20px;'>".$field."</div>";
    echo "<div class='col-md-2'style='text-align: center;font-size:20px;'>".$mail."</div>";
    echo "<div class='col-md-1'style='text-align: center;font-size:20px;'>".$city."</div>";
    echo "<div class='col-md-2'style='text-align: center;font-size:20px;'>".$spec."</div>";
      echo "<br><br><br>";
    }
    ?>
    <br><br><br>
    </div>
    <br><br><br>
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

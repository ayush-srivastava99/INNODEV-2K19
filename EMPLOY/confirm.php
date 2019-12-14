<?php
session_start();
if(!isset($_SESSION['loggedinuser']))
{
    echo "<script type='text/javascript'>alert('You need to login first');
    window.location='login-user.php';
    </script>";
}
$servername = "localhost";
$username = "diens";
$password = "user";
$dbname = "dien";
$uname=$_GET['link'];
$_SESSION["workeruname"]=$_GET['link'];
$conn = new mysqli($servername, $username, $password, $dbname);
$field=$_SESSION["wtype"];
if($field=="Medicine")
header("Location:mediconfirm.php");
if($field=="Doctor")
header("Location:docconfirm.php");

$sql = $sql = "SELECT emp_regis.name,emp_regis.spec,emp_regis.uname,emp_regis.email,emp_regis.city,emp_regis.field,emp_regis.exp,emp_regis.image,rating.rat FROM emp_regis,rating where uname='$uname' and emp_regis.uname = rating.worker";
$result = mysqli_query($conn, $sql);
?> 

<html>
<!DOCTYPE html>
<html>
    <head>
            <title>Confirm-Booking</title>
            <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="icon1.ico" type="image/x-icon">
  <link rel="stylesheet" href="preloader.css">
  <link rel="shortcut icon" href="icon1.ico" type="image/x-icon">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/a3b90de71b.js"></script>
    </head>
<style>
    label{
        font-weight:bold;
    }
    .container{
        width:60%;
        
    }
    table, td, th {  
  border: 1px solid #ddd;
  text-align: left;
}

table {
  border-collapse: collapse;
  width: 40%;
}

th, td {
    text-align:center;
  padding: 15px;
}
.topnav {
    top: 0;
  overflow: hidden;
  background-color:lightseagreen;
  width: 100%;
}

/* Style the topnav links */
.topnav a {
  float: left;
  display: inline;
  color: black;
  text-align: center;
  text-decoration: none;
  padding: 16px 26px;
}

/* Change color on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
   }  
    </style>
<body onload="getLocation()">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><img src="icon1.ico"></a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="profile.php">Profile</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Service <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Cleaning</a></li>
          <li><a href="#">Electric</a></li>
          <li><a href="#">Plumbing & Water</a></li>
          <li><a href="#">Personal care</a></li>
        </ul>
      </li>
      <li><a href="booking.php">Booking</a></li>
      <li><a href="#">About Us</a></li>
      <li><a href="#">Contact Us</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span>Nearby</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><?php echo $_SESSION['uname']; ?></a></li>
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a>
      </li>
    </ul>
  </div>
</nav>
<br><center>
    <table responsive>
               <?php
         $rows=mysqli_fetch_assoc($result);
          $st=$uname;
          echo $st;
                      $s="SELECT * FROM available where Worker='$uname'";
                      $res = mysqli_query($conn, $s);
                      $rr=mysqli_fetch_array($res);
                      
                ?>
   
            <tr> 
                <th colspan="2"><?php echo '<img src="data:image/jpeg;base64,'.base64_encode($rows["image"]).'"alt="" height="80px" width="80px" style="border-radius:50%;margin-top:5px;">';?></th> 
            </tr> 
  
            <tr> 
                <td>Name</td> 
                <td><?php printf ("%s",$rows["name"]);?></td>
            </tr> 
  
            <tr> 
                <td>city</td> 
                <td><?php printf ("%s",$rows["city"]);?></td> 
            </tr> 
            <tr> 
                <td>Speciality</td> 
                <td><?php printf ("%s",$rows["spec"]);?></td> 
            </tr> 
  
            <tr> 
                <td>Availability</td> 
                <td><?php printf ("%s",$rr["status"]);?></td>
            </tr>
            <tr> 
                <td>Average Rating</td> 
                <td><?php printf ("%s",$rows["rat"]);?></td> 
            </tr> 
  
            <tr> 
                <td>E-mail</td> 
                <td><?php printf ("%s",$rows["email"]);?></td>
            </tr>
            <?php
    
    ?>
</table>
        <br>
        <h2> Confirm Booking</h2>
        <hr style="width:60%">
        <!-- Default form login -->
        <div class="container" >
<form class="text-center border border-light p-5" action="abc.php" method="POST">
<!-- send email -->
<input type="hidden" name="email" value="<?php echo  $rows['email'];?>">
<input type="hidden" name="wuname" value="<?php echo  $rows['uname'];?>">
<input type="hidden" id="demo" name="lat">
<input type="hidden" id="demo1" name="long">

<!-- Time of Service -->
<label>Time</label>
<input type="time" id="defaultLoginFormEmail" name="time" class="form-control mb-4" required>

<!-- Address -->
<label>Address</label>
<input type="text" id="defaultLoginFormPassword" name="add" class="form-control mb-4" placeholder="Address" required>
<label>Type Of Service</label><br>
<input type="checkbox" name="heavy" value="heavy"> Heavy
  <input type="checkbox" name="light" value="Medium"> Mediunm
  <input type="checkbox" name="others" value="Light"> Light
  <br>
  <br>
  <div class="form-group green-border-focus">
  <label for="exampleFormControlTextarea5">Describe About the Service Needed</label>
  <textarea  maxlength="100" placeholder="In not more than 100 characters" class="form-control" required name="work" id="exampleFormControlTextarea5" rows="3"></textarea>
</div>

<!-- confirm --><button class="btn btn-info btn-block my-4" type="submit">CONFIRM</button>
</form>
</div>
</center>
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
var x = document.getElementById("demo");
var y = document.getElementById("demo1");

function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else { 
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}

function showPosition(position) {
  x.value=position.coords.latitude;  
  y.value=position.coords.longitude;
}
</script>
</body>
</html>                 
    </body>       
</html>
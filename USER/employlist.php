<?php
session_start();
$servername = "localhost";
$username = "diens";
$password = "user";
$dbname = "dien";
$con=mysqli_connect('localhost','diens','user');
mysqli_select_db($con,'dien');
if($_GET['link']=='electrician'){
$sql = "SELECT emp_regis.name,emp_regis.spec,emp_regis.uname,emp_regis.email,emp_regis.city,emp_regis.field,emp_regis.exp,emp_regis.image,rating.rat FROM emp_regis,rating where field='Electrician' and emp_regis.uname = rating.worker";
$_SESSION['wtype']="Electrician";
}
else
if($_GET['link']=='plumber'){
  $sql = "SELECT emp_regis.name,emp_regis.spec,emp_regis.uname,emp_regis.email,emp_regis.city,emp_regis.field,emp_regis.exp,emp_regis.image,rating.rat FROM emp_regis,rating where field='Plumber' and emp_regis.uname = rating.worker";
  $_SESSION['wtype']="Plumber";  
}
  else
  if($_GET['link']=='cleaner'){
    $sql = "SELECT emp_regis.name,emp_regis.spec,emp_regis.uname,emp_regis.email,emp_regis.city,emp_regis.field,emp_regis.exp,emp_regis.image,rating.rat FROM emp_regis,rating where field='Cleaner' and emp_regis.uname = rating.worker";
    $_SESSION['wtype']="Cleaner";  
  }
    else
    if($_GET['link']=='stylist'){
      $sql = "SELECT emp_regis.name,emp_regis.spec,emp_regis.uname,emp_regis.email,emp_regis.city,emp_regis.field,emp_regis.exp,emp_regis.image,rating.rat FROM emp_regis,rating where field='Barber/Stylist' and emp_regis.uname = rating.worker";
      $_SESSION['wtype']="Barber/Stylist";  
    }
      else
      if($_GET['link']=='medicine'){
        $sql = "SELECT emp_regis.name,emp_regis.spec,emp_regis.uname,emp_regis.email,emp_regis.city,emp_regis.field,emp_regis.exp,emp_regis.image,rating.rat FROM emp_regis,rating where field='Medicine' and emp_regis.uname = rating.worker";
        
        $_SESSION['wtype']="Medicine";
      }
        else
        {
          $sql = "SELECT emp_regis.name,emp_regis.spec,emp_regis.uname,emp_regis.email,emp_regis.city,emp_regis.field,emp_regis.exp,emp_regis.image,rating.rat FROM emp_regis,rating where field='Doctor' and emp_regis.uname = rating.worker";
          $_SESSION['wtype']="Doctor";  
        }
          $result = mysqli_query($con, $sql);
?> 


<!DOCTYPE html>
<html>
    <head>
            <title>employlist</title>
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
   table, th, td {
  border: 1px solid black;
  text-align:center;
  margin:15px;
  
}
table {
  border-collapse: collapse;
  width: 100%;
}

th {
  height: 50px;
}
tr:hover {background-color: lightgrey;}
.overflow{
  overflow-x:auto;
}
@media 
only screen and (max-width: 1024px),
(min-device-width: 900px) and (max-device-width: 1024px)  {

	/* Force table to not be like tables anymore */
	table, thead, tbody, th, td, tr { 
		display: block; 
	}
	
	/* Hide table headers (but not display: none;, for accessibility) */
	thead tr { 
		position: absolute;
		top: -9999px;
		left: -9999px;
	}
	
	tr { border: 1px solid #ccc; }
	
	td { 
		/* Behave  like a "row" */
		border: none;
		border-bottom: 1px solid #eee; 
		position: relative;
		padding-left: 50%; 
	}
	
	td:before { 
		/* Now like a table header */
		position: absolute;
		/* Top/left values mimic padding */
		top: 6px;
		left: 6px;
		width: 45%; 
		padding-right: 10px; 
		white-space: nowrap;
	}
	
	/*
	Label the data
	*/
	td:nth-of-type(1):before { content: "image"; }
	td:nth-of-type(2):before { content: "name"; }
	td:nth-of-type(3):before { content: "username"; }
	td:nth-of-type(4):before { content: "email"; }
	td:nth-of-type(5):before { content: "speciality?"; }
	td:nth-of-type(6):before { content: "rating"; }
	td:nth-of-type(7):before { content: "status"; }
	td:nth-of-type(8):before { content: "available after"; }
	td:nth-of-type(9):before { content: "experience"; }
	td:nth-of-type(10):before { content: "city"; }
  td:nth-of-type(10):before { content: "book"; }
}

    </style>
     <body onload="myFunc()">
       
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
<br>
<div class="overflow">

     <table cellpadding="8">
       <thead>
    <tr>
      <th scope="col">IMAGE</th>
      <th scope="col">NAME</th>
      <th scope="col" >USERNAME</th>
      <th scope="col">EMAIL</th>
      <th scope="col">SPECIALITY</th>
      <th scope="col">RATING</th>
      <th scope="col">STATUS</th>
      <th scope="col">AVAILABLE AFTER</th>
      <th scope="col">EXPERIENCE</th> 
      <th scope="col">CITY</th>
      <th scope="col">BOOK</th>
    </tr>
  </thead>
  <?php
                    while($rows=mysqli_fetch_array($result)){
                      $st=$rows['uname'];
                      $s="SELECT * FROM available where Worker='$st'";
                      $res = mysqli_query($con, $s);
                      $rr=mysqli_fetch_array($res);

                        ?>
                        <tr class="max">
                    <td><?php echo '<img src="data:image/jpeg;base64,'.base64_encode($rows["image"]).'"alt="" height="70px" width="70px" style="border-radius:50%;margin-top:10px;">';?></td>
                 <td><?php printf ("%s",$rows["name"]);?>
                     <td class="exp"><?php printf ("%s",$rows["uname"]);?>
                     <td><?php printf ("%s",$rows["email"]);?> 
                     <td><?php printf ("%s",$rows["spec"]);?>
                     <td><?php printf ("%s",$rows["rat"]);?>     
                     <td><?php printf ("%s",$rr["status"]);?>
                     <td><?php printf ("%s",$rr["expected"]);?>
                     <td class="exp"><?php printf ("%s",$rows["exp"]);?>
                     <td><?php printf ("%s",$rows["city"]);?>
                     <td> <?php echo '<a href="confirm.php?link=' . $rows["uname"] . '">Book</a>';?></td>
                 </tr>
                    
                   <?php
                    }
                   ?>
                    </table>
                  </div>
                  </div>

                    <h2 style="text-align: center">The list of all the workers in the required field is shown above.</h2>
                    <h2 style="text-align: center">Please check the status of the worker before making any booking to avoid inconvinience. </h2>
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
    </body>       
</html>
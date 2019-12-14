<?php
session_start();
if(!isset($_SESSION['loggedinuser']))
{
    echo "<script type='text/javascript'>alert('You need to login first');
    window.location='login-user.php';
    </script>";
}

$username = "iayush.srivastava1999@gmail.com";
	$hash = "377ca5e7bec2398b1dd96058657e2af86a7f276727fdb85ba53fb428497d48c0";

	// Config variables. Consult http://api.textlocal.in/docs for more info.
	$test = "0";
    $otp=rand(1000,9999);
    $_SESSION['otpverif']=$otp;
	// Data for text message. This is the text message data.
	$sender = "TXTLCL"; // This is who the message appears to be from.
	$numbers = $_SESSION['mob']; // A single number or a comma-seperated list of numbers
	$message = "Your OTP for mobile verification is:".$otp;
	// 612 chars or less
	// A single number or a comma-seperated list of numbers
	$message = urlencode($message);
	$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
	$ch = curl_init('http://api.textlocal.in/send/?');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch); // This is the result from the API
	curl_close($ch);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Profile-User</title>
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
<h1 style="text-align: center">Hey<p><?php echo $_SESSION['name']; ?></p>an OTP has been sent to <p><?php echo $_SESSION['mob']; ?></p></h1>
<br>
<div class="container">
    <div class="col-md-6 col-md-offset-3">
            <form action="verify-otp.php" method="POST">
                <input type="number" name="otp"class="form-control" placeholder="OTP">
                <br>
                <button type="submit" class="btn btn-success btn-block">Verify</button>
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
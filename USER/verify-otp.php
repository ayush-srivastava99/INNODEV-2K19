<?php
session_start();
if(!isset($_SESSION['loggedinuser']))
{
    echo "<script type='text/javascript'>alert('You need to login first');
    window.location='login-user.php';
    </script>";
}
$con=mysqli_connect('localhost','diens','user');
mysqli_select_db($con,'dien');

$entered = $_POST['otp'];
$otpformed=$_SESSION['otpverif'];
if($entered==$otpformed){
    $text="Verified";
    $uname=$_SESSION['uname'];
    $s="UPDATE user_regis SET mobverify='$text' WHERE uname='$uname'";

  $result = mysqli_query($con, $s);
  if($result==1){
    echo "<script type='text/javascript'>alert('Mobile number verified');
    window.location='profile.php';
</script>";
}
else{
echo "<script type='text/javascript'>alert('ERROR');
window.location='profile-emp.php';
</script>";
}
}
else
{
    echo "<script type='text/javascript'>alert('Wrong OTP.Try Again');
    window.location='otp-send.php';
</script>";
}
?>
<?php

session_start();

$con=mysqli_connect('localhost','diens','user');
mysqli_select_db($con,'dien');

$otpu=$_POST["OTP"];
$otp=$_SESSION["otp"];
if($otp==$otpu){
    echo "<script type='text/javascript'>alert('Change your password');
    window.location='resetpass3.php';
    </script>"; 

 }else{
    echo "<script type='text/javascript'>alert('Wrong OTP');
    window.location='resetpass2.php';
    </script>";
}
?>
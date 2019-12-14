<?php

session_start();
if(!isset($_SESSION['loggedinuser']))
{
    echo "<script type='text/javascript'>alert('You need to login first.');
    window.location='login-user.php';
    </script>";
}

$con=mysqli_connect('localhost','diens','user');

mysqli_select_db($con,'dien');

$wid = $_POST['wid'];
$otp=$_POST['otp'];
$statt="Ongoing";
$s="select * from Booking where ID='$wid'";

$result = mysqli_query($con, $s);

if( $row=mysqli_fetch_array($result)){
    $ot=$row['otp'];
    if($otp==$ot)
    {
        $s="UPDATE Booking SET status='$statt' WHERE ID='$wid'";

        $result = mysqli_query($con, $s);
    echo "<script type='text/javascript'>alert('Hope you get what you want.');
    window.location='booking.php';
    </script>";
}
else{
    echo "<script type='text/javascript'>alert('Try again or Wrong person.Call the Cops.');
    window.location='booking.php';
    </script>";
}
}
?>
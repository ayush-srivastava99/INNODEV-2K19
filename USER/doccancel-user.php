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
$statt="Cancelled-U";
$s="UPDATE appointment SET status='$statt' WHERE ID='$wid'";

echo $wid;
$result = mysqli_query($con, $s);
if($result){
    echo "<script type='text/javascript'>alert('Cancelled');
    window.location='appoint.php';
    </script>";
}
else{
    echo "<script type='text/javascript'>alert('Not able to Cancel.Try again');
    window.location='appoint-emp.php';
    </script>";
}
?>
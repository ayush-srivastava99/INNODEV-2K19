<?php

session_start();
if(!isset($_SESSION['loggedin']))
{
    echo "<script type='text/javascript'>alert('You need to login first.');
    window.location='loging-emp.php';
    </script>";

}

$con=mysqli_connect('localhost','diens','user');
mysqli_select_db($con,'dien');

$wid = $_POST['wid'];
$statt="Completed";
$s="UPDATE appointment SET status='$statt' WHERE ID='$wid'";

$result = mysqli_query($con, $s);
if($result){
    echo "<script type='text/javascript'>alert('Completed Booking');
    window.location='appoint-emp.php';
    </script>";
}
else{
    echo "<script type='text/javascript'>alert('Not able to update.Try again');
    window.location='appoint-emp.php';
    </script>";
}
?>
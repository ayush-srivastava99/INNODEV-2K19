<?php
session_start();
if(!isset($_SESSION['loggedinadmin']))
{
    echo "<script type='text/javascript'>alert('You need to login first');
    window.location='login-user.php';
    </script>";
}
$con=mysqli_connect('localhost','diens','user');
mysqli_select_db($con,'dien');
$wuname=$_POST["uname"];
$s="insert into rating(worker) values ('$wuname')";
$result=mysqli_query($con,$s);

    echo "<script type='text/javascript'>alert('Worker added successfully');
    window.location='adminrating.php';
    </script>";

//echo "<script type='text/javascript'>alert('Cannot connect');
//window.location='adminrating.php';
//</script>";
?>

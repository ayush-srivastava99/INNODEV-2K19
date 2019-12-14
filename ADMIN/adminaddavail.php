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
$field=$_POST["field"];
$s="insert into available (field,Worker) values ('$field','$wuname')";
$result=mysqli_query($con,$s);

    echo "<script type='text/javascript'>alert('Worker added successfully');
    window.location='adminavailable.php';
    </script>";

//echo "<script type='text/javascript'>alert('Cannot connect');
//window.location='adminrating.php';
//</script>";
?>

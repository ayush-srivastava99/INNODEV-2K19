<?php
session_start();
if(isset($_SESSION['loggedin']))
{
$con=mysqli_connect('localhost','diens','user');
  mysqli_select_db($con,'dien');
  $statt=$_POST['stat'];
  $wid=$_POST['wid'];
  $s="UPDATE available SET status='$statt' WHERE Worker='$wid'";

  $result = mysqli_query($con, $s);
  if($result==1){
    echo "<script type='text/javascript'>alert('Status changed');
    window.location='profile-emp.php';
</script>";
  }
else
{
        echo "<script type='text/javascript'>alert('Not changed');
        window.location='profile-emp.php';
    </script>";
}
}
else
{
    echo "<script type='text/javascript'>alert('You need to login first');
    window.location='loging-emp.php';
    </script>";
}
?>
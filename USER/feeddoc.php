<?php
session_start();
if(isset($_SESSION['loggedinuser']))
{
$con=mysqli_connect('localhost','diens','user');
  mysqli_select_db($con,'dien');
  $wor=$_POST['worker'];
  $user=$_POST['user'];
  $wid=$_POST['wid'];
  $comments=$_POST['comments'];
  $rat=$_POST['rat'];
  $reg="insert into feed_back(wid,worker,user,comment,rating) values ('$wid','$wor','$user','$comments','$rat')";
  $result=mysqli_query($con, $reg);
  $query="SELECT * from rating where worker='$wor'";
  $result=mysqli_query($con,$query);
  $row=mysqli_fetch_array($result); 
  $rating=$row['rat'];
  $c=$row['count'];
  $new=$rating*$c+$rat;
  $c=$c+1;
  echo $new;
  echo "<br>";
  echo $c;
  $new=1.0*$new/$c;
  $s="UPDATE rating SET rat='$new' WHERE worker='$wor'";

  $result = mysqli_query($con, $s);
  $s="UPDATE rating SET count='$c' WHERE worker='$wor'";

  $result = mysqli_query($con, $s);

  $s="UPDATE appointment SET feedback='Yes' WHERE docuname='$wor'";

  $result = mysqli_query($con, $s);

 echo "<script type='text/javascript'>alert('Thank you for feedback');
window.location='appoint.php';
  </script>";

}
else
{
    echo "<script type='text/javascript'>alert('You need to login first');
    window.location='login-user.php';
    </script>";
}

?>

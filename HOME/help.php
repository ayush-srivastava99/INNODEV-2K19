<?php

  $con=mysqli_connect('localhost','diens','user');
  mysqli_select_db($con,'dien');
$email=$_POST["mailid"];
$query=$_POST["complaint"];
    $reg=" insert into helpline(query,email) values ('$query','$email')";
    mysqli_query($con, $reg);
    header('location:cntt.php');
  ?>
<?php

session_start();

$con=mysqli_connect('localhost','diens','user');
mysqli_select_db($con,'dien');

$pass1=$_POST["pass1"];
$pass2=$_POST["pass2"];
$uname=$_SESSION["uname"];
$hashed="";
if($pass1==$pass2)
{
    if($_SESSION["type"]=="user")
    {
    $hash=password_hash($pass1,PASSWORD_DEFAULT);
$s="UPDATE user_regis SET pass='$hash' where uname='$uname'";

$result = mysqli_query($con, $s);
    }
    else
    {
        $hash=password_hash($pass1,PASSWORD_DEFAULT);
        $s="UPDATE emp_regis SET pass='$hash' where uname='$uname'";
        
        $result = mysqli_query($con, $s);

    }
    session_destroy();
echo "<script type='text/javascript'>alert('Password changed');
    window.location='login-user.php';
    </script>";
}else{
    echo "<script type='text/javascript'>alert('Password do not match');
    window.location='resetpass3.php';
    </script>";
}
?>
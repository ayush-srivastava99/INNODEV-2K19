<?php

session_start();

$con=mysqli_connect('localhost','diens','user');
mysqli_select_db($con,'dien');

$name = $_POST['uname'];
$pass = $_POST['pass'];
$hashed="";

$s="select * from emp_regis where uname='$name'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result) ;

if($num==1){
    $row=mysqli_fetch_array($result);
    $_SESSION['uname']= $row['uname'];
    $_SESSION['name']= $row['name']; 
    $_SESSION['mob']=$row['contact'];
    $_SESSION['mailid']=$row['email']; 
    $_SESSION['loggedin']=1;
    $s="select * from rating where worker='$name'";

$result = mysqli_query($con, $s);
$r=mysqli_fetch_array($result);
$_SESSION['rat']=$r['rat'];

    if(password_verify($pass,$row['pass']))
    header('location:profile-emp.php');
    else
    {
        echo "<script type='text/javascript'>alert('Wrong Password');
    window.location='loging-emp.php';
    </script>";
}}else{
    echo "<script type='text/javascript'>alert('Invalid User');
    window.location='loging-emp.php';
    </script>";
}
?>
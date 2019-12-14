<?php

session_start();

$con=mysqli_connect('localhost','diens','user');
mysqli_select_db($con,'dien');

$name = $_POST['uname'];
$pass = $_POST['pass'];
$hashed="";

$s="select * from user_regis where uname='$name'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result) ;

if($num==1){
    if($name=="dien_admin")
    {
        $row=mysqli_fetch_array($result);
        $_SESSION['uname']= $row['uname'];   
        $_SESSION['loggedinadmin']=1;
        if(password_verify($pass,$row['pass']))
        header('location:adminbooking.php');
        else
    {
        echo "<script type='text/javascript'>alert('Wrong Password');
    window.location='login-user.php';
    </script>";
    }

    }
    else
    {
    $row=mysqli_fetch_array($result);
    $_SESSION['uname']= $row['uname'];
    $_SESSION['name']= $row['name']; 
    $_SESSION['mob']=$row['contact'];
    $_SESSION['mailid']=$row['email']; 
    $_SESSION['loc']=$row['city'];
    $_SESSION['loggedinuser']=1;
    if(password_verify($pass,$row['pass']))
    header('location:profile.php');
    else
    {
        echo "<script type='text/javascript'>alert('Wrong Password');
    window.location='login-user.php';
    </script>";
    }
}}else{
    echo "<script type='text/javascript'>alert('Invalid User');
    window.location='login-user.php';
    </script>";
}
?>
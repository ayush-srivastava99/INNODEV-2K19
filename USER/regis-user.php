<?php

  $con=mysqli_connect('localhost','diens','user');
  mysqli_select_db($con,'dien');
  $name =($_POST["name"]);
  $email=($_POST["email"]);
  $pass=($_POST["pass"]);
  $uname=($_POST["uname"]);
  $city=$_POST["city"];
  $mob=$_POST["no"];
  $hash=password_hash($pass,PASSWORD_DEFAULT);
  $file=addslashes($_FILES["imge"]["name"]);
  $filetmp=addslashes(file_get_contents($_FILES["imge"]["tmp_name"])); 
$filetype=addslashes($_FILES["imge"]["type"]);
$array=array('jpg','jpeg');
$ext=pathinfo($file,PATHINFO_EXTENSION); 
  $s="select * from user_regis where uname='$uname'";

  $result = mysqli_query($con, $s);

  $num = mysqli_num_rows($result);

  if($num==1){
    echo "<script type='text/javascript'>alert('Username already taken.Choose a new');
    window.location='login-user.php';
    </script>";
    }else{
    $reg=" insert into user_regis(name,email,contact,city,uname,pass,photo) values ('$name','$email','$mob','$city','$uname','$hash','$filetmp')";
    $res=mysqli_query($con, $reg);
    $reg="insert into resetpass(username) values ('$uname')";
    $res=mysqli_query($con, $reg);
    if($res){
    echo "<script type='text/javascript'>alert('Registration successful');
    window.location='login-user.php';
    </script>";
    }
    else
    {
      echo "<script type='text/javascript'>alert('Can't connect');
      window.location='login-user.php';
      </script>";
    }
    }
  ?>
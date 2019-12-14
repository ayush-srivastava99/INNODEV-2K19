<?php

  $con=mysqli_connect('localhost','diens','user');
  mysqli_select_db($con,'dien');
  
  $name =($_POST["name"]);
  $email=($_POST["email"]);
  $pass=($_POST["pass"]);
  $uname=($_POST["uname"]);
  $exp=($_POST["exp"]);
  $field=$_POST["field"];
  $city=$_POST["city"];
  $mob=$_POST["no"];
  $spec=$_POST["spec"];
  $hash=password_hash($pass,PASSWORD_DEFAULT);
  $file=addslashes($_FILES["imge"]["name"]);
  $filetmp=addslashes(file_get_contents($_FILES["imge"]["tmp_name"])); 
$filetype=addslashes($_FILES["imge"]["type"]);
$array=array('jpg','jpeg');
  $s="select * from emp_regis where uname='$uname'";

  $result = mysqli_query($con, $s);

  $num = mysqli_num_rows($result);

  if($num==1){
    echo "<script type='text/javascript'>alert('Username already taken.Choose a new');
    window.location='loging-emp.php';
</script>";
    }else{
    $reg="insert into emp_regis(name,uname,email,pass,city,contact,field,exp,image,spec) values ('$name','$uname','$email','$hash','$city','$mob','$field','$exp','$filetmp','$spec')";
    $res=mysqli_query($con, $reg);
    $reg="insert into resetpass(username) values ('$uname')";
    $res=mysqli_query($con, $reg);
    echo "<script type='text/javascript'>alert('Registration successful');
    window.location='loging-emp.php';
    </script>";
    }
  ?>
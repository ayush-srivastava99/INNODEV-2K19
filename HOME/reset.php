<?php
  session_start();
  $con=mysqli_connect('localhost','diens','user');
  mysqli_select_db($con,'dien');
  $uname =($_POST["uname"]);
  $b="";
 if($_SESSION["type"]=="user")
 {
  $s="select * from user_regis where uname='$uname'";

  $result = mysqli_query($con, $s);

  $num = mysqli_num_rows($result);

  if($num==1){
    $row=mysqli_fetch_array($result);
    $b=$row["email"];
  }
}
else
{
  $s="select * from emp_regis where uname='$uname'";

  $result = mysqli_query($con, $s);

  $num = mysqli_num_rows($result);

  if($num==1){
    $row=mysqli_fetch_array($result);
    $b=$row["email"];

}
}
// $result = mysqli_query($conn,"SELECT * FROM otptesting WHERE email='$b'");
// $count  = mysqli_num_rows($result);
// echo "$count";  
require 'phpmailer/PHPMailerAutoload.php';
$otp=rand(1000,9999);
 //Create a new PHPMailer instance
 $mail = new PHPMailer();
//Tell PHPMailer to use SMTP
$mail->IsSMTP(); 
//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 3;
//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';
//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';
//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port =465;
//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'ssl';
//Whether to use SMTP authentication
$mail->SMTPAuth = true;
//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "tinnodev@gmail.com";
//Password to use for SMTP authentication
$mail->Password = "tinnodev333";
//Set who the message is to be sent from
$mail->setFrom('tinnodev@gmail.com', 'tinno dev');
//Set an alternative reply-to address
$mail->addReplyTo('tinnodev@gmail.com', 'Google');
//Set who the message is to be sent to
 $mail->addAddress($b, 'Nishant');
 //Set the subject line
 $mail->Subject = 'Test';
//Read an HTML message body from an external file, convert referenced images to embedded,
 //convert HTML into a basic plain-text alternative body
  $mail->Body     = "Your OTP to change the password is $otp.If you have not requested for password change then please contact developers." ;
//Replace the plain text body with one created manually
  $mail->AltBody = 'This is a plain-text message body';
 //Attach an image file
 //$mail->addAttachment('images/phpmailer_mini.gif');
 $mail->SMTPAuth = true;
 //send the message, check for errors
if (!$mail->send()) {
echo "Mailer Error: " . $mail->ErrorInfo;
} else {
  $_SESSION["otp"]=$otp;
  $_SESSION["uname"]=$uname;
    $ss="UPDATE resetpass SET otp='$otp' where username='$uname'";
    mysqli_query($con,$ss);
    echo "<script type='text/javascript'>alert('OTP SENT');
window.location='resetpass2.php';
</script>";


    }
  ?>
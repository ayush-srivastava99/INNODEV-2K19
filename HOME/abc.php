<?php 
session_start();
if(!isset($_SESSION['loggedinuser']))
{
    echo "<script type='text/javascript'>alert('You need to login first');
    window.location='login-user.php';
    </script>";
}
$conn = mysqli_connect("localhost","diens","user","dien");
$b=$_POST["email"];
echo $b;
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
$add=$_POST["add"];
$work=$_POST["work"];
$time=$_POST["time"];
  $mail->Body     = "Excited to in form you that you got an new order.Your otp is $otp . Service place is  $add.Timing is . You have to repair $work.Time is $time. Login Here to ypur account to know order details." ;
//Replace the plain text body with one created manually
  $mail->AltBody = 'This is a plain-text message body';
 //Attach an image file
 //$mail->addAttachment('images/phpmailer_mini.gif');
 $mail->SMTPAuth = true;
 //send the message, check for errors
if (!$mail->send()) {
echo "Mailer Error: " . $mail->ErrorInfo;
} else {
  $username=$_SESSION["uname"];
  $contact=$_SESSION["mob"];
  $loc=$_SESSION["loc"];
  $wtype=$_SESSION["wtype"];
$wuname=$_POST["wuname"];
$lat=$_POST["lat"];
$long=$_POST["long"];
if($wtype!="Doctor")
{
$ss="SELECT * FROM emp_regis WHERE uname='$wuname'";
$res = mysqli_query($conn, $ss);
   $rr=mysqli_fetch_array($res);
   $wcont=$rr["contact"];
   $umail=$_SESSION["mailid"];
   $que="INSERT INTO Booking (username,contact,Loc,Worker,wcontact,worktype,otp,umail,lati,longi) VALUES ('$username','$contact','$loc','$wuname','$wcont','$wtype','$otp','$umail','$lat','$long')";
    $result = mysqli_query($conn,$que);
echo "<script type='text/javascript'>alert('Confirmed');
window.location='booking.php';
</script>";
}
else
{
  $ss="SELECT * FROM emp_regis WHERE uname='$wuname'";
$res = mysqli_query($conn, $ss);
   $rr=mysqli_fetch_array($res);

   $wcont=$rr["contact"];
   $docname=$rr["name"];
   echo $docname;
   echo "<br>";
   echo $wuname;
   echo "<br>";
   echo $wtype;
   echo "<br>";
   echo $username;
   echo "<br>";
   echo $contact;
   echo "<br>";
   echo $loc;
   echo "<br>";
   echo $docname;
   echo "<br>";
   echo $wcont;
   echo "<br>";
   echo $time;
   $que="INSERT INTO appointment (uname,contact,loc,doctor,doc_contact,docuname,extime) VALUES ('$username','$contact','$loc','$docname','$wcont','$wuname','$time')";
  
   $result = mysqli_query($conn,$que);
   if(!$result)
   echo "Unsuccessful";
echo "<script type='text/javascript'>alert('Confirmed');
window.location='appoint.php';
</script>";

}
}
?> 
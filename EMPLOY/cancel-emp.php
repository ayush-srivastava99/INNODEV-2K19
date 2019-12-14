<?php
session_start();
if(!isset($_SESSION['loggedin']))
{
    echo "<script type='text/javascript'>alert('You need to login first.');
    window.location='loging-emp.php';
    </script>";

}
$con=mysqli_connect('localhost','diens','user');
mysqli_select_db($con,'dien');

$wid = $_POST['wid'];
$statt="Cancelled-E";
$s="UPDATE Booking SET status='$statt' WHERE ID='$wid'";

$result = mysqli_query($con, $s);
if($result){
    $s="select * from Booking where ID='$wid'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result) ;
$row=mysqli_fetch_array($result);
    $b=$row["umail"];
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
  $mail->Body     = "Extremely sorry to inform you that your Service ID $wid has been cancelled.Sorry for the inconvinience caused. " ;
//Replace the plain text body with one created manually
  $mail->AltBody = 'This is a plain-text message body';
 //Attach an image file
 //$mail->addAttachment('images/phpmailer_mini.gif');
 $mail->SMTPAuth = true;
 //send the message, check for errors
if (!$mail->send()) {
echo "Mailer Error: " . $mail->ErrorInfo;
}
    echo "<script type='text/javascript'>alert('Cancelled Booking');
    window.location='bookin-emp.php';
    </script>";
}

else{
    echo "<script type='text/javascript'>alert('Not able to Cancel.Try again');
    window.location='bookin-emp.php';
</script>";
//}
}
?>
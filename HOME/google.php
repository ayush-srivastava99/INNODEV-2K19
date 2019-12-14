<?php require ("googleapi/vendor/autoload.php");
session_start();
//Step 1: Enter you google account credentials
//header('Location:'$auth_url'');
$g_client = new Google_Client();
$g_client->setClientId("17022640880-ekgd443pq6sr9vp62o6kf5f4gjev649a.apps.googleusercontent.com");
$g_client->setClientSecret("V7rDT4dHmj_L96otlHG3Mfys");
$g_client->setRedirectUri("http://localhost/inno/google.php");
$g_client->setScopes("email");
//echo "<a href='$auth_url'>Login Through Google </a>";
//Step 3 : Get the authorization  code
$code = isset($_GET['code']) ? $_GET['code'] : NULL;
//Step 4: Get access token
if(isset($code)) {
    try {
        $token = $g_client->fetchAccessTokenWithAuthCode($code);
        $g_client->setAccessToken($token);
    }catch (Exception $e){
        echo $e->getMessage();
    }
    try {
        $pay_load = $g_client->verifyIdToken();
    }catch (Exception $e) {
        echo $e->getMessage();
    }
} else{
    $pay_load = null;
}
$_SESSION["email"]=$pay_load["email"];
if($_SESSION["type"]=="emp")
echo "<script type='text/javascript'>alert('Please fill out rest of the details');
    window.location='gloging-emp.php';
    </script>";
    else
    echo "<script type='text/javascript'>alert('Please fill out rest of the details');
    window.location='glogin-user.php';
    </script>";

    ?>


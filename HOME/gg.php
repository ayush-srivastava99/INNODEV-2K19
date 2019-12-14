<?php require ("googleapi/vendor/autoload.php");
session_start();
$_SESSION["type"]=$_GET["link"];
//Step 1: Enter you google account credentials
$g_client = new Google_Client();
$g_client->setClientId("17022640880-ekgd443pq6sr9vp62o6kf5f4gjev649a.apps.googleusercontent.com");
$g_client->setClientSecret("V7rDT4dHmj_L96otlHG3Mfys");
$g_client->setRedirectUri("http://localhost/inno/google.php");
$g_client->setScopes("email");
//Step 2 : Create the url
$auth_url = $g_client->createAuthUrl();
echo "<script type='text/javascript'>
    window.location='$auth_url';
    </script>";
    ?>
<?php
    include('google.php');

    if (isset($_SESSION['access_token'])){
       $google_client->setAccessToken($_SESSION['access_token']);
    }
    else if(isset($_GET['code'])){
    $token = $google_client->fetchAccessTokenWithAuthCode($_GET['code']);
    $_SESSION['access_token']=$token;
    }else{
    header("location: login.php");
    exit();
}
// if($google_client->isAccessTokenExpired()){
//     session_destroy();
//     header('location : login.php');
// }
$google_service=new Google_Service_Oauth2($google_client);
$data=$google_service->userinfo_v2_me->get();
$_SESSION['id']=$data['id'];
$_SESSION['email']=$data['email'];
$_SESSION['gender']=$data['gender'];
$_SESSION['LastName']=$data['familyName'];
$_SESSION['Name']=$data['givenName'];
$name=(string) $data['givenName'];
$email=(string) $data['email'];
$client=(string) $data['id'];
// print_r($_SESSION);  

header("Location: index.php");
exit();



?>
   
<?php
    include('google.php');
 if(isset($_GET['code'])){
    $token = $google_client->fetchAccessTokenWithAuthCode($_GET['code']);
    
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

$name=(string) $data['givenName'];
$email=(string) $data['email'];
$client=(string) $data['id'];

$sql="insert into user (username,Email_id,cliend_id) values ('$name','$email','$client')";
print_r($sql);
mysqli_query($conn,$sql);
header("Location: index.php");
exit();



?>
   
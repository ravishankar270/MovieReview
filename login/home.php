<?php
    include('google.php');

    if (isset($_SESSION['access_token'])){
       $google_client->setAccessToken($_SESSION['access_token']);
    }
    else if(isset($_GET['code'])){
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
$query="select user_id from user where Email_id='".$email."'";

$res=$conn->query($query) or die($conn->error);
$row=$res->fetch_row();

if($res->num_rows==1){
    print_r($query);
$_SESSION['email']=$data['email'];
$_SESSION['gender']=$data['gender'];
$_SESSION['LastName']=$data['familyName'];
$_SESSION['Name']=$data['givenName'];
$_SESSION['id']=$row[0][0];
$_SESSION['access_token']=$token;
header("Location: index.php");

}
else{
// print_r($_SESSION);  
    header('location : ../registration/form.php')
}
exit();



?>
   
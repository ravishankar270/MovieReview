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

$query="select user_id,Name from user where Email_id='".$email."'";
$r=$conn->query($query);
if($r->num_rows==1){
	header('location: ../login/login.php');
}
$_SESSION['email']=$data['email'];
$_SESSION['gender']=$data['gender'];
$_SESSION['LastName']=$data['familyName'];

$_SESSION['access_token']=$token;
$sql="insert into user (Name,Email_id,cliend_id) values ('$name','$email','$client')";

$result=mysqli_query($conn,$sql);
if($result){
header("Location: index1.php");
}else{
	echo $sql;
}
exit();



?>
   
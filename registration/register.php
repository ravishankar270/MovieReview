<?php
    session_start();
    $data=file_get_contents('php://input');
    $data=json_decode($data);
    

   $email = $data[0];
   $username=$data[2];
   $password = $data[1];
   $pass = password_hash($password, PASSWORD_BCRYPT);

   echo "$pass";


include('../connectdb.php');
    if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
        if(isset($_SESSION['id'])){
        $query="select user_id,Name from user where Email_id='".$_SESSION['email']."'";
$r=$conn->query($query);
if($r->num_rows()==1){
    header('location: ../login/login.php');
}
}
$check="select username from user where username='".$username."'";
        $ru = $conn->query($check);
        if($r->num_rows==0){
    $sql="INSERT INTO `user` ( `Email_id`, `password`,`username` ) VALUES ( '$email', '$password','$username')";
    

    $run = $conn->query($sql);
	if($run) {

        $_SESSION['email']=$email;
        echo "registered";
    }
    else{
        echo "error";
    }	
}else{
    echo "already";
}
}
	
?>

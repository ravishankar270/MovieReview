<?php
    session_start();
    $data=file_get_contents('php://input');
    $data=json_decode($data);
    

   $email = $data[0];
   $username=$data[2];
   $password = $data[1];
   $pass = password_hash($password, PASSWORD_BCRYPT);

   echo "$pass";


define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'moviereview');

// Try connecting to the Database
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
    if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
        if(isset($_SESSION['id'])){
        $query="select user_id,Name from user where Email_id='".$_SESSION['email']."'";
$r=mysqli_query($conn,$query);
if(mysqli_num_rows($r)==1){
    header('location: ../login/login.php');
}
}
$check="select username from user where username='".$username."'";
        $ru = mysqli_query($conn,$check);
        if(mysqli_num_rows($ru)==0){
    $sql="INSERT INTO `user` ( `Email_id`, `password`,`username` ) VALUES ( '$email', '$password','$username')";
    

    $run = mysqli_query($conn,$sql);
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

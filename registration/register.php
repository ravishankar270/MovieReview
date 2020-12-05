<?php
    $data=file_get_contents('php://input');
    $data=json_decode($data);
    

   $username = $data[0];
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
        $query="select user_id,Name from user where Email_id='".$_SESSION['email']."'";
$r=$conn->query($query);
if($r->num_rows==1){
    header('location: ../login/login.php');
}

        $sql="INSERT INTO `user` ( `Email_id`, `password` ) VALUES ( '$username', '$password')";
    }

    $run = mysqli_query( $conn,$sql);
	if($run == TRUE) {
        echo "registered";
    }
    else{
        echo "error";
    }	
	
?>

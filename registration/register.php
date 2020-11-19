<?php
   $username = $_POST['username'];
   $password = $_POST['password'];

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

        $sql="INSERT INTO `user` (`user_id`, `username`, `password`, `Phone_no`, `Email_id`, `cliend_id`) VALUES (NULL, '$_POST[username]', '$_POST[password]', '', '', '')";
    }

    
    $run = mysqli_query( $conn,$sql);
	if($run == TRUE) {
        echo "Updated";
    }
    else{
        echo "error";
    }	
	
?>

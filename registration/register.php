<?php
   $Name = $_POST['Name'];
   $username = $_POST['username'];
   $Email = $_POST['Email'];
   $Number = $_POST['Number'];
   $password = $_POST['password'];
   $bio = $_POST['bio'];


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
        $sql="INSERT INTO `user` (`user_id`, `Name`, `username`, `password`, `Phone_no`, `Email_id`, `Bio`) VALUES (NULL,'$_POST[Name]','$_POST[username]','$_POST[password]','$_POST[Number]', '$_POST[Email]','$_POST[bio]')";
    }
    $run = mysqli_query( $conn,$sql);
	if($run == TRUE) {
        echo "Updated";
    }
    else{
        echo "error";
    }	
	
?>

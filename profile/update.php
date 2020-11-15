<?php
    $user_id = $_POST['user_id'];
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
        $sql="UPDATE `user` SET `Name`='$_POST[Name]' ,`username`='$_POST[username]' ,`password`='$_POST[password]' ,`Phone_no`='$_POST[Number]' ,`Email_id`='$_POST[Email]' ,`Bio`='$_POST[bio]' where user_id='$_POST[user_id]' ";
     

    }
    $run = mysqli_query( $conn,$sql);
	if($run == TRUE) {
        echo "Updated";
    }
    else{
        echo "error";
    }	
	
?>

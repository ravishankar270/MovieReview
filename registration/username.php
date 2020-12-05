<?php
    session_start();
    $data=file_get_contents('php://input');
    $data=json_decode($data);
    

   $email = $data[0];

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
        $check="select username from user where username='".$email."'";
        $ru = mysqli_query($conn,$check);
        if(mysqli_num_rows($ru)==0){
            $sql="UPDATE user SET username='$email' WHERE user_id=".$_SESSION['id'];
    

    $run = mysqli_query($conn,$sql);
    if($ru){
        $_SESSION['Name']=$email;
    echo "done";
}else{
    echo "not";
}

        }else{
            echo "already exists";
        }

    
	
}
	
?>

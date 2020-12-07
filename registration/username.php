<?php
    session_start();
    $data=file_get_contents('php://input');
    $data=json_decode($data);
    

   $email = $data[0];
include('../connectdb.php');

// Try connecting to the Database
    if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
        $check="select username from user where username='".$email."'";
        $ru = $conn->query($check);
        if($ru->num_rows==0){
            $sql="UPDATE user SET username='$email' WHERE user_id=".$_SESSION['id'];
    

    $run = $conn->query($sql);
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

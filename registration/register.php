<?php
    session_start();
    $data=file_get_contents('php://input');
    $data=json_decode($data);
    

   $email = $data[0];
   $usernam=$data[2];
   $password = $data[1];



include('../connectdb.php');
    if($conn->connect_error){
        echo "$conn->connect_error";
        die("Connection Failed : ". $conn->connect_error);
    } else {
    $query="select user_id,Name from user where Email_id='".$email."'";
$r=$conn->query($query);
if($r->num_rows==1){
    header('location: ../login/login.php');
}else{

$check="select username from user where username='".$usernam."'";
        $ru = $conn->query($check);
        if($ru->num_rows==0){
    $sql="INSERT INTO `user` ( `Email_id`, `password`,`username` ) VALUES ( '$email', '$password','$usernam')";
    

    $run = $conn->query($sql);
    if($run) {

        $_SESSION['email']=$email;
        echo "registered";
    }
    else{
        print_r($sql);
    }   
}else{
    echo "already";
}
}
}
    
?>

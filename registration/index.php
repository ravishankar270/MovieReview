<?php 
session_start();
    include('../connectdb.php');
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }else {
      	$query="select user_id,username from user where Email_id='".$_SESSION['email']."'";

$res=$conn->query($query) or die($conn->error);


if($res->num_rows==1){
	$row=$res->fetch_row();
$_SESSION['Name']=$row[1];
$_SESSION['id']=$row[0];
header("Location: ../homepage/homepage.php");

}else{
	echo $query;
}

      }

?>
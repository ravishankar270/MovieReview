<?php
session_start();
include('../connectdb.php');
if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }else{
    	if(!isset($_GET['q'])){
    	$data=intval($_SESSION['id']);
    	$eid=intval($_SESSION['eid']);
    	$sql="insert into watch_list (user_id,E_id) values ($data,$eid)";
      	$result=$conn->query($sql);
         if($result===true){
         	echo "ok";

         }
         else{
         	print_r($sql);
         }
     }else{
     	$data=intval($_SESSION['id']);
    	$eid=intval($_SESSION['eid']);
    	$sql="delete from watch_list where E_id=$eid";
      	$result=$conn->query($sql);
         if($result===true){
         	echo "ok";

         }
         else{
         	print_r($sql);
         }

     }

    }



?>
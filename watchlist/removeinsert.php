<?php
session_start();
include('../connectdb.php');
if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }else{
    	if(isset($_GET['q'])){
    	
     	$data=intval($_SESSION['id']);
    	$eid=intval($_GET['q']);
    	$sql="delete from watch_list where E_id=$eid";
      	$result=$conn->query($sql);
         if($result===true){
         	header('location: watchlist.php');

         }
         else{
            header('location: watchlist.php');
         }

     }

    }



?>
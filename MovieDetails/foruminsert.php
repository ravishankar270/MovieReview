<?php
    session_start();
    include('../connectdb.php');
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }else {
                    $data=json_decode($_GET['q']);
                    $name=$_SESSION['Name'];
                    $id=$_SESSION['id'];
                    $eid=intval($_SESSION['eid']);
                    $question = strip_tags(strval($data[0]));
                    
                    $sql="insert into `fan theory` (question,user_id,Views,username,E_id) values ('$question',$id,0,'$name',$eid)";
                    $result=$conn->query($sql);
                    if($result){
                    echo 'ok';
                }else{
                    echo $sql;
                }
                    
                    
    }
    ?>
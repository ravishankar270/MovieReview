<?php
    session_start();
    include('../connectdb.php');
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }else {
                    $data=json_decode($_GET['q']);
                    if($_SESSION['Name']=='N'){
                    $name='Null';
                }else{
                    $name=$_SESSION['Name'];
                }
                    $id=$_SESSION['id'];
                    $eid=intval($_SESSION['eid']);
                    $desc = strip_tags(strval($data[0]));
                    
                    $sql="insert into reviews (description,rating,Spoiler_tag, user_id,E_id,username) values ('$desc',4,'yes',$id,$eid,'$name')";
                    $result=$conn->query($sql);
                    if($result){
                    echo $sql;
                }else{
                    echo $sql;
                }
                    
                    
    }
    ?>
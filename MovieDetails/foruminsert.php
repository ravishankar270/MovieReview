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
                        $sql="select * from `fan theory` where E_id=$eid ORDER BY theory_id DESC limit 1";
        // $sql="select question,user_id,Views from fantheory ORDER BY theory_id DESC";
        $result = $conn->query($sql) or die($conn->error);
        $row=$result->fetch_assoc();
                    echo "<div class='subset' onclick=\"openDetail(this,'".$row['question']."')\" id=".$row['theory_id'].">
            <div class='round'><p>".$name[0]."</p></div>
            <div class='content1'>
            <div><p>$question</p></div>
            </div>
            </div>";
                }else{
                    echo $sql;
                }
                    
                    
    }
    ?>
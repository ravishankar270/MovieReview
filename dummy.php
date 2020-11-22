
<?php

$servername = "localhost";
        $username = "root";
        $password = "";
        $dbname="moviereview";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password,$dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }else {

    
    // Check connection
    
        $sql= "select images from entertainment ";
        // $sql="";
        $result = $conn->query($sql) or die($conn->error);
        if($result){
            while ($row=$result->fetch_row()) {
                echo '<img src="data:image;base64,'.base64_encode($row[0]).'" alt="image" style="width:500px;height:500px;"/>';
            }
             
        }else{
                echo "some";
                # code...
            }
    }
        
        $conn->close();
?>
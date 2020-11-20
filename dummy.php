batman s
captainAmerica s
cars s
conjuring l
Fast s
Frozen s
Iron man 3 s
shazam s
<?php

$servername = "localhost";
        $username = "root";
        $password = "";
        $dbname="moviereview";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password,$dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }

    
    $data=
     array('' => , );
    // Check connection
    
        $sql="`";
        // $sql="select question,user_id,Views from fantheory ORDER BY theory_id DESC";
        $result = $conn->query($sql) or die($conn->error);
        
        $conn->close();
?>
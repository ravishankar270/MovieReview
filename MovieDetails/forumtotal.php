
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href="forumtotal.css?v=<?php echo time(); ?>" type="text/css" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital@1&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/3e55b52515.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
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

    
    
    // Check connection
    
        $sql="select * from `fan theory`";
        // $sql="select question,user_id,Views from fantheory ORDER BY theory_id DESC";
        $result = $conn->query($sql) or die($conn->error);
        
        $conn->close();
        
    ?>
    <script>
        function openDetail(ele,question){
            console.log(ele.id)
            var data=[ele.id,question]
            
            var json=JSON.stringify(data)
            window.location.href="http://localhost/login/forum/forum.php?q="+data;
}
    </script>
    <div class='fantheory'>
        <?php
        while($row = $result->fetch_assoc()){
            
            echo "<div class='subset' onclick=\"openDetail(this,'".$row['question']."')\" id=".$row['theory_id'].">
            <div><p>".$row['user_id']."</p></div>
            <div class='content1'>
            <div><p>".$row['question']."</p></div>
            <div class='views'>
            <i class='fa fa-eye' aria-hidden='true'></i><p>".$row['Views']."<p></div>
            </div>
            </div>";
            

        }
        ?>
     </div>
</body>
</html>
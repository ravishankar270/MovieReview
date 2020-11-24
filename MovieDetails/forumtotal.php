
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
    
    
    
include('../connectdb.php');
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }

    
    
    // Check connection
    
        $sql="select * from `fan theory` where E_id=".$_SESSION['eid'];
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
        <div class="whole">
                    <!-- <div class="watch">
                    <i class="fa fa-plus" aria-hidden="true"></i>
                    <p>Add to Watchlist</p>
                </div> -->
                <div class='review1'>
      
                    <form class="text1" method="POST" action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>'>
                               <textarea name="description" placeholder="What did you think of the movie?" style="text-indent: 20px;"  name="review" rows="8" cols="70" required></textarea>
                               <input type="submit" name="post_reviews" value="POST" >

                    </form>
                    
                </div>

            </div>
        <?php
        while($row = $result->fetch_assoc()){
            
            echo "<div class='subset' onclick=\"openDetail(this,'".$row['question']."')\" id=".$row['theory_id'].">
            <div class='round'><p>".$row['username'][0]."</p></div>
            <div class='content1'>
            <div><p>".$row['question']."</p></div>
            <div class='views'>
            <i class='fa fa-eye' aria-hidden='true'></i><p>".$row['Views']."<p></div>
            </div>
            </div>";
            

        }
        ?>
     </div>
     <script src="tab.js?v=<?php echo time(); ?>"></script>
</body>
</html>
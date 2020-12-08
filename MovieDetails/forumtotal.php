
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
            window.location.href="../forum/forum.php?q="+data;
}
    </script>
    <script type="text/javascript">
function finsert(){
  
        description=document.getElementById('description1').value;
        console.log(description)
        
       
        if(description!==""){
          console.log(description)
        const data=[description]
        const json=JSON.stringify(data)
        
        var xmlhttp = new XMLHttpRequest();
         xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
            
              console.log(this.responseText)
              document.getElementById('description1').style.innerHTML=""
              location.reload()
             

      }
    };
    xmlhttp.open("GET","foruminsert.php?q="+json,true);
   
    xmlhttp.send();
  }
    return false
    }      

    </script>
    <div class='fantheory'>
       <div class="whole" >
                    <!-- <div class="watch">
                    <i class="fa fa-plus" aria-hidden="true"></i>
                    <p>Add to Watchlist</p>
                </div> -->
                <div class='review'  style="" >
  
                    <div class="text" style="">
                               <textarea id="description1" name="description" placeholder="fan theory" style="text-indent: 20px;"  rows="4" cols="50" required></textarea>
                <input type="submit" style="background-color:  #69bde7;" onclick="finsert()" name="post_reviews" value="POST">

                    </div>
                    
                </div>

            </div>
        <?php
        while($row = $result->fetch_assoc()){
            
            echo "<div class='subset' onclick=\"openDetail(this,'".$row['question']."')\" id=".$row['theory_id'].">
            <div class='round'><p>".$row['username'][0]."</p></div>
            <div class='content1'>
            <div><p>".$row['question']."</p></div>

            </div>
            </div>";
            

        }
        ?>
     </div>
     <script src="tab.js?v=<?php echo time(); ?>"></script>
</body>
</html>
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Reviews</title>
  <link rel='stylesheet' href="More_review.css?v=<?php echo time(); ?>" type="text/css" /> 
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital@1&display=swap" rel="stylesheet">
  
  <script type="text/javascript" src="tab.js?v=<?php echo time();?>"></script>
  <script src="https://kit.fontawesome.com/44f557ccce.js"></script>

</head>
<body>
  <?php
  
    include('../connectdb.php');
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
      if(isset($_SESSION['eid'])){
      $sql="select rating, description,Spoiler_tag,username from reviews where E_id =".$_SESSION['eid'] ;
        
      $data1="-";
      $data1="-";
      $data1="-";


      if($_SERVER['REQUEST_METHOD']==='GET'){

      if(isset($_GET['Reviews'])){
      if($_GET['Reviews']==='Latest'){

    $sql="select  rating,description,Spoiler_tag,username from reviews where E_id =".$_SESSION['eid']." order by review_id desc  " ;
       
       }else{
    $sql="select  rating,description,Spoiler_tag,username from reviews where E_id =".$_SESSION['eid'] ;
      }

    }
     if(isset($_GET['Spoiler'])){

    if($_GET['Spoiler']==='Yes'){

    $sql="select  rating,description,Spoiler_tag,username from reviews where E_id =".$_SESSION['eid']." and Spoiler_tag='yes'  " ;
       
       }else{
    $sql="select  rating,description,Spoiler_tag,username from reviews where E_id =".$_SESSION['eid']." and Spoiler_tag='No'  " ;
      }
      
    }
     if(isset($_GET['Likes'])){
    if($_GET['Likes']==='Highest to Lowest'){

    $sql="select  rating,description,Spoiler_tag,username from reviews where E_id =".$_SESSION['eid']." order by rating desc" ;
       
       }else{
    $sql="select  rating,description,Spoiler_tag,username from reviews where E_id =".$_SESSION['eid']." order by rating" ;
      }
      
    }
    }
    $result = $conn->query($sql) or die($conn->error);
    $q="select sum(rating),count(review_id) from reviews where E_id=".$_SESSION['eid']." and rating>=3";
    $q1="select sum(rating),count(review_id) from reviews where E_id=".$_SESSION['eid']." and rating<3";
    $result1 = $conn->query($q) or die($conn->error);
    $result2 = $conn->query($q1) or die($conn->error);
    $row=$result1->fetch_row();
    $row1=$result2->fetch_row();
    if($row[0]<$row[1]){
    $rate=floor(($row[0]/$row[1])*100);
  }else{
    $rate=100;
    }
    if($row1[0]<$row1[1]){
    $bad=floor(($row1[0]/$row1[1])*100);
  }else{
    $bad=0;
    }

        $conn->close();
  }
  ?>
<script type="text/javascript">
  function more() {
    console.log("hello")
    location.href="More_review.php"
  }
</script>
<script type="text/javascript">
  function insert(){
        description=document.getElementById('description').value;
        rating=document.getElementById('starz').value;
        alert(rating)
        var reloadok=0
    
        if(description!==""){
          console.log(description)
        const data=[description,rating]
        const json=JSON.stringify(data)
        
        var xmlhttp = new XMLHttpRequest();
         xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
             
              document.getElementById('description').style.innerHTML=""
              location.reload()
             

      }
    };
    xmlhttp.open("GET","reviewinsert.php?q="+json,true);
   
    xmlhttp.send();
  }
    return false
    }      

    </script>
<?php include('../footer&header/header.php'); ?>
<div class="rev-section">
  <div class="dummy"></div>
<div class="filters">
  <form method="GET" action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>'>
    <label for="Reviews">Reviews:</label>
  <select id="Reviews" name="Reviews">
        <option value="volvo">-</option>
    <option value="Latest"  <?php echo (isset($_GET['Reviews']) && $_GET['Reviews'] == 'Latest') ? 'selected="selected"' : ''; ?> >Latest</option>
    <option value="Oldest"   <?php echo (isset($_GET['Reviews']) && $_GET['Reviews'] == 'Oldest') ? 'selected="selected"' : ''; ?>>Oldest</option>
    
  </select>
  <br>
  <label for="Spoiler">Spoiler tag:</label>
  <select id="Spoiler" name="Spoiler">
    <option value="volvo">-</option>
    <option value="Yes"  <?php echo (isset($_GET['Spoiler']) && $_GET['Spoiler'] == 'Yes') ? 'selected="selected"' : ''; ?>>Yes</option>
    <option value="No"  <?php echo (isset($_GET['Spoiler']) && $_GET['Spoiler'] == 'No') ? 'selected="selected"' : ''; ?>>No</option>
  </select>
  <br>
  <label for="Likes">Likes:</label>
  <select id="Likes" name="Likes">
    <option value="volvo">-</option>
    <option value="Highest to Lowest"  <?php echo (isset($_GET['Likes']) && $_GET['Likes'] == 'Highest to Lowest') ? 'selected="selected"' : ''; ?>>Highest to Lowest</option>
    <option value="Lowest to Highest"  <?php echo (isset($_GET['Likes']) && $_GET['Likes'] == 'Lowest to Highest') ? 'selected="selected"' : ''; ?>>Lowest to Highest</option>
    
  </select>
  <br>
  <input type="submit" name="Apply">
</form>
<div class="whole">
                    <!-- <div class="watch">
                    <i class="fa fa-plus" aria-hidden="true"></i>
                    <p>Add to Watchlist</p>
                </div> -->
                <div class='review'>
                    <div class="stars">
  <button class="star" onclick="rate(0)"><i class="fa fa-star"></i></button>
  <button class="star"onclick="rate(1)"><i class="fa fa-star"></i></button>
  <button class="star" onclick="rate(2)"><i class="fa fa-star"></i></button>
  <button class="star" onclick="rate(3)"><i class="fa fa-star"></i></button>
  <button class="star" onclick="rate(4)"><i class="fa fa-star"></i></button>
</div>
<input type="number" id='starz' name="rating" style="display:none;" value=  1  > 
                    <form class="text" method="POST" action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>'>
                               <textarea id="description" name="description" placeholder="What did you think of the movie?" style="text-indent: 20px;"  name="review" rows="4" cols="40" required></textarea>
                               <input type="submit" onclick="insert()" name="post_reviews" value="POST" >

                    </form>
                    
                </div>

            </div>

</div>
<hr>

<div class="reviews">
  <div class="rotten">
    <div class="tomato">
      <div class='flex'>
      <div class="tooltip"><i class='fas fa-grin-alt' style='font-size:48px;color:red' tooltip='good'></i>
  <span class="tooltiptext">Good</span>
</div >
<p><?php echo $rate; ?>%</p>
</div>
<div class='flex'>
<div class="tooltip"><i class='fas fa-meh-rolling-eyes' style='font-size:48px;color:red' tooltip='bad  '></i>
  <span class="tooltiptext">bad</span>
</div>
<p><?php echo $bad; ?>%</p>
</div>
      
      
  </div>

  </div>
<?php
while ($row=$result->fetch_row()) {
  # code...
?>
<div class='review1'>
    
   <div class='body-review'>
   <div class='profile' onclick="location.href='../profile/profile2.php'">
        <a ><?php echo $row[3][0]; ?></a>
    </div>
      <div class='name-review'><?php echo $row[3]; ?></div>
      <div class='place-review'><?php echo $row[2]; ?></div>
      <div class='rating'>
<?php
        $i=$row[3];
        if($i==0){
          $i=1;
        }
         while($i!=0){?>
         <i class='fas fa-star'></i>
       <?php
       $i-=1; 
        } ?>
      </div>
      <div class='desc-review' style="font-size: 20px;"><?php echo $row[1]; ?></div>
   </div>
</div>
<?php
}
?>


</div>
<script type="text/javascript" src="tab1.js"></script>
</body>
</html>

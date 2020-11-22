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
  

  <script src="https://kit.fontawesome.com/44f557ccce.js"></script>

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
      if(isset($_SESSION['eid'])){
      $sql="select  description,Spoiler_tag,username from reviews where E_id =".$_SESSION['eid'] ;
        
      $data1="-";
      $data1="-";
      $data1="-";


      if($_SERVER['REQUEST_METHOD']==='GET'){

      if(isset($_GET['Reviews'])){
      if($_GET['Reviews']==='Latest'){

    $sql="select  description,Spoiler_tag,username from reviews where E_id =1 order by review_id desc  " ;
       
       }else{
    $sql="select  description,Spoiler_tag,username from reviews where E_id =1   " ;
      }

    }
     if(isset($_GET['Spoiler'])){

    if($_GET['Spoiler']==='Yes'){

    $sql="select  description,Spoiler_tag,username from reviews where E_id =1 and Spoiler_tag='yes'  " ;
       
       }else{
    $sql="select  description,Spoiler_tag,username from reviews where E_id =1 and Spoiler_tag='No'  " ;
      }
      
    }
     if(isset($_GET['Likes'])){
    if($_GET['Likes']==='Highest to Lowest'){

    $sql="select  description,Spoiler_tag,username from reviews where E_id =1 order by review_likes desc  " ;
       
       }else{
    $sql="select  description,Spoiler_tag,username from reviews where E_id =1 order by review_likes   " ;
      }
      
    }
    }
    $result = $conn->query($sql) or die($conn->error);
    }
        
        $conn->close();
  ?>
<script type="text/javascript">
  function more() {
    console.log("hello")
    location.href="More_review.php"
  }
</script>

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
  <button class="star" onclick="rate(1)"><i class="fa fa-star"></i></button>
  <button class="star"onclick="rate(2)"><i class="fa fa-star"></i></button>
  <button class="star" onclick="rate(3)"><i class="fa fa-star"></i></button>
  <button class="star" onclick="rate(4)"><i class="fa fa-star"></i></button>
  <button class="star" onclick="rate(5)"><i class="fa fa-star"></i></button>
</div>
                    <form class="text" method="POST" action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>'>
                               <textarea name="description" placeholder="What did you think of the movie?" style="text-indent: 20px;"  name="review" rows="4" cols="40" required></textarea>
                               <input type="submit" name="post_reviews" value="POST" >

                    </form>
                    
                </div>

            </div>

</div>


<div class="reviews">
<?php
while ($row=$result->fetch_row()) {
  # code...

echo "<div class='review1'>
    
   <div class='body-review'>
   <div class='profile' onclick=\"location.href='../profile/profile2.php'\">
        <a >".$row[2][0]."</a>
    </div>
      <div class='name-review'>".$row[2]."</div>
      <div class='place-review'>Germany</div>
      <div class='rating'>
         <i class='fas fa-star'></i>
         <i class='fas fa-star'></i>
         <i class='fas fa-star'></i>
         <i class='fas fa-star'></i>
         <i class='fas fa-star-half'></i>
      </div>
      <div class='desc-review'>".$row[0]."</div>
   </div>
</div>";
}
?>


</div>

</body>
</html>

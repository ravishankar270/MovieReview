
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Reviews</title>
  <link rel='stylesheet' href="moviereview.css?v=<?php echo time(); ?>" type="text/css" /> 
  

  <script src="https://kit.fontawesome.com/44f557ccce.js"></script>

</head>
<body>
  <?php
  
    
include('../connectdb.php');
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
      $sql="select  description,Spoiler_tag,username,rating from reviews where E_id =".$_SESSION['eid']." limit 6 " ;
        $result = $conn->query($sql) or die($conn->error);
        
        
        $conn->close();
  ?>
<script type="text/javascript">
  function more() {
    console.log("hello")
    location.href="More_review.php"
  }
</script>
<div class="rev-section">



<div class="reviews-all">
<?php
while ($row=$result->fetch_row()) {
  # code...
?>
<div class='review-all'>
    
   <div class='body-review'>
   <div class='profile' onclick="location.href='../profile/profile2.php'">
        <a ><?php echo $row[2][0];?></a>
    </div>
      <div class='name-review'><?php echo $row[2]; ?></div>
      <div class='place-review'><?php echo $row[1]; ?></div>
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
      <div class='desc-review'><?php echo $row[0]; ?></div>
   </div>
</div>
<?php
}
?>
<?php if($result->num_rows==6){?>
<fade></fade>
<?php }
?>

</div>
<?php if($result->num_rows==6){?>
<i class="fa fa-angle-down" onclick="more()" style="font-size:34px;color:red;cursor: pointer;"></i> 
<?php
}
?>
</div>


</body>
</html>

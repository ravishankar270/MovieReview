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
      $sql="select  description,Spoiler_tag,username from reviews where E_id =1 limit 6 " ;
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
<fade></fade>

</div>
<i class="fa fa-angle-down" onclick="more()" style="font-size:34px;color:red;"></i> 

</div>

</body>
</html>

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
  if (!isset($_SESSION['access_token'])){
        header("url: ..login/login.php");
    }
    
    $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname="moviereview";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password,$dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
      $sql="select description,Spoiler_tag,username from reviews where E_id =1 " ;
        $result = $conn->query($sql) or die($conn->error);
    
        
        $conn->close();
  ?>

<div class="rev-section">



<div class="reviews">
<?php
while ($row=$result->fetch_row()) {
  # code...

echo "<div class='review'>
   <div class='body-review'>
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

</div>

</body>
</html>

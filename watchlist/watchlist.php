<?php session_start();?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel='stylesheet' href="watchlist.css?v=<?php echo time(); ?>" type="text/css" />
        <script src="https://kit.fontawesome.com/3e55b52515.js" crossorigin="anonymous"></script>

    </head>
    <body>
        <?php
        if(!isset($_SESSION['id'])){
          header("location: ../login/login.php");
        }
        include('../connectdb.php');
        if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }else{
        $action="select images1,Name,E_id,description from entertainment where E_id in (select E_id from watch_list where user_id=".$_SESSION['id'].")";  
        $result=$conn->query($action) or die($conn->error);
    }
        
        ?>

  <!-- Nav Bar -->

  <?php
include('../footer&header/header.php');
  ?>

        <div class="back-img">
  <div class="title">
    <?php if($result->num_rows===0){
        ?>
    <h1>NOTHING HERE</h1>
    <a style="cursor: pointer;" href="../all-movies/all-movies.php">ADD</a>
<?php }else{ ?>
    <h1>YOUR WATCHLIST</h1>
<?php } ?>
    <!-- <p>Scroll for more!</p> -->
  </div>
</div>


    <br>
<br>
<br>
<br>
    <div class="content-wrapper">
    
  <?php
while($row=$result->fetch_row()){
  ?>
  <div class="news-card">
    <a href="#" class="news-card__card-link"></a>
    <img src="<?php echo $row[0]; ?>" alt="" class="news-card__image">
    <div class="news-card__text-wrapper">
      <h2 class="news-card__title"><?php echo $row[1]; ?></h2>
      <div class="news-card__details-wrapper">
        <p class="news-card__excerpt"><?php echo $row[3]; ?></p>
        <a href="../MovieDetails/MovieDetails.php?q=<?php echo $row[2]; ?>" class="news-card__read-more">Read more <i class="fas fa-long-arrow-alt-right"></i></a>
        <a href="removeinsert.php?q=<?php echo $row[2];?>" class="news-card__remove">Remove <i class="fa fa-times" aria-hidden="true"></i></a>
      </div>
    </div>
  </div>
  <br>
  <br>
  <br>
  <br>
  <?php
}
?>

 

</div>
<br>
<br>
<br>

        
        
        <script src="" async defer></script>
    </body>
</html>
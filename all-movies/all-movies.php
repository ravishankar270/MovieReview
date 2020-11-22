<?php session_start();?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel='stylesheet' href="all-movies.css?v=<?php echo time(); ?>" type="text/css" />
          <link rel='stylesheet' href="lightslider.css?v=<?php echo time(); ?>" type="text/css" />
        <script src="https://kit.fontawesome.com/3e55b52515.js" crossorigin="anonymous"></script>
        <script type="text/javascript" src="JQuery3.3.1.js?v=<?php echo time();?>"></script>
        <script type="text/javascript" src="lightslider.js?v=<?php echo time();?>"></script>
        <script src="all-movies.js?v=<?php echo time();?>"></script>

    </head>
    <body>
        <?php
        include('../connectdb.php');
        if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }else{
        $action="select images,trailer,Name,E_id from entertainment where Type='Movie' and genre='Action/Thriller'"; 
        $Horror="select images,trailer,Name,E_id from entertainment where Type='Movie' and genre='Horror'"; 
        $Comedy="select images,trailer,Name,E_id from entertainment where Type='Movie' and genre='Comedy'"; 
        $Scifi="select images,trailer,Name,E_id from entertainment where Type='Movie' and genre='Sci-Fi'"; 
        $result=$conn->query($action) or die($conn->error);
        $result1=$conn->query($Horror) or die($conn->error);
        $result2=$conn->query($Comedy) or die($conn->error);
        $result3=$conn->query($Scifi) or die($conn->error);
    }
        ?>
         <!-- Nav Bar -->

         <?php
         include('../footer&header/header.php')
         ?>
        
        <div class="back-img">
  <div class="title">
    <h1>“Because we all need to believe in movies,<br> sometimes.”</h1>
    <!-- <p>Scroll for more!</p> -->
  </div>
</div>



<br>
<br>
<br>
<br>
        <div class="container" style="background-color: #181818; margin-left:30px; margin-right:30px;">
    <br>
    <br>
    <br>
    <h1 style="margin-left: 40px; color: white;">Action Movies    <i class="fa fa-angle-right" style="color: #69bde7;" aria-hidden="true"></i></h1>
    <br>
    
    
    <ul id="autoWidth1" class="cs-hidden">
    <!--1------------------------------>
    <?php 
    while ( $row=$result->fetch_row()) {

        # code...
    
    ?>
  <li class="item-a">
    <!--slider-box-->
    <div class="box1">
    <p class="marvel"><?php echo $row[2];?></p>
    <!--model-->
    <img src="<?php echo $row[0];?>" class="model">
    <!--details-->
    <div class="details">
    <!--logo-character-->
    <!--character-details-->
    <div class="btn2">
        <a href="../MovieDetails/MovieDetails.php?q=<?php echo $row[3];?>">More Details</a>
          
        <a href="<?php echo $row[1];?>">Watch Trailer</a>
      </div>
        </div>
    
    </div>
    </li>
    <?php
    }
?></ul>
    <br>
    </div>



    <br>
<br>
<br>
<div class="container" style="background-color: #181818; margin-left:30px; margin-right:30px;">
    <br>
    <br>
    <br>
    <h1 style="margin-left: 40px; color: white;">Horror Movies    <i class="fa fa-angle-right" style="color: #69bde7;" aria-hidden="true"></i></h1>
    <br>
    <ul id="autoWidth" class="cs-hidden">
    <!--1------------------------------>
    <?php 
    while ( $row=$result1->fetch_row()) {

        # code...
    
    ?>
  <li class="item-a">
    <!--slider-box-->
    <div class="box1">
    <p class="marvel"><?php echo $row[2];?></p>
    <!--model-->
    <img src="<?php echo $row[0];?>" class="model">
    <!--details-->
    <div class="details">
    <!--logo-character-->
    <!--character-details-->
    <div class="btn2">
        <a href="../MovieDetails/MovieDetails.php?q=<?php echo $row[3];?>">More Details</a>
          
        <a href="<?php echo $row[1];?>">Watch Trailer</a>
      </div>     
    </div>
    
    </div>
    </li>
    <?php 
}?>
    <!--2------------------------------>
    </ul>
    <br>
    </div>

    

    <br>
<br>
<br>
<div class="container" style="background-color: #181818; margin-left:30px; margin-right:30px;">
    <br>
    <br>
    <br>
    <h1 style="margin-left: 40px; color: white;">Sci-Fi Movies    <i class="fa fa-angle-right" style="color: #69bde7;" aria-hidden="true"></i></h1>
    <br>
    <ul id="autoWidth2" class="cs-hidden">
    <!--1------------------------------>
    <?php 
    while ( $row=$result2->fetch_row()) {

        # code...
    
    ?>
  <li class="item-a">
    <!--slider-box-->
    <div class="box1">
    <p class="marvel"><?php echo $row[2];?></p>
    <!--model-->
    <img src="<?php echo $row[0];?>" class="model">
    <!--details-->
    <div class="details">
    <!--logo-character-->
    <!--character-details-->
    <div class="btn2">
        <a href="../MovieDetails/MovieDetails.php?q=<?php echo $row[3];?>">More Details</a>
          
        <a href="<?php echo $row[1];?>">Watch Trailer</a>
      </div>     
    </div>
    
    </div>
    </li>
    <?php 
}
?>
    <!--2------------------------------>
  
    </ul>
    <br>
    </div>

    <br>
    <br>
    
<br>
<div class="container" style="background-color: #181818; margin-left:30px; margin-right:30px;">
    <br>
    <br>
    <br>
    <h1 style="margin-left: 40px; color: white;">Comedy Movies    <i class="fa fa-angle-right" style="color: #69bde7;" aria-hidden="true"></i></h1>
    <br>
    <ul id="autoWidth3" class="cs-hidden">
    <!--1------------------------------>
    <?php 
    while ( $row=$result3->fetch_row()) {


    ?>
  <li class="item-a">
    <!--slider-box-->
    <div class="box1">
    <p class="marvel"><?php echo $row[2];?></p>
    <!--model-->
    <img src="<?php echo $row[0];?>" class="model">
    <!--details-->
    <div class="details">
    <!--logo-character-->
    <!--character-details-->
    <div class="btn2">
        <a href="../MovieDetails/MovieDetails.php?q=<?php echo $row[3];?>">More Details</a>
          
        <a href="<?php echo $row[1];?>">Watch Trailer</a>
      </div>     
    </div>
    
    </div>
    </li>
    <?php
}
    ?>
    <!--2------------------------------>
  
    </ul>
    <br>
    </div>
   
    <br>
    <br>
    


    <br>
    <br>
    <br>
        
        <script src="" async defer></script>

    </body>
</html>
<?php session_start();?>
<?php
        include('../connectdb.php');
        if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }else{
        $action="select images,trailer,Name,E_id from entertainment where Type='Movie' and genre='Action/Thriller'"; 
        $watch="select images,trailer,Name,E_id from entertainment where Type='Movie' and E_id in (select E_id from watch_list )";  
        $result=$conn->query($action) or die($conn->error);
        $result1=$conn->query($watch);
    }
        ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel='stylesheet' href="homepage.css?v=<?php echo time(); ?>" type="text/css" />
          <link rel='stylesheet' href="lightslider.css?v=<?php echo time(); ?>" type="text/css" />
        <script src="https://kit.fontawesome.com/3e55b52515.js" crossorigin="anonymous"></script>
        <script type="text/javascript" src="JQuery3.3.1.js?v=<?php echo time();?>"></script>
        <script type="text/javascript" src="lightslider.js?v=<?php echo time();?>"></script>
        <script src="homepage.js?v=<?php echo time();?>"></script>
        
    </head>
    <body>

            <!-- Nav Bar -->

        <?php 
        include('../footer&header/header.php');
        ?>

              <!-- Image Carousel -->

        <div class="slider">
            <div class="sliderchild">
                <div class="imagecon">
                    <a href="#">JOKER</a>
                    <a href="#" class="trailer">Watch Trailer</a>
                </div>
                <div class="imagecon">
                    <a href="#">PARASITE</a>
                </div>
                <div class="imagecon">
                    <a href="#">NO TIME TO DIE</a>
                </div>
                <div class="imagecon">
                    <a href="#">BLACK WIDOW</a>
                </div>  
                <!-- <div class="imagecon">
                    <a href="#">JOKER</a>
                </div> -->
            </div>  
        </div>
        <br>
        <br>
        <br>
        <br>
        <div style="background-color: #181818; margin-left:30px; margin-right:30px;">
        <br>
        <br>
        <br>
        <h1 style="margin-left: 60px; color: white;">Featured today    <i class="fa fa-angle-right" style="color: #69bde7;" aria-hidden="true"></i></h1>
        <br>
        <br>
        <br>
   

        <div class="container1">
            <div class="card">
              <div class="img">
                <img src="homepage-images/007.jpg">
              </div>
      <div class="top-text">
                <div class="name">
      No Time To Die</div>
    </div>
      <div class="btn1">
        <a href="#">Add to Watchlist</a>
          
        <a href="#">Watch Trailer</a>
      </div>
      
      <div class="bottom-text">
                <div class="text">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem quaerat iusto adipisci reprehenderit quasi cum perspiciatis, minima reiciendis magni quam!</div>
      <div class="btn2">
                  <a href="#">Read more</a>
                </div>
      </div>
      </div>
      <div class="card">
              <div class="img">
                <img src="homepage-images/widow.jpg">
              </div>
      <div class="top-text">
                <div class="name">
      Black Widow</div>
      <div class="btn1">
        <a href="#">Add to Watchlist</a>
        <a href="#">Watch Trailer</a>
      </div>
      </div>
      <div class="bottom-text">
                <div class="text">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem quaerat iusto adipisci reprehenderit quasi cum perspiciatis, minima reiciendis magni quam!</div>
      <div class="btn2">
                  <a href="#">Read more</a>
                </div>
      </div>
      </div>
      <div class="card">
              <div class="img">
                <img src="homepage-images/joker.jpg">
              </div>
      <div class="top-text">
                <div class="name">
      Joker</div>
      <div class="btn1">
        <a href="#">Add to Watchlist</a>
        <a href="#">Watch Trailer</a>
      </div>
      </div>
      <div class="bottom-text">
                <div class="text">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem quaerat iusto adipisci reprehenderit quasi cum perspiciatis, minima reiciendis magni quam!</div>
      <div class="btn2">
                  <a href="#">Read more</a>
                </div>
      </div>
      </div>
      
      </div>
      <br>
      <br>
      <br>
    </div>
    <br>
    <br>
    <br>





    <!-- slider -->




    
    <div class="container" style="background-color: #181818; margin-left:30px; margin-right:30px;">
    <br>
    <br>
    <br>
    <h1 style="margin-left: 60px; color: white;">Top Movies    <i class="fa fa-angle-right" style="color: #69bde7;" aria-hidden="true"></i></h1>
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
?>
    </ul>
    <br>
    </div>

    <br>
    <br>
    


    <br>
    <br>
    <br>
    <!-- for tv show -->

    <div class="container" style="background-color: #181818; margin-left:30px; margin-right:30px;">
    <br>
    <br>
    <br>
    <h1 style="margin-left: 60px; color: white;">Top TV Shows    <i class="fa fa-angle-right" style="color: #69bde7;" aria-hidden="true"></i></h1>
    <br>
    <ul id="autoWidth" class="cs-hidden">
    <!--1------------------------------>
  <li class="item-a">
    <!--slider-box-->
    <div class="box1">
    <p class="marvel">BREAKING BAD</p>
    <!--model-->
    <img src="homepage-images/bb.jpg" class="model">
    <!--details-->
    <div class="details">
    <!--logo-character-->
    <!--character-details-->
    <div class="btn2">
        <a href="#">More Details</a>
          
        <a href="#">Watch Trailer</a>
      </div>     
    </div>
    
    </div>
    </li>
    <!--2------------------------------>
  <li class="item-a">
    <!--slider-box-->
    <div class="box1">
    <p class="marvel">GAME OF THRONES</p>
    <!--model-->
    <img src="homepage-images/got.jpg" class="model">
    <!--details-->
    <div class="details">
    <!--logo-character-->
    <!--character-details-->
    <div class="btn2">
        <a href="#">More Details</a>
          
        <a href="#">Watch Trailer</a>
      </div>     </div>
    
    </div>
    </li>
    <!--3------------------------------>
  <li class="item-a">
    <!--slider-box-->
    <div class="box1">
    <p class="marvel">PEAKY BLINDERS</p>
    <!--model-->
    <img src="homepage-images/pb.jpg" class="model">
    <!--details-->
    <div class="details">
    <!--logo-character-->
    <!--character-details-->
    <div class="btn2">
        <a href="#">More Details</a>
          
        <a href="#">Watch Trailer</a>
      </div> 
        </div>
    
    </div>
    </li>
    <!--4------------------------------>
  <li class="item-a">
    <!--slider-box-->
    <div class="box1">
    <p class="marvel">SACRED GAMES</p>
    <!--model-->
    <img src="homepage-images/sg.png" class="model">
    <!--details-->
    <div class="details">
    <!--logo-character-->
    <!--character-details-->
    <div class="btn2">
        <a href="#">More Details</a>
          
        <a href="#">Watch Trailer</a>
      </div> 
        </div>
    
    </div>
    </li>
    <!--5------------------------------>
  <li class="item-a">
    <!--slider-box-->
    <div class="box1">
    <p class="marvel">STRANGER THINGS</p>
    <!--model-->
    <img src="homepage-images/stranger-things.jpg" class="model">
    <!--details-->
    <div class="details">
    <!--logo-character-->
    <!--character-details-->
    <div class="btn2">
        <a href="#">More Details</a>
          
        <a href="#">Watch Trailer</a>
      </div> 
        </div>
    
    </div>
    </li>
    <!--6------------------------------>
  <li class="item-a">
    <!--slider-box-->
    <div class="box1">
    <p class="marvel">MARVEL</p>
    <!--model-->
    <img src="homepage-images/john-wick.jpg" class="model">
    <!--details-->
    <div class="details">
    <!--logo-character-->
    <!--character-details-->
    <div class="btn2">
        <a href="#">More Details</a>
          
        <a href="#">Watch Trailer</a>
      </div>     </div>
    
    </div>
    </li>
    </ul>
    <br>
    </div>

    <br>
    <br>
    <!-- watchlist -->
    <?php if($result1->num_rows!=0){ ?>
    <div class="container" style="background-color: #181818; margin-left:30px; margin-right:30px;">
    <br>
    <br>
    <br>
    <h1 style="margin-left: 60px; color: white;"> Your Watchlist    <i onclick="location.href='../watchlist/watchlist.php'" class="fa fa-angle-right" style="color: #69bde7;cursor: pointer;" aria-hidden="true"></i></h1>
    <br>
    
    
    <ul id="autoWidth2" class="cs-hidden">
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
    }
?>
    </ul>
    <br>
    </div>

  <?php }else{ ?>
    
    <div style="background-color: #181818; margin-left:30px; margin-right:30px;">

        <br>
        <br>
        <br>
        <h1 style="margin-left: 60px; color: white;">Watchlist    <i class="fa fa-angle-right" style="color: #69bde7;" aria-hidden="true"></i></h1>
        <br>
        <br>
        <br>
        <h2 style="text-align: center; margin:auto;"><i onclick="watchlist()" class="fa fa-plus" style="color: #69bde7;cursor: pointer;" aria-hidden="true"></i></h2>
        <br>
        <?php
        if (!isset($_SESSION['id']) ){
        echo "<h2 style='margin: auto; text-align: center; color:white;'>Sign in to access your Watchlist</h2>";
        }
        ?>
        <br>
        <h3 style="margin: auto; text-align: center; color:#C0C0C0">Save shows and movies to keep track of what you want to watch</h3>
        <br>
        <?php 
        // session_start();
         if (!isset($_SESSION['id'])){
        echo "<h3 class='btn-3'style='margin:auto; text-align:center;'>
            <a href='#' class='btn3'>Sign in</a>
        </h3>";
        }
        ?>
        <br>
        <br>
    </div>
  <?php } ?>
    <br>
    <br>
    <?php 
        include('../footer&header/footer.html');
        ?>
    
<script type="text/javascript">
  function watchlist() {
    location.href="../all-movies/all-movies.php"
  }
</script>


<!--     <script src="https://code.jquery.com/jquery-3.3.1.min.js" crossorigin="anonymous"></script> -->
    
    </body>
</html>
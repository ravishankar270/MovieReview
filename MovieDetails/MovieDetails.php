<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tabs</title>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Cutive+Mono&family=Poppins:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel='stylesheet' href="movie_review_details.css?v=<?php echo time(); ?>" type="text/css" />   
    <link rel='stylesheet' href="tab.css?v=<?php echo time(); ?>" type="text/css" />    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    
</head>
<body>
    <?php
    if (!isset($_SESSION['access_token']) and !isset($_SESSION['Name'])){
        
        header("location:   http://localhost/login/login/login.php");
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
      if($_SERVER['REQUEST_METHOD']=='POST'){
                if(isset($_POST['description']) && $_POST['description']!==""){
                    $desc=$_POST['description'];
                    $name=$_SESSION['Name'];
                    $id=$_SESSION['id'];
                    $desc = strip_tags($desc);
                    $sql="insert into reviews (description,Spoiler_tag, user_id,E_id,username) values ('$desc', 'yes',$id,1,'$name')";
                    mysqli_query($conn,$sql);
                    
                    unset($_POST['description']);
                    }
    }
    ?>
   <?php 
   include('../header.php')
   ?>

    <header class="movie_details">
        <a href="#" class="logo"><img src="../Movies_images/Aquaman/Aquaman2.png"></a>
        <div class="toggle"><img src="images/toggle.png"></div>
        </header>
    <div class="banner">
        <div class="content">
            <h2>Put on a <span>Happy</span> Face</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus at facilisis purus. Morbi posuere turpis sit amet nulla posuere scelerisque ut quis justo. Proin id ligula aliquet, pharetra orci vitae, feugiat magna. Fusce sit amet purus magna. Donec consectetur leo quis leo dictum, vitae scelerisque orci congue. Fusce eleifend sed est at semper. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
            <a href="#" class="play" onclick="toggle()"><img src="images/play.png">Watch Trailer</a>
            <div class="slide"></div>
            
            <ul class="sci">
                <li><a href="#"><img src="images/facebook.png"></a></li>
                <li><a href="#"><img src="images/twitter.png"></a></li>
                <li><a href="#"><img src="images/instagram.png"></a></li>

            </ul>
        </div>
        </div>
        <div class="trailer">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/zAGVQLHvwOY" 
            frameborder="0" allow="accelerometer; autoplay;clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <img src="images/close.png" class="close" onclick="toggle()"> 
        </div>
        


        <div class="tabContainer">
          <div class="vertical">
    
            <div class="buttonContainer">
                <button onclick="showPanel(0,'#f44336')">Reviews</button>
                <button onclick="showPanel(1,'#4caf50')">Fan Theory</button>
                <button onclick="showPanel(2,'#2196f3')">Quiz</button>
              
            </div>
          </div>
            
            
            <div class="tabPanel">
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
                               <textarea name="description" placeholder="What did you think of the movie?" style="text-indent: 20px;"  name="review" rows="4" cols="70" required></textarea>
                               <input type="submit" name="post_reviews" value="POST" >

                    </form>
                    
                </div>

            </div>
            <section>
              <div>
            <?php 
            include("moviereview.php")
            ?>
          </div>
            </section>
                 
        </div>
        <div class="tabPanel"><?php 
        include('forumtotal.php');
        ?></div>
                
        </div>


<script src="tab.js?v=<?php echo time(); ?>"></script>
</body>
</html>
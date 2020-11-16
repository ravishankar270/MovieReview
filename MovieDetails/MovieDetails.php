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
    <link rel="stylesheet" type="text/css" href="tab.css">
</head>
<body>
    <?php
    if (!isset($_SESSION['access_token'])){
        
        header("location:   http://localhost/login/login/login.php");
    }?>

    <header>
        <a href="#" class="logo"><img src="images/logo.png"></a>
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
    
            <div class="buttonContainer">
                <button onclick="showPanel(0,'#f44336')">Reviews</button>
                <button onclick="showPanel(1,'#4caf50')">Fan Theory</button>
                <button onclick="showPanel(2,'#2196f3')">Quiz</button>
              
            </div>
            
            
            <div class="tabPanel">
                <div class="whole">
                    <div class="watch">
                    <i class="fa fa-plus" aria-hidden="true"></i>
                    <p>Add to Watchlist</p>
                </div>
                <div class='review'>
                    <div class="stars">
                               <i class="fas fa-star"></i>
                               <i class="fas fa-star"></i>
                               <i class="fas fa-star"></i>
                               <i class="fas fa-star"></i>
                               <i class="fas fa-star-half"></i>
                    </div>
                    <div class="text">
                               <textarea placeholder="What did you think of the movie?" style="text-indent: 20px;"  name="review" rows="4" cols="70"></textarea>
                    </div>
                    
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
                
            <div class="tabPanel">ADD QUIZ</div>
        </div>

<script type="text/javascript">
    function toggle(){
        var trailer = document.querySelector('.trailer');
        // var trailer = document.querySelector('video');

        trailer.classList.toggle('active')
    }
</script>
<script src="tab.js"></script>
</body>
</html>
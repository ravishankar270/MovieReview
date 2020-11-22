<?php session_start();
?>
<?php
    if (!isset($_SESSION['access_token']) and !isset($_SESSION['Name'])){
        
        header("location:   http://localhost/login/login/login.php");
    }

    include('../connectdb.php');
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }else if(isset($_GET['q'])){
      $_SESSION['eid']=intval($_GET['q']);
      $res="select Name,images1,images2,images3 from entertainment where E_id=".$_SESSION['eid'];
      $result=$conn->query($res) or die($conn->error());
      $row=$result->fetch_row();
    }
    
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
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
    <style type="text/css">
    .slider
    {
        height: 600px;
        width: 100%;
        overflow: hidden;
        
    }
    .sliderchild{
        height: 600px;
        width:500%;
        animation: slider infinite 20s 2s;
    }
    .imagecon{
        height:600px;
        width: 20%;
        background-color: gray;
        float: left;
        line-height: 500px;
        color:white;
        text-align: left;
        font-size: 70px;
        font-family: 'Times New Roman', Times, serif;

    }
    
    .sliderchild a{
        padding-left: 50px;
        padding-top: 100px;
        color: white;
    }


    .imagecon:nth-child(1){
      <?php if($row){ ?>
        background-image: url('<?php echo $row[1]; ?>');
      <?php } ?>
        background-repeat: no-repeat;
        background-size: cover;
    }
    
    .imagecon:nth-child(2){
      <?php if($row){ ?>
        background-image: url('<?php echo $row[2]; ?>');
      <?php } ?>
        background-repeat: no-repeat;
        background-size: cover;
    }
    .imagecon:nth-child(3){
      <?php if($row){ ?>
        background-image: url('<?php echo $row[3]; ?>');
      <?php } ?>
        background-repeat: no-repeat;
        background-size: cover;
    }
    .imagecon:nth-child(4){
      <?php if($row){ ?>
        background-image: url('<?php echo $row[1]; ?>');
      <?php } ?>
        background-repeat: no-repeat;
        background-size: cover;
    }
     .imagecon:nth-child(5){
      <?php if($row){ ?>
        background-image: url('<?php echo $row[2]; ?>');
      <?php } ?>
        background-repeat: no-repeat;
        background-size: cover;
    } 

     @keyframes slider{
        12.5%
        {
            margin-left: -100%;
        }
        25%
        {
            margin-left: -100%;
        }
        37.5%
        {
            margin-left: -200%;
        }
        50%
        {
            margin-left: -200%;
        }
        62.5%
        {
            margin-left: -300%;
        }
        75%
        {
            margin-left: -300%;
        }
        87.5%
        {
            margin-left: -400%;
        }
        100%
        {
            margin-left: -400%;
        }
    }
</style>



    
</head>
<body>
    
    <script type="text/javascript">
  function insert(){
        description=document.getElementById('description').value;
        var reloadok=0
       
        if(description!==""){
          console.log(description)
        const data=[description]
        const json=JSON.stringify(data)
        
        var xmlhttp = new XMLHttpRequest();
         xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
              alert(this.responseText)
              console.log(this.responseText)
              document.getElementById('description').style.innerHTML=""
              reloadok=1
             

      }
    };
    xmlhttp.open("GET","reviewinsert.php?q="+json,true);
   
    xmlhttp.send();
  }
    return false
    }      

    </script>
   <?php 
   include('../footer&header/header.php')
   ?>
   <div class="slider">
            <div class="sliderchild">
                <div class="imagecon">

                </div>
                <div class="imagecon">
                </div>
                <div class="imagecon">
                </div>
                <div class="imagecon">
                </div>  
                <div class="imagecon">
                </div>
            </div>
        </div>
   

    <div class="banner">

        <div class="content">       
            <h2>Put on a <span>Happy</span> Face</h2>
            
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
                <div class='review' >
                    <div class="stars">
  <button class="star" onclick="rate(1)"><i class="fa fa-star"></i></button>
  <button class="star"onclick="rate(2)"><i class="fa fa-star"></i></button>
  <button class="star" onclick="rate(3)"><i class="fa fa-star"></i></button>
  <button class="star" onclick="rate(4)"><i class="fa fa-star"></i></button>
  <button class="star" onclick="rate(5)"><i class="fa fa-star"></i></button>
</div>
                    <div class="text">
                               <textarea id="description" name="description" placeholder="What did you think of the movie?" style="text-indent: 20px;"  name="review" rows="4" cols="70" required></textarea>
                               <input type="submit" onclick="insert()" name="post_reviews" value="POST" >

                    </div>
                    
                </div>

            </div>
            <section>
              <div id="details_review">
            <?php 
            include("moviereview.php");
            ?>
          </div>
            </section>
                 
        </div>
        <div class="tabPanel"><?php 
        include('forumtotal.php');
        ?></div>
        <div class="tabPanel"><?php 
        include('quiz.php');
        ?></div>
                
        </div>


<script src="tab.js?v=<?php echo time(); ?>"></script>
<!-- <script type="text/javascript">
  var $scores = $("#details_review");

  $scores.load("moviereview.php #details_review");

</script> -->
<script type="text/javascript" language="javascript">
$(document).ready(function() {
      if(reloadok===1){ 
      $('#details_review').load('moviereview.php #details_review', function() {
           /// can add another function here
      });
   }});
 //// End of Wait till page is loaded
</script>
    
</script>
</body>
</html>
<?php session_start();
?>
<?php
    if (!isset($_SESSION['id'])){
        
        header("location:   ../login/login.php");
    }

    include('../connectdb.php');
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }else if(isset($_GET['q'])){
      $_SESSION['eid']=intval($_GET['q']);
      $res="select Name,images1,images2,images3,trailer from entertainment where E_id=".$_SESSION['eid'];
      $res1="select E_id from watch_list where E_id=".$_SESSION['eid'];
      $result=$conn->query($res) or die($conn->error());
      $result1=$conn->query($res1) or die($conn->error());
      $row=$result->fetch_row();
      $color='black';
      $size=30;
      if($result1->num_rows===1){
        $color='red';
        $size=40;

      }
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

    body{
      background-color: #181818;
    }

.row {  
  display: flex;
  flex-wrap: wrap;
}

/* Create two unequal columns that sits next to each other */
/* Sidebar/left column */
.side {
  flex: 30%;
  padding: 30px;
}

/* Main column */
.main {
  flex: 70%;
  background-color: white;
  padding: 30px;
}

p{
  color: #adadb2;
}


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
             
              console.log(this.responseText)
              document.getElementById('description').style.innerHTML=""
              location.reload()
             

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

        <i onclick="watchlist()"  id="w" class="fas fa-heart watchlist1" style="font-size:<?php echo $size?>px;cursor: pointer;transition: 0.3s all;color: <?php echo $color  ?>" aria-hidden="true"></i>
      
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
            <!-- <h2>Put on a <span>Happy</span> Face</h2> -->
            
            <a href="<?php echo $row[4]; ?>" class="play" ><img src="images/play.png">Watch Trailer</a>
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

        <div class="row">
  <div class="side"  style="background-color: #282828; color: #f2f2f2;">
    <h2>Information  <i class="fa fa-angle-right" style="color: #69bde7; padding-bottom:13px" aria-hidden="true"></i></h2>  
    <h3>Director:</h3>
    
    <p>someone</p>
    <h3>Runtime:</h3>
    <p>Lorem ipsum dolor sit ame.</p>
    <h3>PGA:</h3>
    <p>something</p>
    <h3>Genre:</h3>
    <p>Sci-fi/Animation</p>
    <h3>Release Date:</h3>
    <p>something</p>

    
  </div>
  <div class="main"  style="background-color: #181818; color: #f2f2f2;">
    <h2>Description  <i class="fa fa-angle-right" style="color: #69bde7; padding-bottom:13px" aria-hidden="true"></i></h2>
    
    <p>Some text..</p>
    <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
    <br>
    </div>
</div>
        


        <div class="tabContainer">
          <div class="vertical">
    
            <div class="buttonContainer"  style="background-color:  #69bde7;">
                <button onclick="showPanel(0,'#25aae1')" >Reviews</button>
                <button onclick="showPanel(1,'#25aae1')">Fan Theory</button>
                <button onclick="showPanel(2,'#25aae1')">Quiz</button>
              
            </div>
          </div>
            
            
            <div class="tabPanel">
                <div class="whole" >
                    <!-- <div class="watch">
                    <i class="fa fa-plus" aria-hidden="true"></i>
                    <p>Add to Watchlist</p>
                </div> -->
                <div class='review'  style="background-color: #383838;" >
                    <div class="stars">
  <button class="star" onclick="rate(1)" style="background-color: #383838;"><i class="fa fa-star"></i></button>
  <button class="star"onclick="rate(2)" style="background-color: #383838;"><i class="fa fa-star"></i></button>
  <button class="star" onclick="rate(3)" style="background-color: #383838;"><i class="fa fa-star"></i></button>
  <button class="star" onclick="rate(4)" style="background-color: #383838;"><i class="fa fa-star"></i></button>
  <button class="star" onclick="rate(5)" style="background-color: #383838;"><i class="fa fa-star"></i></button>
</div>
                    <div class="text" style="background-color: #383838;">
                               <textarea id="description" name="description" placeholder="What did you think of the movie?" style="text-indent: 20px;"  name="review" rows="4" cols="70" required></textarea>
                               <input type="submit" style="background-color:  #69bde7;" onclick="insert()" name="post_reviews" value="POST" >

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
        <br>
        <br>
        <br>
        <div class="tabPanel"><?php 
        include('quiz.php');
        ?></div>
                
        </div>


<script src="tab.js?v=<?php echo time(); ?>"></script>
<!-- <script type="text/javascript">
  var $scores = $("#details_review");

  $scores.load("moviereview.php #details_review");

</script> -->
<script type="text/javascript">

  function watchlist() {
    var w=document.getElementById('w')
    if(w.style.color!=='red'){
    

        
        var xmlhttp = new XMLHttpRequest();
         xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                console.log(xmlhttp.responseText)
                if (xmlhttp.responseText==='ok'){
                  w.style.color='red';
                  w.style.fontSize='40px';
                }
             

      }
    };
    xmlhttp.open("GET","watchinsert.php",true);
   
    xmlhttp.send();
  }else{
    var xmlhttp = new XMLHttpRequest();
         xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                console.log(xmlhttp.responseText)
                if (xmlhttp.responseText==='ok'){
                  w.style.color='black';
                  w.style.fontSize='30px';
                }
             

      }
    };
    xmlhttp.open("GET","watchinsert.php?q="+"remove",true);
   
    xmlhttp.send();
  }

  }
</script>
</script>
</body>
</html>
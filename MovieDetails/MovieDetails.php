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
    <header class="header">
            <div class="container2">
                <input type="checkbox" name="" id="check">
                
                <div class="logo-container">
                    <h3 class="logo1">Movie </h3>
                </div>

                <div class="search-box">
                    <input class="search-txt" type="text" name="" placeholder=" Type to search">
                    <a class="search-btn" href="#">
                        <i class="fa fa-search" style="color: grey;" aria-hidden="true"></i>
                    </a>
                </div>
                <div class="hamburger-menu-container">
                    <div class="hamburger-menu">
                        <div></div>
                    </div>
                </div>
                <div class="nav-btn">
                    <div class="nav-links">
                        <ul>
                            <li class="nav-link" style="--i: .6s">
                                <a href="#">  Home  </a>
                            </li>
                            <li class="nav-link" style="--i: .85s">
                                <a href="#">  Menu  <i class="fas fa-caret-down"></i></a>
                                <div class="dropdown">
                                    <ul>
                                        <li class="dropdown-link">
                                            <a href="#">Link 1</a>
                                        </li>
                                        <li class="dropdown-link">
                                            <a href="#">Link 2</a>
                                        </li>
                                        <li class="dropdown-link">
                                            <a href="#">Link 3<i class="fas fa-caret-down"></i></a>
                                            <div class="dropdown second">
                                                <ul>
                                                    <li class="dropdown-link">
                                                        <a href="#">Link 1</a>
                                                    </li>
                                                    <li class="dropdown-link">
                                                        <a href="#">Link 2</a>
                                                    </li>
                                                    <li class="dropdown-link">
                                                        <a href="#">Link 3</a>
                                                    </li>
                                                    <li class="dropdown-link">
                                                        <a href="#">More<i class="fas fa-caret-down"></i></a>
                                                        <div class="dropdown second">
                                                            <ul>
                                                                <li class="dropdown-link">
                                                                    <a href="#">Link 1</a>
                                                                </li>
                                                                <li class="dropdown-link">
                                                                    <a href="#">Link 2</a>
                                                                </li>
                                                                <li class="dropdown-link">
                                                                    <a href="#">Link 3</a>
                                                                </li>
                                                                <div class="arrow"></div>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <div class="arrow"></div>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="dropdown-link">
                                            <a href="#">Link 4</a>
                                        </li>
                                        <div class="arrow"></div>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-link" style="--i: 1.1s">
                                <a href="#">  Services  <i class="fas fa-caret-down"></i></a>
                                <div class="dropdown">
                                    <ul>
                                        <li class="dropdown-link">
                                            <a href="#">Link 1</a>
                                        </li>
                                        <li class="dropdown-link">
                                            <a href="#">Link 2</a>
                                        </li>
                                        <li class="dropdown-link">
                                            <a href="#">Link 3<i class="fas fa-caret-down"></i></a>
                                            <div class="dropdown second">
                                                <ul>
                                                    <li class="dropdown-link">
                                                        <a href="#">Link 1</a>
                                                    </li>
                                                    <li class="dropdown-link">
                                                        <a href="#">Link 2</a>
                                                    </li>
                                                    <li class="dropdown-link">
                                                        <a href="#">Link 3</a>
                                                    </li>
                                                    <li class="dropdown-link">
                                                        <a href="#">More<i class="fas fa-caret-down"></i></a>
                                                        <div class="dropdown second">
                                                            <ul>
                                                                <li class="dropdown-link">
                                                                    <a href="#">Link 1</a>
                                                                </li>
                                                                <li class="dropdown-link">
                                                                    <a href="#">Link 2</a>
                                                                </li>
                                                                <li class="dropdown-link">
                                                                    <a href="#">Link 3</a>
                                                                </li>
                                                                <div class="arrow"></div>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <div class="arrow"></div>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="dropdown-link">
                                            <a href="#">Link 4</a>
                                        </li>
                                        <div class="arrow"></div>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-link" style="--i: 1.35s">
                                <a href="#">  About  </a>
                            </li>
                        </ul>
                    </div>
                    
                    <div class="log-sign" style="--i: 1.8s">
                    <?php 
                    // session_start(); 
                    if (!isset($_SESSION['access_token']) and !isset($_SESSION['Email'])){
                        echo" <a href='http://localhost/login/login/login.php' class='btn transparent'> Log in </a>
                              <a href='#' class='btn solid'> Sign up </a>";
                       
                    }else{
                        echo" <a href='http://localhost/login/login/logout.php' class='btn transparent'> Log out </a>
                             ";
                        
                    }
                    ?>

                    </div>
                
                
    
                
                <?php
                if(isset($_SESSION['Name'])){
                                     echo "<div class='profile' onclick=\"location.href='../profile/profile2.php'\">
                                     <a >".$_SESSION["Name"][0]."</a>
                                     </div>"   ;
                                }
                ?>
            </div>
        </header>

    <header class="movie_details">
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
          <div class="vertical">
    
            <div class="buttonContainer">
                <button onclick="showPanel(0,'#f44336')">Reviews</button>
                <button onclick="showPanel(1,'#4caf50')">Fan Theory</button>
                <button onclick="showPanel(2,'#2196f3')">Quiz</button>
              
            </div>
          </div>
            
            
            <div class="tabPanel">
                <div class="whole">
                    <div class="watch">
                    <i class="fa fa-plus" aria-hidden="true"></i>
                    <p>Add to Watchlist</p>
                </div>
                <div class='review'>
                    <div class="stars">
                            <i class="fa fa-star-o" style="font-size:24px"></i>
                            <i class="fa fa-star-o" style="font-size:24px"></i>
                            <i class="fa fa-star-o" style="font-size:24px"></i>
                            <i class="fa fa-star-o" style="font-size:24px"></i>
                            <i class="fa fa-star-o toggle" style="font-size:24px"></i>
                            <i class="fa fa-star-o toggle" style="font-size:24px"></i>
                            <i class="fa fa-star-o toggle" style="font-size:24px"></i>
                            <i class="fa fa-star-o toggle" style="font-size:24px"></i>
                            <i class="fa fa-star-o toggle" style="font-size:24px"></i>
                            <i class="fa fa-star-o toggle" style="font-size:24px"></i>
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

<script type="text/javascript">
    function toggle(){
        var trailer = document.querySelector('.trailer');
        // var trailer = document.querySelector('video');

        trailer.classList.toggle('active')
    }
</script>
<script src="tab.js?v=<?php echo time(); ?>"></script>
</body>
</html>
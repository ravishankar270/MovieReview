<?php session_start();?>
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

        <header>
            <div class="container2">
                <input type="checkbox" name="" id="check">
                
                <div class="logo-container">
                    <h3 class="logo">Movie </h3>
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
  <li class="item-a">
    <!--slider-box-->
    <div class="box1">
    <p class="marvel">AVENGERS ENDGAME</p>
    <!--model-->
    <img src="homepage-images/avengers.jpg" class="model">
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
    <p class="marvel">JOHN WICK</p>
    <!--model-->
    <img src="homepage-images/john-wick.jpg" class="model">
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
    <!--3------------------------------>
  <li class="item-a">
    <!--slider-box-->
    <div class="box1">
    <p class="marvel">DUNKIRK</p>
    <!--model-->
    <img src="homepage-images/dunkirk.jpg" class="model">
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
    <p class="marvel">BLADE RUNNER</p>
    <!--model-->
    <img src="homepage-images/blade-runner.jpg" class="model">
    <!--details-->
    <div class="details">
    <!--logo-character-->
    <!--character-details-->
    <div class="btn2">
        <a href="#">More Details</a>
          
        <a href="#">Watch Trailer</a>
      </div>    </div>
    
    </div>
    </li>
    <!--5------------------------------>
  <li class="item-a">
    <!--slider-box-->
    <div class="box1">
    <p class="marvel">INCEPTION</p>
    <!--model-->
    <img src="homepage-images/inception.jpg" class="model">
    <!--details-->
    <div class="details">
    <!--logo-character-->
    <!--character-details-->
    <div class="btn2">
        <a href="#">More Details</a>
          
        <a href="#">Watch Trailer</a>
      </div>    </div>
    
    </div>
    </li>
    <!--6------------------------------>
  <li class="item-a">
    <!--slider-box-->
    <div class="box1">
    <p class="marvel">DARK NIGHT</p>
    <!--model-->
    <img src="homepage-images/batman.jpg" class="model">
    <!--details-->
    <div class="details">
    <!--logo-character-->
    <!--character-details-->
    <div class="btn2">
        <a href="#">More Details</a>
          
        <a href="#">Watch Trailer</a>
      </div>    </div>
    
    </div>
    </li>
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
    
    <div style="background-color: #181818; margin-left:30px; margin-right:30px;">
        <br>
        <br>
        <br>
        <h1 style="margin-left: 60px; color: white;">Watchlist    <i class="fa fa-angle-right" style="color: #69bde7;" aria-hidden="true"></i></h1>
        <br>
        <br>
        <br>
        <h2 style="text-align: center; margin:auto;"><i class="fa fa-plus" style="color: #69bde7" aria-hidden="true"></i></h2>
        <br>
        <?php
        if (!isset($_SESSION['access_token']) and !isset($_SESSION['Name'])){
        echo "<h2 style='margin: auto; text-align: center; color:white;'>Sign in to access your Watchlist</h2>";
        }
        ?>
        <br>
        <h3 style="margin: auto; text-align: center; color:#C0C0C0">Save shows and movies to keep track of what you want to watch</h3>
        <br>
        <?php 
        // session_start();
         if (!isset($_SESSION['access_token']) and !isset($_SESSION['Name'])){
        echo "<h3 class='btn-3'style='margin:auto; text-align:center;'>
            <a href='#' class='btn3'>Sign in</a>
        </h3>";
        }
        ?>
        <br>
        <br>
    </div>
    <br>
    <br>

<!--     <script src="https://code.jquery.com/jquery-3.3.1.min.js" crossorigin="anonymous"></script> -->
    
    </body>
</html>
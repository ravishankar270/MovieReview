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
                              <a href='../registration/form.html' class='btn solid'> Sign up </a>";
                       
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
  <li class="item-a">
    <!--slider-box-->
    <div class="box1">
    <p class="marvel">AVENGERS ENDGAME</p>
    <!--model-->
    <img src="all-movies-images/avengers.jpg" class="model">
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
    <img src="all-movies-images/john-wick.jpg" class="model">
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
    <img src="all-movies-images/dunkirk.jpg" class="model">
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
    <img src="all-movies-images/blade-runner.jpg" class="model">
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
    <img src="all-movies-images/inception.jpg" class="model">
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
    <img src="all-movies-images/batman.jpg" class="model">
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
<div class="container" style="background-color: #181818; margin-left:30px; margin-right:30px;">
    <br>
    <br>
    <br>
    <h1 style="margin-left: 40px; color: white;">Horror Movies    <i class="fa fa-angle-right" style="color: #69bde7;" aria-hidden="true"></i></h1>
    <br>
    <ul id="autoWidth" class="cs-hidden">
    <!--1------------------------------>
  <li class="item-a">
    <!--slider-box-->
    <div class="box1">
    <p class="marvel">THE CONJURING</p>
    <!--model-->
    <img src="all-movies-images/conjuring.jpg" class="model">
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
    <p class="marvel">IT</p>
    <!--model-->
    <img src="all-movies-images/IT.jpg" class="model">
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
    <p class="marvel">DOCTOR SLEEP</p>
    <!--model-->
    <!--details-->
    <img src="all-movies-images/doc-sleep.jpg" class="model">
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
    <p class="marvel">INSIDIOUS</p>
    <!--model-->
    <img src="all-movies-images/insidious.jpg" class="model">
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
    <p class="marvel">HUSH</p>
    <!--model-->
    <img src="all-movies-images/hush.jpg" class="model">
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
    <p class="marvel">GRUDGE</p>
    <!--model-->
    <img src="all-movies-images/grudge.jpg" class="model">
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
<br>
<div class="container" style="background-color: #181818; margin-left:30px; margin-right:30px;">
    <br>
    <br>
    <br>
    <h1 style="margin-left: 40px; color: white;">Sci-Fi Movies    <i class="fa fa-angle-right" style="color: #69bde7;" aria-hidden="true"></i></h1>
    <br>
    <ul id="autoWidth2" class="cs-hidden">
    <!--1------------------------------>
  <li class="item-a">
    <!--slider-box-->
    <div class="box1">
    <p class="marvel">MARTIAN</p>
    <!--model-->
    <img src="all-movies-images/martian.jpg" class="model">
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
    <p class="marvel">PROJECT POWER</p>
    <!--model-->
    <img src="all-movies-images/pp.jpg" class="model">
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
    <p class="marvel">INTERSTELLAR</p>
    <!--model-->
    <img src="all-movies-images/interstellar.jpg" class="model">
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
    <p class="marvel">ARRIVAL</p>
    <!--model-->
    <img src="all-movies-images/arrival.jpg" class="model">
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
    <p class="marvel">OBLIVION</p>
    <!--model-->
    <img src="all-movies-images/oblivion.jpg" class="model">
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
    <p class="marvel">MORTAL ENGINES</p>
    <!--model-->
    <img src="all-movies-images/me.jpg" class="model">
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
    
<br>
<div class="container" style="background-color: #181818; margin-left:30px; margin-right:30px;">
    <br>
    <br>
    <br>
    <h1 style="margin-left: 40px; color: white;">Comedy Movies    <i class="fa fa-angle-right" style="color: #69bde7;" aria-hidden="true"></i></h1>
    <br>
    <ul id="autoWidth3" class="cs-hidden">
    <!--1------------------------------>
  <li class="item-a">
    <!--slider-box-->
    <div class="box1">
    <p class="marvel">JOHNY ENGLISH 3</p>
    <!--model-->
    <img src="all-movies-images/je.jpg" class="model">
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
    <p class="marvel">TAG</p>
    <!--model-->
    <img src="all-movies-images/tag.jpg" class="model">
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
    <p class="marvel">INTERN</p>
    <!--model-->
    <img src="all-movies-images/intern.jpg" class="model">
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
    <p class="marvel">MIB INTERNATION</p>
    <!--model-->
    <img src="all-movies-images/mib.jpg" class="model">
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
    <p class="marvel">INSTANT FAMILY</p>
    <!--model-->
    <img src="all-movies-images/if.jpg" class="model">
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
    <p class="marvel">DOLITTLE</p>
    <!--model-->
    <img src="all-movies-images/dl.jpg" class="model">
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
    


    <br>
    <br>
    <br>
        
        <script src="" async defer></script>
    </body>
</html>
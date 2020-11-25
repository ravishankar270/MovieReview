<link rel="stylesheet" type="text/css" href="../footer&header/header.css?v=<?php echo time();?>">
<script src="https://kit.fontawesome.com/3e55b52515.js" crossorigin="anonymous"></script>
<header class="Navbar">
            <div class="container-Navbar">
                <input type="checkbox" name="" id="check">
                
                <div class="logo-container">
                    <h3 class="logo-Navbar"><a style="text-decoration: none;color: white;cursor: pointer;" href="../homepage/homepage.php">Movie</a> </h3>
                </div>

                <div class="search-box-Navbar">
                    <input class="search-txt-Navbar" type="text" name="" placeholder=" Type to search">
                    <a class="search-btn-Navbar" href="#">
                        <i class="fa fa-search" style="color: grey;" aria-hidden="true"></i>
                    </a>
                </div>
                <div class="hamburger-menu-container">
                    <div class="hamburger-menu">
                        <div></div>
                    </div>
                </div>
                <div class="nav-btn-Navbar">
                    <div class="nav-links">
                        <ul>
                            <li class="nav-link" style="--i: .6s">
                                <a href="../homepage/homepage.php">  Home  </a>
                            </li>
                            <li class="nav-link" style="--i: .85s">
                                <a href="../all-movies/all-movies.php">  Movies  </i></a>
                                <div class="dropdown">
                                    <!-- <ul>
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
                                    </ul> -->
                                </div>
                            </li>
                            <li class="nav-link" style="--i: 1.1s">
                                <a href="#">TVShows</a>
                               
                                        
                            </li>
                            <li class="nav-link" style="--i: 1.35s">
                                <a href="../watchlist/watchlist.php">  Watchlist  </a>
                            </li>
                        </ul>
                    </div>
                    
                    <div class="log-sign" style="--i: 1.8s">
                    <?php 
                    // session_start(); 
                    if (!isset($_SESSION['id'])){
                        echo" <a href='http://localhost/login/login/login.php' class='btn-Navbar transparent'> Log in </a>
                              <a href='../registration/form.php' class='btn-Navbar solid'> Sign up </a>";
                       
                    }else{
                        echo" <a href='http://localhost/login/login/logout.php' class='btn-Navbar transparent'> Log out </a>
                             ";
                        
                    }
                    ?>

                    </div>
                
                
    
                
                <?php
                if(isset($_SESSION['id'])){
                                     echo "<div class='profile-header' onclick=\"location.href='../profile/profilefinal.php'\">
                                     <a >".$_SESSION["Name"][0]."</a>
                                     </div>"   ;
                                }
                ?>
            </div>
        </header>
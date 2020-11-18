<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href="forum.css?v=<?php echo time(); ?>" type="text/css" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital@1&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/3e55b52515.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>FORUM</title>
</head>
<body>
    <?php
    session_start();
    
    if (!isset($_SESSION['access_token'])){
        header("url: ..login/login.php");
    }
    
    $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname="moviereview";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password,$dbname);
    if(isset($_GET['q'])){

     $array =explode("," ,$_GET['q']);

     $a=intval($array[0]);
     $sql="select comment_id,comments,likes,dislikes,theory_id from comments where theory_id =$a order by comment_id DESC" ;
     $result = $conn->query($sql) or die($conn->error);
     $_SESSION['id']=$a;
     $_SESSION['question']=$array[1];
     
    }
    $id=$_SESSION['id'];
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }else if($_SERVER['REQUEST_METHOD']=='POST'){
                if(isset($_POST['post']) && $_POST['post']!==""){
                    $desc=$_POST['post'];
                    $desc = strip_tags($desc);
                    $sql="insert into comments (theory_id,user_id, comments,likes,dislikes) values ($id, 1,'$desc',0,0)";
                    mysqli_query($conn,$sql);
                    
                    unset($_POST['post']);
                    }
    }

    
    
    // Check connection
        
        
        $sql="select comment_id,comments,likes,dislikes,theory_id from comments where theory_id =$id order by comment_id DESC" ;
        $result = $conn->query($sql) or die($conn->error);
    
        
        $conn->close();
        
    ?>

    <script>
    function likes(ele,id){
       
        if(ele.name=='like'){
            lid="d"+String(id)
            lid=document.getElementById(lid).value
        }else if(ele.name=='dislikes'){
            
            lid=document.getElementById(id).value
        }
        const data=[ele.value,id,ele.name,lid]
        const json=JSON.stringify(data)
        
        var xmlhttp = new XMLHttpRequest();
         xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                console.log(xmlhttp.responseText)
                if (ele.name==='like'){
                document.getElementById(id).innerHTML=xmlhttp.responseText;
                document.getElementById(id).style.color="blue"
                }else{
                    id="d"+String(id)
                    document.getElementById(id).innerHTML=xmlhttp.responseText;
                    document.getElementById(id).style.color="blue"
            }

      }
    };
    xmlhttp.open("GET","getData.php?q="+json,true);
   
    xmlhttp.send();
    }
    </script>
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

    <div class="forum">
    <div class='question'>
        <h1><?php print_r($_SESSION['question']);?></h1>
        <form class="create-post" action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>' method='POST'>
        <textarea class="post" name="post" required></textarea>
        <input type="submit" class='submit' name="create" value="POST" focus/>
        </form>



    </div>
    <hr/>
    <div class="comments">
    <?php
    while($row = $result->fetch_assoc()) {
        
        echo "<div class=\"desc\">
        <div class=\"content\">".$row['comments']."<br><br>
        
        <button type=\"submit\" class=\"like\"  onclick=\"likes(this,".$row['comment_id'].")\" name=\"like\" value=".$row['likes']."><i id=".$row['comment_id']." class=\"fa fa-thumbs-o-up\" style=\"font-size:14px\" >".$row['likes']."</i></button>
        <button type=\"submit\" class=\"dislikes\" onclick=\"likes(this,".$row['comment_id'].")\" name=\"dislikes\" value=".$row['dislikes']."><i id=\"d".$row['comment_id']."\" class=\"fa fa-thumbs-o-down\" style=\"font-size:14px\">".$row['dislikes']."</i></button>
        
        </div>
        </div>" ;
      }
    
    ?>
    </div>
    </div>
    <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
    <script src="https://cdn.ckeditor.com/4.15.0/basic/ckeditor.js">
</script>
    <script>
        CKEDITOR.replace( 'post' );
    </script>
    
</body>
</html>
<<<<<<< HEAD
<?php session_start();
?>
=======
>>>>>>> 2a50bf373e7ccd313fa5770f228a834a3968971d
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Cutive+Mono&family=Poppins:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">    
    <link rel="stylesheet" href="profile2.css">
    <title>Profile Card</title>
</head>
<body>
<<<<<<< HEAD
 
    <!-- <h3 style="color:aliceblue; text-align: center; padding-top:50px">Profile</h3> -->
    <div class="modal">
=======

    <?php

    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'moviereview');
    
    // Try connecting to the Database
    $conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
        if($conn->connect_error){
            echo "$conn->connect_error";
            die("Connection Failed : ". $conn->connect_error);
        } else {
            
        $sql="SELECT * from `user` where user_id=721";
        $result = mysqli_query( $conn,$sql);
        $resultcheck = mysqli_num_rows($result) > 0;

        if($resultcheck)
        {
            while($row = mysqli_fetch_assoc($result))
            {
                ?>
<div class="modal">
>>>>>>> 2a50bf373e7ccd313fa5770f228a834a3968971d
        <img src="img/pic3.jpeg" alt="">
        <div class="close"></div>
    </div>
    
    <div class="container">
        <div class="card">
            <div class="header">
                <div class="hamburger-menu">
                    <div class="center"></div>
                </div>
                <a href="#" class="mail">
                    <i class="far fa-envelope"></i>
                </a>
<<<<<<< HEAD
=======

                
>>>>>>> 2a50bf373e7ccd313fa5770f228a834a3968971d
                <div class="main">
                    <div class="image">
                        <div class="hover">
                            <i class="fas fa-camera fa-2x"></i>
                        </div>
                    </div>
<<<<<<< HEAD
                    <h3 class="name"><?php echo $_SESSION['Name'] ?></h3>
                    <h3 class="sub-name">@J_wright</h3>
=======
                    <h3 class="name"><?php echo $row['Name']; ?></h3>
                    <h3 class="sub-name"><?php echo $row['username']; ?></h3>
>>>>>>> 2a50bf373e7ccd313fa5770f228a834a3968971d
                </div>
            </div>

            <div class="content">
                <div class="left">
                    <div class="about-container">
                        <h3 class="title">About</h3>
<<<<<<< HEAD
                        <p class="text">Lorem Ipsum is simply text of the printing and types industry.</p>
=======
                        <p class="text"><?php echo $row['Bio']; ?></p>
>>>>>>> 2a50bf373e7ccd313fa5770f228a834a3968971d
                    </div>
                    <div class="icons-container">
                        <a href="#" class="icon">
                            <i class="fab fa-facebook"></i>
                        </a>
                        <a href="#" class="icon">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="icon">
                            <i class="fab fa-google-plus-g"></i>
                        </a>
                        <a href="#" class="icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </div>
                    <div class="buttons-wrap">
                        <div class="follow-wrap">
                            <a href="#" class="follow">Follow</a>
                        </div>
                        <div class="share-wrap">
                            <a href="#" class="share">Share</a>
                        </div>
                    </div>
                </div>

                <div class="right">
                    <div>
                        <h3 class="number">91</h3>
                        <h3 class="number-title">Posts</h3>
                    </div>
                    <div>
                        <h3 class="number">2.4K</h3>
                        <h3 class="number-title">Following</h3>
                    </div>
                    <div>
                        <h3 class="number">4.7K</h3>
                        <h3 class="number-title">Followers</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
<<<<<<< HEAD
=======
                <?php



            }
        }
        else {
            echo "no";
        }
    
        }
        
     
        
?>
    <!-- <h3 style="color:aliceblue; text-align: center; padding-top:50px">Profile</h3> -->
    

>>>>>>> 2a50bf373e7ccd313fa5770f228a834a3968971d
    <script src="app.js"></script>
</body>
</html>
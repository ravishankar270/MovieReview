<!DOCTYPE html>


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css" />
    <title>Login page</title>
</head>

<body>


<?php

    include('google.php');
    
    if(isset($_SESSION['access_token'])){
        header('Location: index.php');
        exit();
    }
    $auth=$google_client->createAuthUrl();


     
        ?>
    
   <?php 
    if($_SERVER['REQUEST_METHOD']=='POST'){
        
    
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname="moviereview";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password,$dbname);
    
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";
        $email=$_POST['email'];
        $password1=$_POST['password'];
        $sql=" select Email_id,password from user where Email_id='$email' and password='$password1  '";
        $result = $conn->query($sql);
        if($result->num_rows==1){
            echo"<h1 style='color:white'>successful</h1>";
         
    }
    else 
    {
            echo "<h2>0 results</h2>";
          }
        }
        
    ?>
        

    <div class="box">
        <form class='form' method="POST" action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>'>
            <h1>Sign In</h1>
            <div class="input1">
                <input type="email" name="email" autocomplete="off" required />
                <label for="email" class="label-email">
                    <span class="content-email">Email</span>
                </label>
            </div>
            <div class="input1">
                <input type="password" name="password" required />
                <label for="password" class="label-email">
                    <span class="content-email">Password</span>
                </label>
            </div>

            <input type="submit" name="login" value="Login" />
            <div class="help">
                <div>
                    <input type="checkbox" name="rememberme" value="Remember me" />
                    <label for='rememberme'>Remember me</label>
                </div>

                <a href="#">Forget Password?</a>
                <div>
                <input type='button' value='Login with Google' onClick="window.location='<?php echo $auth; ?>'"/>
                </div>
            </div>
            
            
            

        </form>
        

    </div>



</body>
</html>
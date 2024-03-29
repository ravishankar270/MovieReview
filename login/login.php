<?php session_start(); 
?>
<!DOCTYPE html>


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href="login.css?v=<?php echo time(); ?>" type="text/css" />
     <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital@1&display=swap" rel="stylesheet">
     <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <title>Login page</title>
</head>

<body>


<?php

require_once('../googleapis/vendor/autoload.php');

    $google_client=new Google_client();
    $google_client->setClientId("16817687725-0vn2hhn7m3pdfuk7mcukjmgutb5mj88s.apps.googleusercontent.com");
    $google_client->setClientSecret('fmkbIn_UKTwgKKIn8uH-R3CX');
    $google_client->setRedirectUri('http://localhost/login/login/home.php');
    
    $google_client->addScope('email');
    $google_client->addScope('profile');
    
    
    if(isset($_SESSION['id'])){
        header('Location: index.php');
        exit();
    }
    $auth=$google_client->createAuthUrl();


     
        ?>
    
   <?php 
    if($_SERVER['REQUEST_METHOD']=='POST'){
        
        include('../connectdb.php');
        if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }else{
        $email=$_POST['email'];
        $password1=$_POST['password'];
        
        $sql1="select admin_id,admin_email,admin_password from admin where admin_email='$email' and admin_password='$password1'";
        $result1 = $conn->query($sql1);
        $user_info1=$result1->fetch_row();

        if($result1->num_rows==1){

            $_SESSION['adminid']=$user_info1[0];
            header('location: ../admin/admin.php');
        }
        else{
        $sql="select user_id, Email_id,password,username from user where Email_id='$email' and password='$password1'";

        $result = $conn->query($sql);
        $user_info=$result->fetch_row();
        
        

        if($result->num_rows==1){
            $_SESSION['Name']=$user_info[3];

     
        $_SESSION['Email']=$user_info[1];
        $_SESSION['id']=$user_info[0];
        header("location: ../homepage/homepage.php");
         
    }
    else 
    { header("location: ../registration/form.php");
          }
      }
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
                    <input type="checkbox"  name="rememberme" value="Remember me" />
                    <label for='rememberme'>Remember me</label>
                </div>

<?php
    if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
    }
    
?>

                <a href="forgot.php">Forget Password?</a>
                
            </div>
            <div class="google" >
                <div class="logoG">
                <i class='fab fa-google-plus-g' style='font-size:24px;color:red'></i>
            </div>
                <div class="text" onClick="window.location='<?php echo $auth; ?>'">Google</div>
            </div>
            
            
            

        </form>
        

    </div>



</body>
</html>
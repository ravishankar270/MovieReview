<!-- <!DOCTYPE html>
<html>
  <head>
    <title>Registration</title>
    <link rel="stylesheet" type="text/css" href="form.css" />
  </head>
  <body>
    <div class="wrap">
        <h2>Registration</h2>
        <form action="register.php" method="post">
            
            <input type="text" placeholder="Username" class="form-control" id="username" name="username" required/>

            <input type="password" placeholder="Password" class="form-control" id="password" name="password" required/>
            <input type="password" placeholder="Re-type Password" class="form-control" id="repassword" name="repassword" required/>
            <input type="submit" value="Register" />
        </form>
          
    </div>
</body>
</html> -->

<!DOCTYPE html>


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href="form.css?v=<?php echo time(); ?>" type="text/css" />
     <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital@1&display=swap" rel="stylesheet">
     <script src='https://kit.fontawesome.com/a076d05399.js'></script>
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
    
   
       <script type="text/javascript">
         function check(e){
            if(e.password.value===e.cpassword.value){
              var json=[e.email.value,e.password.value]
              console.log(json)
              const data=JSON.stringify(json)
              console.log(data)
              var xmlhttp = new XMLHttpRequest();
           xmlhttp.onreadystatechange = function() {
              if (this.readyState == 4 && this.status == 200) {
                console.log(xmlhttp.responseText)
               if(xmlhttp.responseText==='registered'){
                console.log('hello')
                location.href='index.php'
               }

        }
      }
      xmlhttp.open("post","register.php");
     xmlhttp.setRequestHeader("Content-type", "application/json");
      xmlhttp.send(data);
      }else{
        document.getElementById('correct').innerHTML="passwords do not match"
      }
       
        
        

    
    return false
    }
    

       </script> 
       <script type="text/javascript">
         
       </script>

    <div class="box">
        <form class='form' onsubmit ="return check(this)" >
            <h1>Sign Up</h1>
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
            <div class="input1">
                <input type="password" name="cpassword"  required />
                <label for="password" class="label-email">
                    <span class="content-email">Confirm Password</span>
                </label>
            </div>
            <div id='correct'></div>
            <input type="submit" name="login" value="Sign Up" />
            <div class="help">
                <div>
                    <label for='rememberme'>OR</label>
                </div>

                
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
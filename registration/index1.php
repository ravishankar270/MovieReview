<?php 
session_start();
    include('../connectdb.php');
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }else {
      	$query="select user_id from user where Email_id='".$_SESSION['email']."'";

$res=$conn->query($query) or die($conn->error);


if($res->num_rows==1){
	$row=$res->fetch_row();
$_SESSION['id']=$row[0];

}else{
	echo $query;
}

      }

?>
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


    
   
       <script type="text/javascript">
         function check(e){
              var json=[e.username.value]
              console.log(json)
              const data=JSON.stringify(json)
              console.log(data)
              var xmlhttp = new XMLHttpRequest();
           xmlhttp.onreadystatechange = function() {
              if (this.readyState == 4 && this.status == 200) {
                console.log(xmlhttp.responseText)
               if(xmlhttp.responseText==='done'){
                console.log(xmlhttp.responseText)
                location.href='../homepage/homepage.php'
               }else{
               	document.getElementById('error').innerHTML='already exists'
               }

        }
      }
      xmlhttp.open("post","username.php");
     xmlhttp.setRequestHeader("Content-type", "application/json");
      xmlhttp.send(data);
     
        
        

    
    return false
    }
    

       </script> 
       <script type="text/javascript">
         
       </script>

    <div class="box">
        <form class='form' onsubmit ="return check(this)" >
            <h1>Enter Username to continue</h1>
            
            <div class="input1">
                <input type="text" name="username" autocomplete="off" required />
                <label for="username" class="label-email">
                    <span class="content-email">Username</span>
                </label>
            </div>
            <div id="error"></div>
            <input type="submit" name="login" value="Sign Up" />

            
            
            

        </form>
        

    </div>



</body>
</html>
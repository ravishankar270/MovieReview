<?php session_start();?>

<?php
include('../connectdb.php');

        $error="";
        
    
    // Create connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }else if($_SERVER['REQUEST_METHOD']=='POST'){
                if(isset($_POST['submit']) ){
                  $username=$conn-> real_escape_string(strip_tags($_POST['Username']));
                  $email=$conn -> real_escape_string(strip_tags($_POST['email']));
                  
                  $bio=$conn -> real_escape_string(strip_tags($_POST['bio']));
                  $phone=intval($_POST['Phone']);
                  $file=addslashes(file_get_contents($_FILES['image']['tmp_name']));
                  
    $sql="update user set username='$username',Phone_no=$phone,Email_id='$email', image='$file',bio='$bio' where user_id=".$_SESSION['id'];
                  $result = $conn->query($sql) or die($conn->error);
                    if($result){
                    header('location: profilefinal.php');

                    }else{
                      echo "No";
                    }
                   }
                
                  

                  

                  
                    
    }
 


    
    
    // Check connection
        
        
        
    
        
        $conn->close();

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel='stylesheet' href="updateform.css?v=<?php echo time(); ?>" type="text/css" />
        <script type="text/javascript" src="admin.js?v=<?php echo time();?>"></script>

    </head>
    <body>
<?php 
include('../footer&header/header.php');
?>

<!-- ADD MOVIE -->

<div id="addmovie" class="tabcontent">
    <br>
<div class="containeru">
  <form action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>' method="post" enctype="multipart/form-data">
    <div class="row">
      <div class="col-25">
        <label for="Username">Username</label>
      </div>
      <div class="col-75">
        <input type="text" class="text" id="Username" name="Username" placeholder="Movie's name.." required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="Phone">Phone Number</label>
      </div>
      <div class="col-75">
        <input type="Phone" class="Phone" id="Phone" name="Phone" placeholder="Phone Number" required>
      </div>

    </div>
    <div class="row">
      <div class="col-25">
        <label for="email">Email</label>
      </div>
      <div class="col-75">
        <input type="Email" class="Email" name="email" placeholder="Email">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="bio">bio</label>
      </div>
      <div class="col-75">
        <textarea id="bio" name="bio" placeholder="Write something.." style="height:200px" required></textarea>
      </div>
    </div>
      
    <div class="row" style="margin: 10px 0px 10px;">
    <label for="image[]">Profile</label>
  <input type="file" name="image" id="image" required>
  <span class="error"><?php echo $error; ?></span>

    </div>
    
<br>
    <div class="row">
      <input type="submit" class="submit1" name='submit' value="Submit">
    </div>
  </form>
</div>
</div>
</div>
<?php 
include('../footer&header/footer.php');
?>
</body>
</html>

<?php session_start();?>

<?php
include('../connectdb.php');

        $error="";
        
    
    // Create connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }else if($_SERVER['REQUEST_METHOD']=='POST'){
                if(isset($_POST['submit']) ){
                  $movie_name=$conn-> real_escape_string(strip_tags($_POST['Moviename']));
                  $director=$conn -> real_escape_string(strip_tags($_POST['Director']));
                  $genre=$conn -> real_escape_string($_POST['genre']);
                  $description=$conn -> real_escape_string(strip_tags($_POST['description']));
                  $Rating=$_POST['rating'];
                  $trailer=$_POST['trailer'];
                  $runtime=$conn -> real_escape_string($_POST['runtime']);
                  

                 $a= array( );

                  $upload=0;
                  $dir="../Movies_images/" .$movie_name;
                  if(!file_exists($dir)){
                     mkdir($dir, 0755, true);
                  }
                  for($i=0; $i<count($_FILES["image"]["name"]); $i++)
                  {


                  $fileData = pathinfo(basename($_FILES["image"]["name"][$i]));
                  $fileName = $fileData['filename']. '.' . $fileData['extension'];
                    $check = getimagesize($_FILES["image"]["tmp_name"][$i]);
                    if($check !== false) {
                      $upload = 1;
                    } else {
                      $error='File is not an image';
                      $upload = 0;
                      break;
                    }
                    $target_file=$dir."/".$fileName;

                    if (file_exists($target_file)) {
                      $error="Sorry, file already exists.";
                      $upload = 0;
                      break;
                    }

                   

                  if (move_uploaded_file($_FILES["image"]["tmp_name"][$i], $target_file))
                  {
                    array_push($a,$target_file);



                  }
                  else
                  {
                   echo "<script>alert('There was an error uploading the file {$_FILES['image']['name'][$i]}, please try again!')</script><br />";
                  }
              } // clo
                 
                //   $UploadedFileName=$_FILES['image']['name'];
                //   $UploadedFileName1=$_FILES['image1']['name'];
                //   $UploadedFileName2=$_FILES['image2']['name'];
                //   $UploadedFileName3=$_FILES['image3']['name'];
                //   $check = getimagesize($_FILES["image"]["tmp_name"]);
                //   $check1 = getimagesize($_FILES["image1"]["tmp_name"]);
                //   $check2 = getimagesize($_FILES["image2"]["tmp_name"]);
                //   $check3 = getimagesize($_FILES["image3"]["tmp_name"]);
                //     if($check !== false && $check1 !== false && $check2 !== false && $check3 !== false) {
                //       if($UploadedFileName!='' && $UploadedFileName1!='' & $UploadedFileName2!='' && $UploadedFileName3!='')
                // {
                //   $upload_directory = "../Movies_images/".$movie_name."/"; //This is the folder which you created just now
                //   $TargetPath=time().$UploadedFileName;
                //   $TargetPath1=time().$UploadedFileName1;
                //   $TargetPath2=time().$UploadedFileName2;
                //   $TargetPath3=time().$UploadedFileName3;
                //   print_r($_FILES);
                //   if(move_uploaded_file($_FILES['files']['tmp_name'], $upload_directory.$TargetPath)){ 
                //   if(move_uploaded_file($_FILES['files']['tmp_name'], $upload_directory.$TargetPath1)){  
                //   if(move_uploaded_file($_FILES['files']['tmp_name'], $upload_directory.$TargetPath2)){   
                //   if(move_uploaded_file($_FILES['files']['tmp_name'], $upload_directory.$TargetPath3)){ 
                if($upload==1){
                    $sql="INSERT INTO `entertainment` ( `Director`,`Name`,`genre`,`images`,`images1`,`images2`,`images3`,`rating`,`description`,`admin_id`,`Type`,`trailer` ) VALUES ( '$director','$movie_name','$genre','".$a[0]."','".$a[1]."','".$a[2]."','".$a[3]."',$Rating,'$description',0,'Movie','$trailer')";
                  $result = $conn->query($sql) or die($conn->error);
                    if($result){
                      echo "Updated";

                    }else{
                      echo "No";
                    }
                    unset($_POST);
                    }
                //     // Write Mysql Query Here to insert this $QueryInsertFile   .                   
                //   }
                //   }
                //   }
                //   }
                // }

                //     } else {
                //       echo "File is not an image.";
                //       $uploadOk = 0;
                //     }
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
        <link rel='stylesheet' href="admin.css?v=<?php echo time(); ?>" type="text/css" />
        <script type="text/javascript" src="admin.js?v=<?php echo time();?>"></script>

    </head>
    <body>
    <div class="top-nav" style="background-color: #008080; color: white; padding:20px; ">
            ADMIN
        </div>
     <div class="flex">   
    <div class="sidebar">
  <a class="tablinks" onclick="openCity(event, 'addmovie')" id="defaultOpen" href="#">Add Movie</a>
  <a class="tablinks" onclick="openCity(event, 'addshow')" href="#">Add TV Show</a>
  <a class="tablinks" onclick="openCity(event, 'addquiz')" href="#">Create Quiz</a>
       </div>


<!-- ADD MOVIE -->

<div id="addmovie" class="tabcontent">
    <br>
<div class="container">
  <form action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>' method="post" enctype="multipart/form-data">
    <div class="row">
      <div class="col-25">
        <label for="Moviename">Name of the movie</label>
      </div>
      <div class="col-75">
        <input type="text" id="Moviename" name="Moviename" placeholder="Movie's name.." required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="Director">Director</label>
      </div>
      <div class="col-75">
        <input type="text" id="Director" name="Director" placeholder="Director's Name" required>
      </div>

    </div>
    <div class="row">
      <div class="col-25">
        <label for="genre">Genre</label>
      </div>
      <div class="col-75">
        <select id="genre" name="genre" required>
          <option value="Action/Thriller">Action/Thriller</option>
          <option value="Horror">Horror</option>
          <option value="Comedy">Comedy</option>
          <option value="Sci-Fi">Sci-Fi</option>
          <option value="Award Winning">Award Winning</option>
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="description">Description</label>
      </div>
      <div class="col-75">
        <textarea id="description" name="description" placeholder="Write something.." style="height:200px" required></textarea>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="rating">Rating</label>
      </div>
      <div class="col-75">
        <select id="rating" name="rating" required>
          <option value="5">5 star</option>
          <option value="4">4 star</option>
          <option value="3">3 star</option>
          <option value="2">2 star</option>
          <option value="1">1 star</option>
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="runtime">Runtime</label>
      </div>
      <div class="col-75">
        <input type="text" id="runtime" name="runtime" placeholder="Runtime" required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="trailer">Trailer Link</label>
      </div>
      <div class="col-75">
        <input type="text" id="trailer" name="trailer" placeholder="Trailer Link" required>
      </div>
    </div>
    <br>
    <div class="row" style="margin: 10px 0px 10px;">
    <label for="image[]">Select image to upload:</label>
  <input type="file" name="image[]" id="image[]" required>
  <span class="error"><?php echo $error; ?></span>

    </div>
    <div class="row" style="margin: 10px 0px 10px;">
  <label for="image[]">Select image to upload:</label>
  <input type="file" name="image[]" id="image[]" required>
  <span class="error"><?php echo $error; ?></span>

    </div>
    <div class="row" style="margin: 10px 0px 10px;">
    <label for="image[]">Select image to upload:</label>
  <input type="file" name="image[]" id="image[]" required>
  <span class="error"><?php echo $error; ?></span>

    </div>
    <div class="row" style="margin: 10px 0px 10px;">
    <label for="image[]">Select image to upload:</label>
  <input type="file" name="image[]" id="image[]" required>
  <span class="error"><?php echo $error; ?></span>

    </div>
<br>
    <div class="row">
      <input type="submit" name='submit' value="Submit">
    </div>
  </form>
</div>
</div>



<!-- ADD TV SHOW -->
        
<div id="addshow" class="tabcontent">
    <br>
<div class="container">
  <form action="action_page.php">
    <div class="row">
      <div class="col-25">
        <label for="fname">Name of the TV Show</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="firstname" placeholder="Show's name..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Director</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="lastname" placeholder="Director's Name">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="country">Genre</label>
      </div>
      <div class="col-75">
        <select id="country" name="country">
          <option value="australia">Action/Thriller</option>
          <option value="canada">Horror</option>
          <option value="usa">Comedy</option>
          <option value="usa">Sci-Fi</option>
          <option value="usa">Award Winning</option>
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="subject">Description</label>
      </div>
      <div class="col-75">
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:300px"></textarea>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="country">Rating</label>
      </div>
      <div class="col-75">
        <select id="country" name="country">
          <option value="australia">5 star</option>
          <option value="canada">4 star</option>
          <option value="usa">3 star</option>
          <option value="usa">2 star</option>
          <option value="usa">1 star</option>
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="fname">Number of seasons</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="firstname" placeholder="Number of seasons..">
      </div>
      
      
    </div>
    <div class="row">
      <div class="col-25">
        <label for="fname">Number of episodes per season</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="firstname" placeholder="Number of episodes..">
      </div>
    </div>
    <div class="row">
      <input type="submit" value="Submit">
    </div>
  </form>
</div>
</div>



<!-- CREATE QUIZ -->

<div id="addquiz" class="tabcontent">
    <br>
<div class="container">
  <form action="action_page.php">
    <div class="row">
      <div class="col-25">
        <label for="fname">Question 1</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="firstname" placeholder="Question 1..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="fname">Question 1 Option 1</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="firstname" placeholder="Option 1">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="fname">Question 1 Option 2</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="firstname" placeholder="Option 2">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="fname">Question 1 Option 3</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="firstname" placeholder="Option 3">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="fname">Question 1 Option 4</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="firstname" placeholder="Option 4">
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-25">
        <label for="lname">Question 2</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="lastname" placeholder="Question 2..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="fname">Question 2 Option 1</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="firstname" placeholder="Option 1..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="fname">Question 2 Option 2</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="firstname" placeholder="Option 2..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="fname">Question 2 Option 3</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="firstname" placeholder="Option 3..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="fname">Question 2 Option 4</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="firstname" placeholder="Option 4..">
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-25">
        <label for="lname">Question 3</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="lastname" placeholder="Question 3..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="fname">Question 3 Option 1</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="firstname" placeholder="Option 1..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="fname">Question 3 Option 2</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="firstname" placeholder="Option 2..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="fname">Question 3 Option 3</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="firstname" placeholder="Option 3..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="fname">Question 3 Option 4</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="firstname" placeholder="Option 4..">
      </div>
    </div>
    
    <div class="row">
      <input type="submit" value="Submit">
    </div>
  </form>
</div>
</div>
</div>

<script>
// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
        
        <script src="" async defer></script>
        <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
    </body>

</html>





